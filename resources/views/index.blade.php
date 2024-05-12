<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
</head>
<body>
    <h1>Task List</h1>

    <form action="{{ route('tasks.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" value=""><br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description"></textarea><br>
        <input type="file" id="image" name="image" value=""><br>
        <button type="submit">Save</button>
    </form>


    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task->title }}</li>
            <li><?='id = '?>{{ $task->id }}</li>
            <img src="{{ Storage::url($task->image_path) }}" alt="Task Image">
        @endforeach
    </ul>



    <a href="{{ route('tasks.show', [$task->id]) }}">Create New Task