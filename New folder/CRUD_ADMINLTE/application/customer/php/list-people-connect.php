<?php
include("connect.php");
$sql_listpeople = mysql_query("SELECT * FROM member WHERE id BETWEEN 001 AND 154 ");
mysql_query("SET NAMES UTF8");
?>