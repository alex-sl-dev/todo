<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class TasksRepository extends Model
{
    protected $table = 'tasks';
    protected $fillable = ['title', 'completed'];
    protected $visible = ['id', 'title', 'completed'];

    public function toDomain()
    {
        if (is_a($this, 'Illuminate\Database\Eloquent\Collection')) {
            //....do whatever for a collection....
        } else {
            //....do whatever for not a collection....
            return;
        }
    }

    /**
     * @param int $id
     * @return TasksRepository
     */
    public function findByID(int $id): self
    {
        return self::find($id);
    }

    public function getAll(): Collection
    {
        return self::all();
    }
}
