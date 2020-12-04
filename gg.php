
<?php
session_start();
?>

<!DOCTYPE html>
 <html>
 <head>
 <meta charset="utf-8">




 
	 <title>Army base</title>
	 <link rel="stylesheet" href="style.css">
	 <style>
         *{
           direction:rtl;  
             
         }
	 .hhead{
	 background:#777;
	 }
#frame{
width: 400px;
height:480px;
    margin-left:auto;
    margin-right: auto;
    margin-top: 0;
padding-left: 25px ;
padding-right: 25px;
background: rgba(0,0,0,.7) ;
box-sizing: border-box;
box-shadow: 0 15px 25px rgba(0,0,0,.5); 
border-radius:10px;
z-index: 3;
}
 .submitt{
 top: 70%;
 left:50%;
	 padding:5px;
	 font-size:15px;
	 border:none;
	 border-bottom-right-radius:20px;
	 border-top-left-radius:20px;
	 width:40%;
	 height:15%;
     border: none;
	 background-color: #fff200;
	 }
	 
	 .password{
	 border:none;
	 
	 border-bottom:1px solid  #fff200;
	 background:transparent;
	
	 font-family: sans-serif;
	 outline:none;
	 width:100%;
	 font-size:16px;
	 color:   #ced6e0;
	 }
	 

	 h1
	 {
	 font-size:40px;
	 text-align:center;
	 background-color:#fff200;
	 border:2px solid black;
	 border-radius:9px;
   display:block;
   padding:30px;
	 }
	 
	 .h2{
	 text-align:center;
  color:white;
  font-size:30px;
	 }
	 </style>
	 
 </head>
 
 
	 <body style="background: rgba(0,0,0,.7) ;">
	 <div  id="frame"> 
	 <h2 align="center" style="color:white" >اضافة مستخدم</h2> 
	 <br/>
	 <form  name="sign" method="post" action="">
	 	 <label style="color:white">اسم المستخدم</label>
	 <br/>
	 	 <input type="text" name="username" class="password" required>
	 <br/>
	 <br/> 
	 <label style="color:white">كلمة السر</label>
	 <br/>
         	 <input type="password" name="Password1"class="password" required>
         <br/>
         <br/>
	 	 <label style="color:white">  تاكيد كلمة السر  </label>
        
         	 <br/> 
	 <input type="password" name="Password2"class="password" required>
	 
	 <br/>
	 <br/>
         	 <label style="color:white">  الرتبة </label> <br/>
	 <input type="text" name="rank" style="width:100px;"class="password" required>
	 <br/>
	 <br/>
    <label style="color:white">  منح صلاحيات  </label>

	 	 <br/>
	 
	 <br/>	 

      <input type="checkbox" name="insert"value="نعم">	 <label style="color:white">  ادخال بيانات  </label>
    <input type="checkbox" name="show"value="نعم">    <label style="color:white">  عرض بيانات  </label><br>
	<input type="checkbox" name="update"value="نعم"> 	 <label style="color:white"> تعديل بيانات </label>
	<input type="checkbox" name="search"value="نعم"> 	 <label style="color:white">  بحث عن بيانات  </label><br>
    <input type="checkbox" name="delete"value="نعم"> 	 <label style="color:white">  حذف بيانات  </label>
             <input type="checkbox" name="adduser"value="نعم"> 	 <label style="color:white">  اضافة مستخدم  </label><br>
    <input type="checkbox" name="showusers"value="نعم"> 	 <label style="color:white">  عرض المستخدمين  </label><br>
    <input type="checkbox" name="deleteuser"value="نعم"> 	 <label style="color:white">  حذف مستخدم  </label>


 <br/>	 
	
	 <input type="submit" name="submit"class="submitt"value="حفظ">
	 
	 
	 
	 </form>
	 </div>
	 </body>
 </html>
<?php
if(isset($_POST["submit"]))

{

if($_POST["Password1"]==$_POST["Password2"])
   { 
    if(($_POST["rank"]=="نقيب" || $_POST["rank"]=="رائد" || $_POST["rank"]== "مقدم" ||$_POST["rank"]== "عقيد"|| $_POST["rank"]=="عميد"|| $_POST["rank"]=="لواء" || $_POST["rank"]=="فريق") )
{
include("connect.php");
        
        
$usernamee=$_POST["username"];
 $password1= $_POST["Password1"]; 
$password2= $_POST["Password2"]; 
     $sql = "create user '$_POST[username]' identified by '$_POST[Password2]'" ;

        $conn->query($sql);

$rank=$_POST["rank"];            
$insert=$update= $show =$search=$delete=$adduser=$showusers=$deleteuser="لا";

        
       if(isset($_POST["insert"]))
    {$insert= $_POST["insert"]; 
    $sql = "grant insert on army.* to '$usernamee'with grant option  ";

$conn->query($sql);
          
    }
           if(isset($_POST["show"])){
  $sql = "grant select on   army.* to '$usernamee'with grant option  ";

$conn->query($sql);
    
    
        $show= $_POST["show"]; 

 
    }
    
            if(isset($_POST["update"])){
                  $sql = "grant update on army.* to '$usernamee' with grant option ";

$conn->query($sql);
        $update= $_POST["update"]; 

  
    }
            if(isset($_POST["search"]))

    
    {
        $sql = "grant select on army.* to '$usernamee' with grant option";

$conn->query($sql);
                
                $search= $_POST["search"]; 

    }
    
        if(isset($_POST["delete"]))
    {
              $sql = "grant delete on army.* to '$usernamee' with grant option";

$conn->query($sql);
            
        $delete= $_POST["delete"]; 
   
    }
        
        
               if(isset($_POST["adduser"]))
    {
                   $sql = "grant insert on army.user to '$usernamee' with grant option ";
                   $conn->query($sql);  
                  $sql = "grant create user  to '$usernamee' with grant option ";

                   $conn->query($sql);

        $adduser= $_POST["adduser"]; 
    }

       
               if(isset($_POST["showusers"]))
    {  $sql = "grant select on army.user to '$usernamee' with grant option ";
                               
$conn->query($sql);
                   
        $showusers= $_POST["showusers"]; 
   
    }
                  if(isset($_POST["deleteuser"]))
    {
                        $sql = "grant delete army.user to '$usernamee' with grant option ";


$conn->query($sql);
                              $sql = "grant drop user on army to '$usernamee' with grant option";
     
                              $conn->query($sql);
              

        $deleteuser= $_POST["deleteuser"]; 
   
    }   
    
        $sql = "INSERT INTO user(username,password,rank,insertt,showw,updatee,searchh,deletee,add_user,show_users,delete_user) VALUES ('$usernamee','$password1','$rank','$insert','$show','$update','$search','$delete','$adduser','$showusers','$deleteuser') ";
    
 $conn->query($sql);
    
      echo "<p style='position:absolute;top:550px;right:650px; color:green;'>  تم الادخال بنجاح <p>";


 $conn->close();
          
 
    
    
    
    
    
    
    
    
    
    
    
}

else{
    
   echo "<p style='position:absolute;top:550px;right:650px;color:red;'>  المستخدم يجب ان يكون من رتبة نقيب فما فوق  <p>"; 
    
}
}
else{

 echo "<p style='position:absolute;top:550px;right:650px; color:red;'>  كلمة المرور غير متطابقة <p>";

}
    
}
    
    
    
 ?> 
