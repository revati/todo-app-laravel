<?php namespace App\Http\Controllers;

Use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TasksController
{
  public function index()
  {
    $tasks = Auth::user()->tasks;

    return view('tasks.list', compact('tasks'));
  }

  public function edit($id = null)
  {
    $task = $id ? Task::find($id) : new Task();

    return view('tasks.edit', compact('task'));
  }

  public function save(Request $request, $id = null)
  {
    $task = $id ? Task::find($id) : new Task();

    $task->user()->associate(Auth::user());

    $task->fill($request->all())->save();

    return redirect()->route('backend.tasks');
  }
}
