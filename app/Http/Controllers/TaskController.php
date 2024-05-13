<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\Models\Task;

class TaskController extends Controller
{   
    

    //Отобразить список задач
    public function index()
    {
        $tasks = Task::all();
        return view('index',['tasks' => $tasks]);
    }

    //Показать форму создания задач

    public function store(TaskRequest $request)
    {
        $task = new Task();
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        
        if($request->hasFile('image'))
        {
            $imagePath = $request->file('image')->store('images', 'public');
            $task->image_path = $imagePath;
        }

        
        $task->save();

        return redirect()->route('tasks.index');
    }

    //Отоброзить инфрмацию о конкретной задаче

    public function show($id)
    {
        $task = Task::findOrFail($id);
        $task->find($id);
        return view('show',['task' => $task]);
    }

    //Показать форму редактирования задачи

    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return view('tasks.edit',['task' => $task]);
    }

    public function update(TaskRequest $request,$id)
    {

        $task = Task::findOrFail($id);
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->save();

        return redirect()->route('tasks.index');
    }

    public function destroy($id)
    {

        $task = Task::findOrFail($id);
        $task->delete();

        return redirect()->route('tasks.index');
    }
    
}
