<?php
$type = $_FILES['video']['type'];
$size = $_FILES['video']['size'];
$videoname = $_FILES['video']['name'];
$videofinale = addslashes(fread(fopen($video, "r"), $size)); 
mysql_connect("localhost", "pilkin", "mr ch33s3"); 
mysql_select_db("videoplatinum");
mysql_query("INSERT INTO uploadedvideos (id, video, type, name) VALUES ('', '$videofinale', '$type', '$videoname')"); 
echo "Video uploaded";
?>