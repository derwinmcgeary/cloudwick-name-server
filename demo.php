<?php

define('DB_NAME' ,'format1');
define('DB_USER' , 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST , DB_USER , DB_PASSWORD);

if($link) 
	die('could not connect: ' .mysql_error());

$db_selected = mysql_select_db(DB_NAME , $link);

if(!$db_selected) {
	die('cant use ' .DB_NAME .' : ' mysql_error());

}

$value = $_POST['input1'];

if (!mysql_query($sql)) {
	die('error: ' . mysql_error());
}


mysql_close();

?>
