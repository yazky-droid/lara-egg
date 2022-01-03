<x-app-layout title="Task Page">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            @include('tasks.__create')
        </div>

    <ul class="list-group mt-4">
            @foreach ($tasks as $index => $task )
                <li class="list-group-item d-flex align-items-center justify-content-between">{{ $index + 1 }} -  {{ $task->list }}
                    <div class="d-flex">
                        <a class="btn btn-primary me-2" href="/tasks/{{ $task->id }}/edit">edit</a>
                        <form action="/tasks/{{ $task->id }}" method="post" style="display: inline;">
                        @method('DELETE')
                        @csrf
                        <button type="submit"  class="btn btn-danger ">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
</div>
</x-app-layout>
