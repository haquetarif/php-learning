<?php 

$tasks = $app['database']->selectAll('todos'); 

/* New "tasks" 

object is created by fetching data from the 'todos' table 

of the mytodo database  <?php die(var_dump($tasks)); Var dumping to see the class name */



require 'views/index.view.php';


?>