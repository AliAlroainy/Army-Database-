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
    <label>اسم الفصيل
        </label>
            <br><br>
                <input type="text" name="faction" required>
       <br> <br><br> <br><br>
         <input type="submit" value="حفظ" name="submit" id="submitt"/>
       </form>
       </div>
     
           <?php 
    if(isset($_POST["submit"])){
include("factioninsertt.php");
    }
        ?>
   </body>
   </html>

   </html>