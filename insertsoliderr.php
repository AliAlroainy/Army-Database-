<?php     

include("connect.php");


$firstname = $_POST["first"];
 $secondname = $_POST["second"];
$thirdname = $_POST["third"];
$lastname =$_POST["last"];
$dat =$_POST["dat"];
$city = $_POST["city"];
 $dic =$_POST["dic"];
$gender =$_POST["gender"];
$phone =$_POST["phone"];
$id=$_POST["id"];
$rank=$_POST["rank"];
$battlion=$_POST["battlion"];
$company=$_POST["company"];
$faction=$_POST["faction"];
$group=$_POST["group"];


$imagee= basename($_FILES["image"]["name"]);
$path="upload/";

   $imageee=$path . $imagee;
$image= $imageee;

move_uploaded_file($_FILES["image"]["tmp_name"],$imageee);

$sql="select id  from rank where rank_name='$rank'";

$var = $conn->query($sql);

while($row=mysqli_fetch_array($var))      
 $rank=$row["id"];
    
    
    $sql="select id  from battlion where battlion_name='$battlion'";

$var = $conn->query($sql);

while($row=mysqli_fetch_array($var))      
 $battlion=$row["id"];
    
       $sql="select id  from company where company_name='$company'";

$var = $conn->query($sql);
while($row=mysqli_fetch_array($var))      
 $company=$row["id"];
    
    
   $sql="select id  from faction where faction_name='$faction'";

$var = $conn->query($sql);

while($row=mysqli_fetch_array($var))      
 $faction=$row["id"];
    
       
   $sql="select id  from `group` where group_name='$group'";

$var = $conn->query($sql);

while($row=mysqli_fetch_array($var))      
 $group=$row["id"];
    


    
    $sql = "INSERT INTO solider (id,fname, sname,thname,lname,birth_date, city ,directorate,gendar,phone,id_rank,id_battlion,id_company,id_faction,id_group,imag

)
 
VALUES ('$id','$firstname','$secondname','$thirdname','$lastname','$dat','$city','$dic','$gender','$phone','$rank','$battlion','$company','$faction','$group','$image')";

if ($conn->query($sql) === TRUE) {
    echo "تم الادخال بنجاح";

    
} else {
    echo "حدث خطا " . $sql . "<br>" . $conn->error;
}
 $conn->close();
  
        
?>
    
        












