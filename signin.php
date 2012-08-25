<?php
$username="root";
$password="mr ch33s3";
$database="iron";

mysql_connect(localhost, $username, $password);

mysql_close();

@mysql_select_db($database) or die( "Unable to select database");

mysql_query($query);
?>
