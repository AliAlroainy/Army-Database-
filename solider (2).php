
<html>
<head>

    
    <link rel="stylesheet" type="text/css" href="https://www.fontstatic.com/f=dubai" />


    
    <style>
    
   
#box{
direction:rtl;
       background:rgba(0,0,0,.9);
        position: absolute;
left:35%;
top:10px;
width: 400px;
height:630px; 
border-radius: 5px;
box-shadow: -5px -10px 40px #ffffff;   
    
}


        
       
        
    
        body{
                   background:rgba(0,0,0);

            
        }
    #box input[type=text] {
        
    border-radius: 4px; 
        border:solid 1px #33d9b2;
        padding-top:2px;
                padding-bottom:2px;

    } 
        
  
        
    h3{
        border-radius: 5px;
        color:white;
        background-color: darkslategrey;
        margin: 0;
        padding:10px;
    } 
        
         h4{
        color:white;
       
        }
    
input[type=submit] {
        width:50px;
    border-radius: 6px; 
        padding-top:5px;
    
                padding-bottom:5px;
        background-color: deepskyblue;
    border: none;
    position:absolute;
    right:10px;

    } 
    
     
input[type=reset] {
        width:50px;
    border-radius: 6px; 
        padding-top:5px;
                padding-bottom:5px;
        background: transparent;
    border: none;
        border: solid 1px deepskyblue;
color:white;
    position:absolute;
    right:250px;

    } 
     
    
#soliderinf{
 position:absolute;
    direction: rtl;
     top:480px;
    background-color: white;
    width:400px;
    height:150px;
    right:320px;
    color:black;
    display:none;
    
    border-bottom-right-radius: 30px;
    border-bottom-left-radius: 30px;
    border-top-left-radius: 30px;

    
        } 
    
    
    
    
    
 
    
    
    
    
    
    
    
    
    
    
    </style>
    <script>
       function ifclick()
    {
        if((document.getElementById("soliderinf").style.display !="block") )
        {
         document.getElementById("soliderinf").style.display="block";
                document.getElementById("icon_button").style.width="300px";
                            document.getElementById("icon_button").style.background.color="#22A7F0";

        }
        else
            {
                document.getElementById("soliderinf").style.display="none";
                
             document.getElementById("icon_button").style.background.color="none";
                
            }
    }
    
    
    </script>
    
    
z    <link rel="stylesheet" type="text/css" href="fever.css" />
    </head>
    <body>
          
    <?php
// define variables and set to empty values
$firstname = $secondname = $thirdname = $lastname= $dat=$city=$dic=$gender=$group=$phone_number="" ;
$firstname1 = $secondname1 = $thirdname1 = $lastname1= $dat1=$city1=$dic1=$gender1=$group1=$phone_number1="";
    $firstname2 = $secondname2 = $thirdname2 = $lastname2= $dat2=$city2=$dic2=$gender2=$group2=$phone_number2="" ;
