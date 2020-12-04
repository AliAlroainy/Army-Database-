<?php
session_start();
?>
<!DOCTYPE html>

<html>
<head>

<style>
    
    *{
direction:rtl;
}
input{

border:none;
border-bottom:1px solid  grey;
background:transparent;
pointer-action:none;
width:250px;
    height:30px;
outline:none;
    font-size: 16px;
            color:#ecf0f1;
text-align:center;

}
input:focus{
        box-shadow: 4px  4px  20px grey; 

    
    
    }

h1{
transition:6s;
}
h1:hover{
font-size:20px;
}
label
    {
        color:#ecf0f1;
        font-size:20px;
    }
    div{
    margin:auto  auto;
        height:500px;
        width:300px;
        text-align: center;
                box-shadow: -2px -2px 5px grey; 

    }    
    
        #submitt{
        
       border:solid 1px #44bd32;
         width:270px;
         height:40px;
         border-radius:4px;
        background-color:#44bd32; color:white;border:none;
            font-size:20px;
        
        
    }
    #submitt:hover{
        
      
        box-shadow: 2px 2px 30px grey; 
    }
#header
    {background-color:#2f3640;height:50px;
        
    }
    #header:hover{
        
    }   
    
    
    </style>    
    
    
</head>

<body style="background:rgba(0,0,0,0.7);">
    <div>
        <p id="header"></p>
<form method="post" action="">
<br>
<br>
   
       <br><br>
                     <label>
                         
        ادخل رقم الجندي
                </label><br>   <br> 
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
include("deletesolider1.php");
    }
        ?>
   </body>
   </html>
