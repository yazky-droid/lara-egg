<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index', [
            'tasks' => Task::orderBy('id', 'desc')->get(),
        ]);
    }

    public function store(Request $request)
    {
        Task::create([
            'list' => $request->list,
            'mark' => $request->mark,
        ]);
        return back();
    }
    public function edit(Task $task)
    {

        // $task = Task::where('id', $id)->first();
        // $task = Task::find($id); //find id sama dengan where id
        return view('tasks.edit', ['task' => $task]);
    }
    public function update(Request $request, $id)
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
