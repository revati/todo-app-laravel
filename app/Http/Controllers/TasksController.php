<?php namespace App\Http\Controllers;

Use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Validation\ValidatesRequests;

class TasksController
{
  use ValidatesRequests;

  public function index(Request $request)
  {
    $this->validate($request, [
      'done' => 'boolean'
    ]);

    $tasks = Auth::user()->tasks()->published($request->get('done'))->get();

    return view('tasks.list', compact('tasks'));
  }

  public function edit($id = null)
  {
    $task = $id ? Task::find($id) : new Task();

    return view('tasks.edit', compact('task'));
  }

  public function save(Request $request, $id = null)
  {
    $this->validate($request, [
      'title' => 'required|max:255',
      'content' => 'required',
      'done' => 'present|boolean'
    ]);

    $task = $id ? Task::find($id) : new Task();

    $task->user()->associate(Auth::user());

    $task->fill($request->all())->save();

    return redirect()->route('backend.tasks');
  }
}
