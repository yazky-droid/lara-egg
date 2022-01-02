<x-app-layout title="Task Page">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><h5>Task</h5></div>
                    <div class="card-body">
                        <form action="/tasks" method="post" >
                            @csrf
                                <p>
                                    <input type="text" name="list" class="form-control" placeholder="The name of the task">
                                </p>
                                <p>
                                    <b>Mark : </b>
                                    <label><input type="radio" name="mark" value="True">True</label>
                                    <label><input type="radio" name="mark" value="False">False</label>
                                </p>
                                <button type="submit" class="btn btn-primary">Create</button>
                            </form>
                        </div>
                    </div>
            </div>
        </div>

    <ul class="list-group mt-4">
            @foreach ($tasks as $index=>$task )
                <li class="list-group-item d-flex align-items-center justify-content-between">{{ $index + 1 }} -  {{ $task->list }}
                    <div class="d-flex">
                        <a class="btn btn-primary me-2" href="/tasks/{{ $task->id}}/edit">edit</a>
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
