<?php

class TaskModel
{
    private $tasks;

    public  function __construct()
    {
        $this->tasks[] = ['id' => 1, 'title' => 'Hacer la compra'];
        $this->tasks[] = ['id' => 2, 'title' => 'Hacer ejercicio'];
    }

    public function getAllTask()
    {
        return $this->tasks;
    }

    public function getTaskById($id)
    {
        foreach ($this->tasks as $task) {
            if ($task['id'] == $id) {
                return $task;
            }
        }

        return null;
    }
}
