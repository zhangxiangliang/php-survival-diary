<?php
class Task {
    public $title;
    public $description;
    public $completed = false;

    function __construct($title, $description)
    {
        $this->title = $title;	
        $this->description = $description;
    }

    function complete()
    {
        $this->completed = true;
    }
}

// tesk the class
$task = new Task('Learn OOP in PHP', 'the task is learn object oriented bootcamp in php');
echo $task->title;

