<?php
include("connect.php");
$group=$_POST["group"];            
         
    $sql = "INSERT INTO `group` (group_name) VALUES ('$group')";
    
if ($conn->query($sql) === TRUE) {
    echo "تم الادخال بنجاح";
    
} else {
    echo "حدث خطا " . $sql . "<br>" . $conn->error;
}
 $conn->close();
          
?>
 