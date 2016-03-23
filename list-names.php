<?php
$db_username="httpd";
$db_password="aspirine2710";
$db_host="localhost";
$db_name="cloudwick";
$link = mysql_connect($db_host, $db_username, $db_password);
mysql_select_db($db_name, $link);

$sql = "SELECT name FROM user";
$result = mysql_query($sql , $link);
?>
<ul>
<?php

while($row = mysql_fetch_array($result))
{
?>
<li>
<?php echo $row['name']; ?>
</li>
<?php
}
?>
</ul>
<a href="/">Click to add another name</a>