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
    <label>اسم السرية
        </label>
            <br><br>
                <input type="text" name="company" required>
       <br> <br><br> <br><br>
         <input type="submit" value="حفظ" name="submit" id="submitt"/>
       </form>
       </div>
     
           <?php 
    if(isset($_POST["submit"])){
include("companyinsertt.php");
    }
        ?>
   </body>
   </html>

   </html>