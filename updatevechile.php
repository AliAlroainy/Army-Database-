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
    select{
        background:transparent;
                    color:#ecf0f1;
               border:solid 1px grey;


    }   
    select:hover{
        
        box-shadow: 1px  1px  10px grey; 

        
        
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
        height:530px;
        width:350px;
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

<form method="post" action=""enctype="multipart/form-data">
    
                     <label>
                         
               ادخل رقم المركبة لتعديلها
                </label>   <br> 
    <input type="text" name="idd" required>
                    <br>
                    <br>
    

    <label>اسم المركبة
        </label>
    <br>
    <input type="text" name="name">

      <br>
      <br>
      
        <label>رقم المركبة
        </label>
    <br>
    <input type="number" name="id">

      <br>
      <br>
      
            <label>السرعة
        </label>
    <br>
    <input type="text" name="speed">

      <br><br>
        
            <label>اقصى حمولة
        </label>
    <br>
    <input type="text" name="load" >
<br>
      <br>
      
    
      <input type="file" name="image"  >
      
      
      
      <br>
      <br>
 <input type="submit" value="حفظ" id="submitt" name="submit"/>
</div>
   </form>
      
      
      
 
               <?php 

        if(isset($_POST["submit"])){
                   include("connect.php");

          $idd=$_POST["idd"];

        if(!empty($_POST["name"])){
           $name=$_POST["name"];
          $sql  ="update vechile set name='$name'where id='$idd'";
            $conn->query($sql);
            
        }
                if(!empty($_POST["speed"])){
           $country=$_POST["speed"];
                     $sql  ="update vechile set speed='$country'where id='$idd'";
                    $conn->query($sql);
                }
                  if(!empty($_POST["load"])){
           $caliber=$_POST["load"];
          $sql  ="update vechile set maximum_load='$caliber'where id='$idd'";
     

                      $conn->query($sql);
                  }
 
        
           if(!empty($_POST["id"]))
           {
           $id=$_POST["id"];
                                               $sql  ="update vchile set id='$id'where id='$idd'";

                       $conn->query($sql);
                        }

           if(!empty($_POST["image"]))
           {
               
            $imagee= basename($_FILES["image"]["name"]);
$path="upload/";

   $imageee=$path . $imagee;


move_uploaded_file($_FILES["image"]["tmp_name"],$imageee);   
       $image= $imageee; 
        $sql  ="update solider set imag='$image'where id='$idd'";
               

               $conn->query($sql);
               
           }
 
    }
        
        
        
        
        
        
        
        
        
        
        
        
    
        ?>
    
    
    
   </body>
   </html>