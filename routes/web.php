<?php

use App\Models\Task;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function() {

    $data = [
        'body' => 'Mi primer tarea',
        'user_id' => 1,
        'paid' => true
    ];

    $task = Task::create($data);
    return $task;

});