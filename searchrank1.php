<?php
session_start();
?>
<!DOCTYPE html>

<html>
<head>

<link rel="stylesheet" type="text/css" href="show.css" />
        
   <style>
          
       
    th{
    background-color:#636e72;
    }
    
    </style>
</head>   
    
<body style="background:rgba(0,0,0,0.7);">

        
        
<?php
include("connect.php");
   $id=$_POST["id"];

    
    
     $sql = "select id,rank_name from rank where id='$id'";

    
    
$result = mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result) > 0) {
     echo "<table>     <tr><th>رقم الرتبة </th><th>الأسم </th></tr>";
    while($row = mysqli_fetch_assoc($result))
 
  {      echo        "<tr><td>". $row["id"]. "</td><td>" . $row["rank_name"] . "</td></tr>" ;
    
  }
    
 
  
    echo "</table>";}
 else
 {
    echo "<p style='color:white;font-size:20px;'>لايوجد  <p>";
}

    mysqli_close($conn);

    
  ?>  
   </body>     
</html>  