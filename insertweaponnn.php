<?php
include("connect.php");
$name=$_POST["namee"];
$idweapon=$_POST["idweapon"];            
 $country=$_POST["country"]; 
 $caliber=$_POST["caliber"]; 
 $range=$_POST["rangee"]; 
$imagee= basename($_FILES["image"]["name"]);
$path="upload/";
$imageee=$path . $imagee;
$image= $imageee;
move_uploaded_file($_FILES["image"]["tmp_name"],$imageee);



    $sql = "INSERT INTO weapon (id,name,country,caliber,`range`,imag) VALUES ('$idweapon','$name','$country','$caliber','$range','$image') ";
    
if ($conn->query($sql) === TRUE) {
    echo "تم الادخال بنجاح";
    
} else {
    echo "حدث خطا " . $sql . "<br>" . $conn->error;
}
 $conn->close();
          
?>
 