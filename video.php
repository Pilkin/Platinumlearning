<?php
$id = $_GET['id'];
mysql_connect("localhost", "pilkin", "mr ch33s3");
mysql_select_db("videoplatinum");
$result = mysql_query("SELECT * FROM uploadedvideos WHERE id='$id'"); 
while($row = mysql_fetch_array($result)) { 
$type = $row['type'];
$video = $row['video'];
}
header("Content-type: $type"); 
echo $video;
?>