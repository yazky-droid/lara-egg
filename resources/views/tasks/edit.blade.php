<x-app-layout title="Task Page">
<div class="container">
    <div class="row">
        <div class="col-md-5">
          <h1>Update Task</h1>
            <form action="/tasks/{{ $task->id }}" method="post" >
                @method('put')
                    @csrf
                      <input type="text" class="form-control" name="list" value="{{ $task->list }}" placeholder="The name of the task">
                        <button type="submit" class="btn btn-primary mt-2">Update</button>
            </form>

        </div>
    </div>
</div>
</x-app-layout>
