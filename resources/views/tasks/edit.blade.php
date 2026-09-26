<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body>

    <h1>Edit Task</h1>

    <form method="POST" action="/tasks/{{ $task->id }}">
    @csrf
    @method('PUT')

        <label>Task Name</label>
        <input type="text" name="task_name" value="{{ $task->task_name }}" required>

        <br><br>

        <label>Description</label>
        <textarea name="description" required>{{ $task->description }}</textarea>

        <br><br>

        <label>Due Date</label>
        <input type="date" name="due_date" value="{{ $task->due_date }}" required>

        <br><br>

        <button type="submit">Update Task</button>

    </form>

</body>
</html>