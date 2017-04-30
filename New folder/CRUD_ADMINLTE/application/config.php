<?php
$host="localhost";
$user="root";
$pwd="";
$dbname="kc47entcom_kc48";

$link=mysql_connect($host,$user,$pwd);
$db = mysql_select_db($dbname,$link);
if(!$db) die("failed to connect to database.......");
mysql_query("SET NAMES UTF8");

?>
