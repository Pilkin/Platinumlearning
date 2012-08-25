<?php
$id = $_GET['id'];
mysql_connect("localhost", "pilkin", "mr ch33s3");
mysql_select_db("videoplatinum");
$result = mysql_query("SELECT * FROM uploadedvideos WHERE id='$id'"); 
while($row = mysql_fetch_array($result)) { 
$type = $row['type'];
$video_name = $row['name'];
}
echo "<embed src=\"video.php?id=$id\"></embed><br>";
echo "Type of file: $type";
echo "Name of file: $name";
?>
