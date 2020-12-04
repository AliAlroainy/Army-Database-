<?php
session_start();
?>
<!DOCTYPE html>

<html>
<head>


    
<link rel="stylesheet" type="text/css" href="insertdelete.css" />

    
    
    
    
</head>

<body style="background:rgba(0,0,0,0.7);">
    <div>
        <p id="header"></p>
<form method="post" action="">
<br>
<br>
   
       <br><br>
                     <label>
                         
        ادخل رقم المستخدم
                </label>   <br> 
    <input type="text" name="id" required>
                    <br>
                    <br>
    


         <input type="submit" value="حفظ" name="submit" id="submitt"/>
         
       </form>
       </div>
     <br>
        <br>
            <?php 
    if(isset($_POST["submit"])){
include("deleteuser1.php");
    }
        ?>