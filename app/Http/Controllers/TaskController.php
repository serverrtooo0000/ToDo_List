<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{   

    //Отобразить список задач

    public function index()
    {

        $tasks = Task::all();
        return view('tasks.index',['tasks' => $tasks]);
    }

    //Поазать форму создания задач

    public function store(Request $request)
    {

        $task = new Task();
        $task->title = $request->input('title');
        $task->description = $request->input('description');
    }
}
