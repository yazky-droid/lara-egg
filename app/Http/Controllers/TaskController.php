<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index', [
            'tasks' => Task::orderBy('id', 'desc')->get(),
        ]);
    }

    public function store(TaskRequest $request)
    {
        // request itu adalah untuk merequest method atau nanti merequest field yang bisa diisi oleh user...
        // kita juga bisa membuat make request untuk mengatur request didalamnya..
        // $request->validate([
        //     'list' => ['required','string','min:3'], //selain required bisa cari validation yang lain di file validation, CARI TAU SATU PERSATU VALIDATIONNYA
        // ]);
        Task::create($request->all());
        return back();
    }
    public function edit(Task $task)
    {

        // $task = Task::where('id', $id)->first();
        // $task = Task::find($id); //find id sama dengan where id
        return view('tasks.edit', ['task' => $task]);
    }
    public function update(TaskRequest $request, $id)
    {
        Task::find($id)->update(['list' => $request->list]);
        return redirect('tasks');
    }
    public function destroy($task)
    {
        Task::find($task)->delete();
        return back();
    }
}
