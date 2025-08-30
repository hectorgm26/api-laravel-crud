<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class TaskController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('auth:api', except: ['index', 'show']),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // query se utiliza para construir consultas mas complejas
        // Este es un scope local que se crea en el modelo
        // Sin paginate seriea $tasks = Task::all();
        $tasks = Task::getOrPaginate();

        // Cargar relaciones
        // $tasks->with('user');

        // return response()->json($tasks);
        return TaskResource::collection($tasks); // Se usa el resource para formatear la respuesta, y collection para multiples recursos, y make para uno solo
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        /*
        $request->validate([
            'body' => 'required',
            'user_id' => 'nullable|exists:users,id' // el campo debe existir en la tabla users, coincidiendo con algun valor del campo id
        ]); */

        $data = $request->all();
        $data['user_id'] = auth()->user()->id; // Asignar el id del usuario autenticado

        $task = Task::create($data);
        // return response()->json($task, 201);
        return TaskResource::make($task);
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        // $task = Task::findOrFail($task);
        // Si se coloca el Modelo antes del parametro, laravel hace la busqueda automaticamente por su id (Model Binding)

        // return response()->json($task);
        return TaskResource::make($task);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, $task)
    {
        $task = Task::findOrFail($task);
        $task->update($request->all());
        
        // return response()->json($task);
        return TaskResource::make($task);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($task)
    {
        $task = Task::FindOrFail($task);
        $task->delete();
        return response()->json(null, 204);
    }
}
