<?php

require 'functions.php';


class Task {

	protected $description;

	protected $completed = false;



	public function __construct($description)
	{
		$this->description = $description;
	}

	public function complete()
	{
		$this->completed = true;
	}

	public function isComplete()
	{
		return $this->completed;

	}
}

$task = new Task('Go to the store'); // a new task object

$task->complete(); // complete the task

var_dump($task -> isComplete()); // Show if the task is complete

?>