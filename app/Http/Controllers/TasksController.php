<?php namespace App\Http\Controllers;

class TasksController
{
  public function index()
  {
    
    return view('tasks.list');
  }
}
