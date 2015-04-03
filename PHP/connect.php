<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$link=mysql_connect("localhost","root","") or die("Connection error");
$f1=mysql_select_db("ACM_database",$link) or die("Db Connection Error");

?>