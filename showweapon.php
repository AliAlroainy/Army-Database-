<?php
session_start();
?>
<!DOCTYPE html>

<html>
<head>

<link rel="stylesheet" type="text/css" href="show1.css" />
        
   <style>
          
       
    th{
    background-color:#636e72;
    }
    
    </style>
</head>   
    
<body style="background:rgba(0,0,0,0.7);">

        
        
<?php


    include("connect.php");
    
     $sql = "select id,name,country,caliber,`range`,imag from weapon";

    
    
$result = mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result) > 0) {
     echo "<table>     <tr><th>رقم السلاح </th><th>الأسم </th>    <th>بلد التصنيع</th>      <th> عيار الذخيرة </th><th>المدى</th>  <th>صورة</th> </tr>";
    while($row = mysqli_fetch_assoc($result))
 
  {      echo        "<tr><td>". $row["id"]. "</td><td>" . $row["name"] . "</td><td>" . $row["country"]  . "</td><td>" .$row["caliber"]   . "</td><td>".$row["range"] .  "</td><td>" .'<img src="'.$row["imag"].'" style="width:150px; height:150px;"/>' . "</td><tr>";
    
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
    
        