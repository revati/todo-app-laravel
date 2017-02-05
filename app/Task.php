<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  public function user()
  {
    return $this->hasOne(User::class)
  }
}