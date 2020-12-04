<?php
include("connect.php");
$battlion=$_POST["battlion"];   
    $sql = "INSERT INTO battlion (battlion_name) VALUES ('$battlion')";

if ($conn->query($sql) === TRUE) {
    echo "تم الادخال بنجاح";

    
} else {
    echo "حدث خطا " . $sql . "<br>" . $conn->error;
}
 $conn->close();
          
?>
 