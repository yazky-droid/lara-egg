<x-app-layout title="Task Edit Page">
<div class="container">
    <div class="row">
        <div class="col-md-5">
          <h1>Update Task</h1>
            <form action="/tasks/{{ $task->id }}" method="post" >
                @method('put')
                    @csrf
                @include('tasks.__form')
                </form>
        </div>
    </div>
</div>
</x-app-layout>
