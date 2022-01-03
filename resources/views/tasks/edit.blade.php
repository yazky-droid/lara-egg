<x-app-layout title="Task Edit Page">
<div class="container">
    <div class="row">
        <div class="col-md-5">
          <h1>Update Task</h1>
            <form action="/tasks/{{ $task->id }}" method="post" >
                @method('put')
                    @csrf
                      <input type="text" class="form-control @error('list') is-invalid @enderror" name="list" value="{{ $task->list }}" placeholder="The name of the task">
                      @error('list')
                      <span class="invalid-feedback">
                              {{ $message }}
                            </span>
                            @enderror
                        <button type="submit" class="btn btn-primary mt-2">Update</button>
            </form>
        </div>
    </div>
</div>
</x-app-layout>
