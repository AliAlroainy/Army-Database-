<?php
include("connect.php");
$rank=$_POST["rank"];            
         
    $sql = "INSERT INTO rank(rank_name) VALUES ('$rank')";
    
if ($conn->query($sql) === TRUE) {
    echo "تم الادخال بنجاح";
    
} else {
    echo "حدث خطا " . $sql . "<br>" . $conn->error;
}
 $conn->close();
          
?>
 