<?php


$query = require 'bootstrap.php';

require 'Task.php';



$tasks = $query->selectAll('todos'); /* New "tasks" 

object is createdby fetching data from the 'todos' table 

of the mytodo database  <?php die(var_dump($tasks)); Var dumping to see the class name */



require 'index.view.php';

?>

