<?php

namespace App\Http\Controllers;

use App\Repositories\TasksRepository;
use Illuminate\Http\Request;


/**
 * Class TaskController
 * @package App\Http\Controllers
 */
class TaskController extends Controller
{
    /**
     * @var TasksRepository
     */
    protected TasksRepository $tasksRepository;

    public function __construct(TasksRepository $tasksRepository)
    {
        $this->tasksRepository = $tasksRepository;
    }

    //
    public function fetchAll()
    {
        return $this->tasksRepository->getAll()->toJson();
    }

    public function store(Request $request)
    {
        $task = $this->tasksRepository::create($request->all());

        return response()->json("added");
    }

    public function delete($id)
    {
        $this->tasksRepository::destroy($id);

        return response()->json("deleted");
    }
}
