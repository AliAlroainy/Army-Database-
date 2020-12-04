<?php
$host = 'localhost';
$user = 'root';
$pass = '';

mysqli_connect($host, $user, $pass);

mysql_select_db('user');

$select_path="select * from pic";

$var=mysql_query($select_path);

while($row=mysql_fetch_array($var))
{
 $image_name=$row["caption"];
 $image_path=$row["img"];
 echo '<img src="'.$row["caption"].'" style="width:400px; height:400px;"/>';
}
?>