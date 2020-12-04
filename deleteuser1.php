<?php     
include("connect.php");
   $id=$_POST["id"];
  
    $sql = "select *  from user where id='$id'";


$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)> 0)
{ 
    while($row = mysqli_fetch_assoc($result))
    {
       $sql = "drop user '$row[username]' ";

$conn->query($sql);
    }
        
         $sql = "delete  from user where id='$id'";

    $conn->query($sql);
    echo "<p style='position:absolute;top:400px;right:650px;color:white;'> تم الحذف بنجاح <p>";

} else {
          echo "<p style='position:absolute;top:400px;right:650px;color:white;'> لايوجد<p>"; 

}