<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksApiController extends Controller
{
    public function findAll()
    {
        $tasks = Task::all();
        return response()->json($tasks);
    }

    public function find($id)
    {
        $task = Task::find($id);
        return response()->json($task);
    }

    public function create(Request $request)
    {
        $task = new Task();
        $task->title = $request->input('title');
        $task->is_completed = 0;
        $task->save();

        return response()->json($task);
        //return json_encode($task);
    }

    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        $task->title = $request->input('title');
        $task->is_completed = $request->input('is_completed');
        $task->save();
        return response()->json($task);
    }

    public function delete($id)
    {
        Task::find($id)->delete();
        return "succesefuly deleted";
    }

    
}
