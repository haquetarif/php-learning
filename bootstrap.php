<?php

require 'database/Connection.php';

require 'database/QueryBuilder.php';


/* $pdo = Connection::make(); mySQL connection is made 

with the static function "make()" from the Connection.php 

file */



return new QueryBuilder(Connection::make()); /* New "query" object is 

created based on the QueryBuilder class from the PHP file 

with the same name */


?>