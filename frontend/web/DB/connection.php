<?php
$name = "nails";
$user = "postgres";
$host = "localhost";

$dbConn = pg_connect("host=$host port=5432 dbname=$name user=$user"); 

?>