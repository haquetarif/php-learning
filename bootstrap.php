<?php

require 'database/Connection.php';

require 'database/QueryBuilder.php';

$config = require 'config.php';


/* $pdo = Connection::make(); mySQL connection is made 

with the static function "make()" from the Connection.php 

file. It became redundant after refractoring the 
QueryBuilder*/



return new QueryBuilder(Connection::make($config['database'])); /* New "query" object is 

created based on the QueryBuilder class from the PHP file 

with the same name. Previous argument was '$pdo' and it's
changed after the refractoring. */


?>