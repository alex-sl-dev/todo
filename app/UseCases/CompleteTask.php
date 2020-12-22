<?php


namespace App\UseCases;


use App\Repositories\TasksRepository;

/**
 * Class CompleteTask
 * @package App\UseCases
 */
class CompleteTask
{

    protected TasksRepository $tasksRepository;

    /**
     * CompleteTask constructor.
     * @param TasksRepository $tasksRepository
     */
    public function __construct(TasksRepository $tasksRepository)
    {
        $this->tasksRepository = $tasksRepository;
    }

    public function __invoke(int $id)
    {
        $taskModel = $this->tasksRepository->findByID($id);
    }
}