$a="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["first"])) {
    $firstname1 = "*يرجى ملء الحقل*";
  } else {
    $firstname = test_input($_POST["first"]);
      
      
    // check if name only contains letters and whitespace
 
      
      
      
  }
  
  if (empty($_POST["second"])) {
    $secondname1 = "*يرجى ملء الحقل*";
  } else {
    $secondname = test_input($_POST["second"]);
    
      
      
      
      
      
  }
    
  if (empty($_POST["third"])) {
    $thirdname1 = "*يرجى ملء الحقل*";
  } else {
    $thirdname = test_input($_POST["third"]);
   
      
      
      
  }

  if (empty($_POST["last"])) {
    $lastname1 = "*يرجى ملء الحقل*";
  } else {
    $lastname = test_input($_POST["last"]);
        
  }
    
    
    
     if (empty($_POST["dat"])) {
    $dat1 = "";
  } else {
    $dat = test_input($_POST["dat"]);
       
  }
    
    
     if (empty($_POST["city"])) {
    $city1 = "*يرجى ملء الحقل*";
  } else {
    $city = test_input($_POST["city"]);

  }
    
    
     if (empty($_POST["dic"])) {
    $dic1 = "*يرجى ملء الحقل*";
  } else {
    $dic = test_input($_POST["dic"]);
       
  }
    
     if (empty($_POST["gender"])) {
    $gender1 = "*يرجى اختيار الجنس*";
  } else {
    $gender = test_input($_POST["gender"]);
  }
    
            
            
        if (empty($_FILES["myimage"]["name"])) {
    $a = "";
  } else {
    $a = $_FILES["myimage"]["name"];
  }
    
             
 
    
        
       
     if (empty($_POST["phone_number"])) {
    $phone_number1 = "";
  } else {
    $phone_number= test_input($_POST["phone_number"]);
  }
    
         
  if     ( ((empty($firstname1) && empty($secondname1) && empty($thirdname1) &&empty($lastname1)&&empty($city1)&&empty($dic1)&&empty($gender1) &&empty($dat1) )) )    
            
    {     
  
      $firstname2 = $secondname2 = $thirdname2 = $lastname2= $dat2=$city2=$dic2=$gender2=$group2=$phone_number2="" ;


  
  
  
  }
    else{
                $firstname2=$firstname;
        $secondname2=$secondname;
        $thirdname2=$thirdname;
        $lastname2=$lastname;
        $city2=$city;
        $dic2=$dic;
        $gender2=$gender;
        $phone_number2=$phone_number;
        $dat2=$dat;

        
    }
            
            
    

}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?> 
        
             <div id="box"        hidden="hidden"     >
     <form method="post"  action=""  enctype="multipart/form-data"    >
         <h3 >بيانات الجندي</h3>
         
               <h4>الاسم الثلاثي:</h4>

      <lable style="color:white;">
      الاسم الاول:     
      </label>
          <input type="text"  style="margin:5px;"
         autocomplete= "on" name="first"  value="<?php echo $firstname2;?>"/> <span style="color:red;"><?php echo  $firstname1;?></span>
    <br>
        <lable style="color:white;">

     
      الاسم الثاني:       
      </label>
      <input type="text"/class="text" name="second"   style="margin:5px;" value="<?php echo $secondname2;?>"/> <span style="color:red;"><?php echo   $secondname1;?></span>
  
    <br>
           <lable style="color:white;">

                   

      الاسم الثالث:        
      </label>
     <input type="text"  style="margin:5px;"
     class="text" name="third"  value="<?php echo $thirdname2;?>"/><span style="color:red;"> <?php echo $thirdname1;?></span>
              <br>

           <lable >
  
      اللقب:
      </label>
      <input type="text" name="last" style="margin:5px;margin-right:38px;"  value="<?php echo $lastname2;?>"/> <span style="color:red;"><?php echo $lastname1;?></span>
     
      <h4>تاريخ الميلاد:</h4>
      <label> 
              التاريخ:
      </label>
      
       <input type="date" name="dat"   style="margin-right:20px; " value="<?php echo $dat2;?>"/> <span style="color:red;"><?php echo $dat1;?></span>
    
      <h4> العنوان:</h4>
       
      <label>
        المحافظة:
      </label>
        <input type="text" name="city"    style="margin:10px ;margin-right:15px; margin-top:2px;" value="<?php echo $city2;?>"/> <span style="color:red;"><?php echo $city1;?></span>
          <br>
      <label> 
           
            المديرية:
      </label>
       <input type="text" name="dic"  
              style="margin:10px;margin-right:20px;margin-top:2px;"value="<?php echo $dic2;?>"/> <span style="color:red;"><?php echo $dic1;?></span>
     
  
    <h4>الجنس:</h4>    
    <label>
    
  <input type="radio" name="gender"  <?php if (isset($gender) && $gender=="male") echo "checked";?> value= "ذكر">
        
        ذكر
          <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="انثى">
        انثى
        
 <span style="color:red;"><?php echo $gender1;?></span>
     
  </label>  
 
    
         
        <h4>   
      رقم الهاتف:
      </h4> 
  
      <input type="number" name="phone_number" style="margin-right:70px;"value="<?php echo $phone_number2;?>"   />
           <input type="submit" name="submit" value="حفظ">  
           
           <input type="reset" value="تراجع"/>

        
        
        
             
       <a href="#" id="icon_button"style="position:absolute;
                          top:460px;font-size:18px;color:white;" onclick="ifclick()">البيانات العسكرية:</a>
           <div id="soliderinf">
               
               <lable>
         
  الرقم العسكري:        
      </label>     
               
             <input type="number" name="id"    style="margin:10px ;margin-right:15px; margin-top:2px;" value=""/> <span style="color:red;"></span>   
               <br>
                           <lable>
         
 الرتبة العسكرية:
      </label>   
  
           <select style="position:absolute;right:100px;">
               </select> 
               
               
                  <br> 
      <lable>
         
      اسم الكتيبة:        
      </label>
   
       
                  <select style="position:absolute;right:100px;" >
               </select>    
                 <br>   
      <lable >
         
                       اسم السرية:       
        </lable>
 
    
      
            <select style="position:absolute;right:100px;">
               </select>    
                   <br>
        <label>
      اسم الفصيل:
      </label>
      
        
      
     
      <select style="position:absolute;right:100px;">
               </select>    
               
           <br>
         <label>
     اسم المجموعة:
      </label>
      
          <select style="position:absolute;right:100px;">
               </select>    
               <br>            
 <input type="file" id="aa" name="myimage" style="position:absolute;right:220px; " value="<?php echo $a ?>">
               
               
        <div style="width:110px;height:110px;position:absolute ;right:275px;top:5px;background-color:blue;" id="image">
            <img src="<?php echo $a ?>"style="width:110px; height:110px;"/>';

               </div>
    

               <input type="submit" name="submit" value="حفظ">
               </form>
     </div>
         
                 </form>
               </div>
      
        
        

        
        
 
        
        
        
           <?php 

        if(
        ($firstname1 ==""&& $secondname1 ==""&& $thirdname1 ==""&& $lastname1==""&& $dat1==""&&$city1==""&&$dic1==""&&$gender1==""&&$group1==""&&$phone_number1=="" )&&      ( !(empty($firstname) &&empty($lastname)&& empty($secondname) && empty($thirdname) &&empty($lastname)&&empty($city)&&empty($dic)&&empty($gender)  )) ) 

            
        {
$servername = "localhost";
$username = "root";
$password = "";
$dbname="army";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
   
    $sql = "INSERT INTO solider (id,
    fname, sname,thname,lname,birth_date,
    city ,
 directorate,
gendar,
 
phone 

)
    
    
    

VALUES ('$id','$firstname','$secondname','$thirdname','$lastname','$dat','$city','$dic','$gender','$phone_number')";

if ($conn->query($sql) === TRUE) {
    echo "تم الادخال بنجاح";

    
} else {
    echo "حدث خطا " . $sql . "<br>" . $conn->error;
}
 $conn->close();
  }
        
   
     
 elseif     ( !((empty($firstname1) && empty($secondname1) && empty($thirdname1) && empty($lastname1) &&empty($city1) && empty($dic1) && empty($gender1) && empty($dat1) )) )
{
    echo "يرجى مراجعة الحقول";
}  
        
        
?> 
    
    
    
    <script>
   function Ifclick(a) {
  var xhttp = new XMLHttpRequest();              document.getElementById("aa").submit();

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("image").innerHTML = this.responseText;

    }
  };
  xhttp.open("GET","imageshow.php?q="+a, true);
  xhttp.send();
}
</script> 
    

    
    
    
    
    
    
    
    
    
        </body>
</html>
     