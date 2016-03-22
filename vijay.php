<?php
 $db = mysql_connect("localhost","httpd","aspirine2710"); 
 if (!$db) {
 die("Database connection failed miserably: " . mysql_error());
 }

 $db_select = mysql_select_db("names",$db);
 if (!$db_select) {
 die("Database selection also failed miserably: " . mysql_error());
 }
?>
<html>

<form name = "htmlform" method ="post" action = "html_form_send.php">
<tr>
<td valign="top">
  <label for="first_name">First Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="first_name" maxlength="50" size="30">
 </td>
</tr>



  <input type='submit' value='Submit' />  
</form>
<?php

$result = mysql_query("SELECT * FROM mytable", $db);
 if (!$result) {
 die("Database query failed: " . mysql_error());
 }
?>


 </html>




