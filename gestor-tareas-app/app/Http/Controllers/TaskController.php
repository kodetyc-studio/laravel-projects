<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Muestra una lista de todas las tareas.
     */
    public function index()
    {
        return Task::all();
    }

    /**
     * Almacena una nueva tarea.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
        ]);

        $task = Task::create($request->all());

        return response()->json($task, 201);
    }

    /**
     * Muestra una tarea específica.
     */
    public function show(Task $task)
    {
        return $task;
    }

    /**
     * Actualiza la tarea especificada.
     */
    public function update(Request $request, Task $task)
    {
        $task->update($request->all());

        return response()->json($task, 200);
    }

    /**
     * Elimina la tarea especificada.
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return response()->json(null, 204);
    }
}
