<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PermissionResource;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('auth:api'),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Autorizar usando políticas
        Gate::authorize('permission.index', 'api');
        
        $permissions = Permission::all();

        return PermissionResource::collection($permissions);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Gate::authorize('permission.store', 'api');

        $data = $request->validate([
            'name' => 'required|string|unique:permissions,name',
        ]);

        $data['guard_name'] = 'api'; // Especifica el guard_name para la API

        $permission = Permission::create($data);

        return PermissionResource::make($permission);
    }

    /**
     * Display the specified resource.
     */
    public function show(Permission $permission)
    {
        Gate::authorize('permission.show', 'api');

        return PermissionResource::make($permission);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permission $permission)
    {
        Gate::authorize('permission.update', 'api');

        $data = $request->validate([
            'name' => 'required|unique:permissions,name,' . $permission->id,
            // el . $permission->id permite que al actualizar no tome en cuenta el registro actual, es decir lo excluye de la validación para que no marque error cuando el nombre no cambia
        ]);

        $permission->update($data);

        return PermissionResource::make($permission);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        Gate::authorize('permission.destroy', 'api');

        $permission->delete();

        return response()->noContent();
        
    }
}
