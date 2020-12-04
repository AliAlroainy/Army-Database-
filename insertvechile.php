<?php
include("connect.php");
$name=$_POST["name"];
$id=$_POST["id"];            
 $speed=$_POST["speed"]; 
 $load=$_POST["load"]; 
$imagee= basename($_FILES["image"]["name"]);
$path="upload/";
$imageee=$path . $imagee;
$image= $imageee;
move_uploaded_file($_FILES["image"]["tmp_name"],$imageee);



    $sql = "INSERT INTO vechile (id,name,speed,maximum_load,image) VALUES ('$id','$name','$speed','$load','$image') ";
    
if ($conn->query($sql) === TRUE) {
    echo "تم الادخال بنجاح";
    
} else {
    echo "حدث خطا " . $sql . "<br>" . $conn->error;
}
 $conn->close();
          
?>
 