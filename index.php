<?php


$database = require 'bootstrap.php';


/* require 'Task.php'; only needed if we make fetch the
data from database to a Task object. Not needed if we
are using the standard*/




$tasks = $database->selectAll('todos'); /* New "tasks" 

object is createdby fetching data from the 'todos' table 

of the mytodo database  <?php die(var_dump($tasks)); Var dumping to see the class name */



require 'index.view.php';

?>

