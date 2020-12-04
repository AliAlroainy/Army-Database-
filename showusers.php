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
    
       td{
           padding:12px;
       }
       td,th{
           border:1px solid grey;
                   text-align: center;

       }
    </style>
</head>   
    
<body style="background:rgba(0,0,0,0.7);">

        
        
<?php


    include("connect.php");
    
     $sql = "select id,username,password,rank,insertt,showw,updatee,searchh,deletee,add_user,show_users,delete_user from user" ;
    
    
$result = mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result) > 0) {
     echo "<table>     <tr><th >
     الرقم  </th><th>الأسم </th>    <th>كلمة السر</th>      <th> الرتبة</th><th>صلاحية ادخال</th>        <th>صلاحية عرض</th>
    <th>صلاحية تعديل </th><th>صلاحية بحث</th>        <th>صلاحية حذف</th>     <th>صلاحية اضافة مستخدم</th>   <th>صلاحية عرض المستخدمين</th>   <th>صلاحية حذف مستخدم</th>          </tr>";
    while($row = mysqli_fetch_assoc($result))
 
  {      echo          "<tr><td>". $row["id"]. "</td><td>" .$row["username"]. " </td><td>" . $row["password"]. "</td><td>". $row["rank"]. "</td><td>"
      . $row["insertt"]. "</td><td>".$row["showw"]. "</td><td>"     .$row["updatee"].  "</td><td>"  .$row["searchh"].
      "</td><td>"  .$row["deletee"]."</td><td>"  .$row["add_user"]."</td><td>" .$row["show_users"].  "</td><td>".$row["delete_user"]. "</td></tr>";
    
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
    