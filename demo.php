<?php

$var = $_POST['input1'];

$db_username="httpd";
$db_password="aspirine2710";
$db_host="localhost";
$db_name="names";
$link = mysql_connect($db_host, $db_username, $db_password);
mysql_select_db($db_name, $link);

$sql = "INSERT INTO user (name) VALUES ('$var')" ;
$result = mysql_query($sql , $link);
header ("Location: /list-names.php");

?>
