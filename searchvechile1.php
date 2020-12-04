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
       th,td{
           padding: 15px;
       }  
       table{
           width: 80%;
       }
    
    </style>
</head>   
    
<body style="background:rgba(0,0,0,0.7);">

        
        
<?php
include("connect.php");
   $id=$_POST["id"];

    
       
     $sql = "select * from vechile";

    
    
$result = mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result) > 0) {
     echo "<table>     <tr><th>رقم المركبة </th><th>الأسم </th>    <th>السرعة</th>      <th> اقصى حمولة</th><th>صورة</th>   </tr>";
    while($row = mysqli_fetch_assoc($result))
 
  {      echo        "<tr><td>". $row["id"]. "</td><td>" . $row["name"] . "</td><td>" . $row["speed"]  . "</td><td>" .$row["maximum_load"]   . "</td><td>".'<img src="'.$row["image"].'" style="width:100px; height:100px;"/>'. "</td><tr>";
    
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