<?php
$db_username="httpd";
$db_password="aspirine2710";
$db_host="localhost";
$db_name="names";
$link = mysql_connect($db_host, $db_username, $db_password);
mysql_select_db($db_name, $link);

$sql = "SELECT c FROM names" ;
$result = mysql_query($sql , $link);

$row = mysql_fetch_assoc($result);
print_r($row);
mysql_close($link);

?>