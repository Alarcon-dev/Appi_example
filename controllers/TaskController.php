<?php

class taskController
{
    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function getAllTask()
    {
        $task = $this->model->getAllTask();

        return json_decode($task);
    }

    public function getTaskByid($id)
    {
        $task = $this->model->getTaskById($id);

        if ($task) {
            return json_encode($task);
        } else {
            return json_encode(['message' => 'TArea no encontrada']);
        }
    }
}
