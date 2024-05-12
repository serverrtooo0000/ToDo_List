<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
</head>
<body>
    <h1>Task List</h1>
    <form action="/todos/{{$task->id}}" method="POST">
        @csrf
        
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" value="{{$task->title}}"><br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description">{{$task->description}}</textarea><br>
        <button type="submit">Save</button>
    </form>

       

</body>
</html>