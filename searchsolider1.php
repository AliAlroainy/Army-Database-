
<?php
session_start();
?>


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
   $id=$_POST["id"];

$sql = "select solider.id,fname, sname,thname,lname,birth_date, city ,directorate,gendar,phone,rank.rank_name,battlion.battlion_name,company.company_name,faction.faction_name,`group`.group_name,imag
     from solider,rank,battlion,company,faction,`group` where rank.id=solider.id_rank && battlion.id=solider.id_battlion &&company.id=solider.id_company&& faction.id=solider.id_faction&& `group`.id=solider.id_group && solider.id='$id'";
    
    
$result = mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result) > 0) {
     echo "<table>     <tr><th >
     الرقم العسكري </th><th>الأسم </th>    <th>تاريخ الميلاد</th>      <th> المحافظة </th><th>المديرية</th>        <th>الجنس</th>
    <th>التلفون </th><th>الرتبة</th>        <th>الكتيبة</th>     <th>السرية</th>   <th>الفصيل</th>   <th>المجموعة</th>      <th>صورة</th>        </tr>";
    while($row = mysqli_fetch_assoc($result))
 
  {      echo          "<tr><td>". $row["id"]. "</td><td>" . $row["fname"] . " "  . $row["sname"] .   " "  .  $row["thname"] . " "  .
        $row["lname"]. " </td><td>" . $row["birth_date"]. "</td><td>". $row["city"]. "</td><td>". $row["directorate"]. "</td><td>". $row["gendar"]. "</td><td>" 
      . $row["phone"]. "</td><td>".$row["rank_name"]. "</td><td>"     .$row["battlion_name"].  "</td><td>"  .$row["company_name"].
      "</td><td>"  .$row["faction_name"]."</td><td>"  .$row["group_name"]."</td><td>" . '<img src="'.$row["imag"].'" style="width:100px; height:100px;"/>' . "</td><tr>";
    
  }
    
 
  
    echo "</table>";}
 else
 {           echo "<p style='color:white;font-size:20px;'>لايوجد  <p>";

}

    mysqli_close($conn);
