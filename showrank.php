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
    
     $sql = "select id,rank_name from rank";

    
    
$result = mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result) > 0) {
     echo "<table>     <tr><th>رقم الرتبة </th><th>اسم الرتبة </th></tr>";
    while($row = mysqli_fetch_assoc($result))
 
  {      echo        "<tr><td>". $row["id"]. "</td><td>" . $row["rank_name"] . "</td></tr>";
    
  }
    
 
  
    echo "</table>";}
 else
 {
    echo "0 results";
}

    mysqli_close($conn);

    
  ?>  
   </body>     
</html>  