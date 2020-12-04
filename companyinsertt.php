<?php
include("connect.php");
$company=$_POST["company"];            
         
    $sql = "INSERT INTO company (company_name) VALUES ('$company')";
    
if ($conn->query($sql) === TRUE) {
    echo "تم الادخال بنجاح";
    
} else {
    echo "حدث خطا " . $sql . "<br>" . $conn->error;
}
 $conn->close();
          
?>
