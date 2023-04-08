<?php

$connect_db = mysql_connect("localhost", "admin", "1234") or die("database connection fail");

mysql_select_db("db_web", $connect_db);

?>
