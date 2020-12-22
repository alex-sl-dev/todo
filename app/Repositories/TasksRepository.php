<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class TasksRepository extends Model
{
    //
    protected $fillable = ['title', 'completed'];
}
