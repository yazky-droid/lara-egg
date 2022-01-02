<x-app-layout title="Task Page">
<h1>Task</h1>
<form action="/tasks" method="post" >
    @csrf
    <p>
    <input type="text" name="list" placeholder="The name of the task">
    </p>
    <p>
        <label><input type="radio" name="mark" value="True">True</label>
        <label><input type="radio" name="mark" value="False">False</label>
    </p>
    <button type="submit">Create</button>
</form>
<div class="list">
    <ol>
@foreach ($tasks as $task )
        <li>{{ $task->list }}
            <div style="margin-bottom: 15px">
                <a style="color: rgb(216, 14, 0)" href="/tasks/{{ $task->id}}/edit">edit</a>
                <form action="/tasks/{{ $task->id }}" method="post" style="display: inline;">
                @method('DELETE')
                @csrf
                <button type="submit"  style="display: inline; cursor:pointer;">Delete</button>
                </form>
            </div>
        </li>
        @endforeach
    </ol>
    </div>
</x-app-layout>
