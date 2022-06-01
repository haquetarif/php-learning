<?php



$database = require 'core/bootstrap.php';

/*
 // require 'Task.php'; only needed if we make fetch the
// data from database to a Task object. Not needed if we
// are using the standard


$router = new Router;

require 'routes.php';



require $router->direct($uri);


?>

*/



require Router::load('routes.php')

	->direct(Request::uri());



