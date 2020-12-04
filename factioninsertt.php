<?php
include("connect.php");
$faction=$_POST["faction"];            
         
    $sql = "INSERT INTO faction (faction_name) VALUES ('$faction')";
    
if ($conn->query($sql) === TRUE) {
    echo "تم الادخال بنجاح";
    
} else {
    echo "حدث خطا " . $sql . "<br>" . $conn->error;
}
 $conn->close();
          
?>
 