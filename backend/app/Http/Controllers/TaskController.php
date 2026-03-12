<?php

namespace App\Http\Controllers;
use App\Models\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return Task::all();
    }

    public function store(Request $request)
    {
        return Task::create($request->all());
    }

    public function show($id)
    {
        return Task::find($id);
    }

    public function update(Request $request, $id)
    {
        $task = Task::find($id);

        if(!$task){
            return response()->json([
                'message' => 'Task not found'
            ],404);
        }

        $task->update($request->all());

        return response()->json([
            'message' => 'Task updated',
            'task' => $task
        ]);
    }
    public function destroy($id)
    {
        return Task::destroy($id);
    }
}
