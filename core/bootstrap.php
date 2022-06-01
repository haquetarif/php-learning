<?php

$app = [];



$app['config'] = require 'config.php';



require 'core/database/Connection.php';

require 'core/database/QueryBuilder.php';

require 'core/Request.php';

require 'core/Router.php';




/* $pdo = Connection::make(); mySQL connection is made 

with the static function "make()" from the Connection.php 

file. It became redundant after refractoring the 
QueryBuilder*/



$app['database'] = new QueryBuilder(

Connection::make($app['config']['database'])

); /* New "query" object is 

created based on the QueryBuilder class from the PHP file 

with the same name. Previous argument was '$pdo' and it's
changed after the refractoring. */


?>