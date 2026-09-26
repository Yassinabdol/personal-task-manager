<!DOCTYPE html>
<html>
<head>
    <title>Personal Task Manager</title>
</head>
<body>

    <h1>Personal Task Manager</h1>

    <a href="/tasks/create">Add New Task</a>

    <hr>

    @if($tasks->count() > 0)

        @foreach($tasks as $task)

            <div>
                <h2>{{ $task->task_name }}</h2>

                <p>{{ $task->description }}</p>

                <p>Status: {{ $task->status }}</p>

                <p>Due Date: {{ $task->due_date }}</p>

                <a href="/tasks/{{ $task->id }}/edit">Edit</a>

                <form method="POST" action="/tasks/{{ $task->id }}" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>

                <form method="POST" action="/tasks/{{ $task->id }}/status" style="display:inline;">
                    @csrf
                    @method('PATCH')

                    @if($task->status == 'Pending')
                        <button type="submit">Mark Completed</button>
                    @else
                        <button type="submit">Mark Pending</button>
                    @endif
                </form>

            </div>

            <hr>

        @endforeach

    @else

        <p>No tasks found.</p>

    @endif

</body>
</html>