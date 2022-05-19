<?php


require 'database/Connection.php';

require 'database/QueryBuilder.php';

// require 'Task.php';



$pdo = Connection::make(); /* mySQL connection is made with 

the static function "make()" from the Connection.php file */



$query = new QueryBuilder($pdo); /* New "query" object is created 

based on the QueryBuilder class from the PHP file with the same name */



$tasks = $query->selectAll('todos'); /* New "tasks" object is created

by fetching data from the 'todos' table of the mytodo database */



require 'index.view.php';

?>

