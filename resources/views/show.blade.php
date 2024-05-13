<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Show</title>
</head>
<body>
    <h1>Task List</h1>
    <ul>
        <li>{{ $task->description }}</li>
        <img src="{{ Storage::url($task->image_path) }}" alt="Task Image">
    </ul>

    </body>
</html>