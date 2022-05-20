<?php


$query = require 'bootstrap.php';

require 'Task.php';



$tasks = $query->selectAll('todos'); /* New "tasks" 

object is createdby fetching data from the 'todos' table 

of the mytodo database */

?>


<pre><?php die(var_dump($tasks)); ?></pre>



<?php 

require 'index.view.php';

?>

