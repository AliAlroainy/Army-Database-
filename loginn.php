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
height:400px;
    margin:auto;
padding-left: 25px ;
padding-right: 25px;
background: rgba(0,0,0,.7) ;
box-sizing: border-box;
box-shadow: 0 15px 25px rgba(0,0,0,.5); 
border-radius:10px;

}
 .submit{
 top: 70%;
 left:50%;
	 padding:5px;
	 font-size:15px;
	 border:none;
	 border-bottom-right-radius:20px;
	 border-top-left-radius:20px;
	 width:40%;
	 height:15%;#4bcffa;
	 background-color: #fff200;
	 }
	 
	 .passwordd{
	 border:none;
	 
	 border-bottom:1px solid  #fff200;
	 background:transparent;
	 pointer-action:none;
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
 
 <h1>Welcome To The
 Army Base
 </h1>
 

	 <body background="S.jpg">
	 <div  id="frame"> 
	 <h2 align="center" style="color:white" >تسجيل الدخول</h2> 
	 <br/>
  <br/>
	 <form  name="sign" method="post" action>
	 	 <label style="color:white">اسم المستخدم</label>
	 <br/>
	 <br/>
	 	 <input type="text" name="username" placeholder="root"class="passwordd" required>
	 <br/>
	 <br/>
	 <label style="color:white">كلمة السر</label>
	 <br/>
	 
	 <br/>
	 
	 <input type="password" name="Password"class="passwordd" placeholder="">
	 
	 <br/>
	 <br/>
	 	 <br/>
	 
	 <br/>
	 

	 <br/>
	 <br/>
	
	 <input type="submit" class="submit"value="login" name="submit">
	 
	 
	 
	 </form>
	 </div>
	 </body>
 </html>
<?php
if(isset($_POST["submit"]))

 

{
    $_SESSION["username"]=$_POST["username"];
 $_SESSION["password"]=$_POST["Password"];
 
$servername = "localhost";
$username =$_SESSION["username"];
$password =$_SESSION["password"]; 
$dbname="army";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
     echo "<p style='position:absolute;top:500px;right:650px; color:red;'>  كلمة المرور او اسم المستخدم خاطى <p>";
        die("Connection failed: " . mysqli_connect_error());


}
 else
 {
header("location:Mainn.php");
 }
}





  
?>