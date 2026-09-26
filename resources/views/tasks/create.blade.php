<!DOCTYPE html>
<html>
<head>
    <title>Add New Task</title>
</head>
<body>

    <h1>Add New Task</h1>

    <form method="POST" action="/tasks">
        @csrf

        <label>Task Name</label>
        <input type="text" name="task_name" required>
        <br><br>

        <label>Description</label>
        <textarea name="description" required></textarea>
        <br><br>

        <label>Due Date</label>
        <input type="date" name="due_date" required>
        <br><br>

        <button type="submit">Save Task</button>
    </form>

</body>
</html>