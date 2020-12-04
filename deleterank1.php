<?php     
include("connect.php");
   $id=$_POST["id"];
  
    $sql = "select id  from rank where id='$id'";


$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)> 0)
    $sql = "delete  from rank where id='$id'";
{echo "<p style='position:absolute;top:400px;right:650px;color:white;'> تم الحذف بنجاح <p>"; 

$conn->query($sql);

    
} else {
          echo "<p style='position:absolute;top:400px;right:650px;color:white;'> لايوجد<p>"; 

}