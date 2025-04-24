<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Add a Task
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $task = new Task();
        $task->title = $validated['title'];
        $task->is_completed = false;
        $task->save();

        return response()->json($task, 201);
    }

    // Mark as Completed
    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        $request->validate([
            'is_completed' => 'required|boolean'
        ]);

        $task->is_completed = $request->is_completed;
        $task->save();

        return response()->json($task);
    }

    // Get Pending Tasks
    public function pending()
    {
        $pendingTasks = Task::where('is_completed', false)->get();
        return response()->json($pendingTasks);
    }
}
