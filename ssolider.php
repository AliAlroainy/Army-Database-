<?php
session_start();
?>
<html>
<head>

    
    <link rel="stylesheet" type="text/css" href="https://www.fontstatic.com/f=dubai" />


    
    <style>
    
   
        *{
direction:rtl;
            color: white;
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
        font-size:17px;
    }
    div{
   position: absolute;
        top:30px;
        left:300px;
        height:700px;
        width:700px;
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
        color: white;
        position: absolute
        width: 700px;
        
    }
    #header:hover{
        
    }   
        
        
        input[type="radio"]
        {
            width:200px;
            height: 15px; 
        }
        input[type="reset"]{
            background-color: black;
             border:solid 1px #000000;
         width:270px;
         height:40px;
             font-size:20px;
        }
           input[type="reset"]:hover{
        
      
        box-shadow: 2px 2px 30px grey; 
    }
      
        
        option{
            
            background-color: black;
        }
        
        select{
            width:150px;
        } 
        
        
        
        
    </style>
     <link rel="stylesheet" type="text/css" href="fever.css" />
    </head>
    <body style="background:rgba(0,0,0,0.7);">
           <div id="box" style="position:absolute;top:0; left:150px;"      >
        <form method="post"  action=""  enctype="multipart/form-data"   >
     
            
        
            <table style="border:none;position:absolute;top:0;">
                      <tr  style="text-align:center;width:700px;"><td id="header"> <h3 >بيانات الجندي</h3></td><td>ملاحظة:قم بادخال بيانات الكتائب والسرايا والفصائل والمجموعات والرتب قبل ادخال بيانات الجندي </td> </tr>
                <br>
                <br>
                <br>
                <tr><td> <h4>الاسم الثلاثي:</h4></td> </tr>
                <tr>
        <td> <lable style="color:white;">
         الاسم الاول:     
         </label>
          <input type="text" 
         autocomplete= "on" name="first"   required /> </td> 
       <td> <lable style="color:white;">
           الاسم الثاني:       
      </label>
           <input type="text"/class="text" name="second"    required   ></td> </tr>
           <br>
          <tr> <td> <lable style="color:white;">
   الاسم الثالث:        
      </label>
     <input type="text"  
     class="text" name="third"required > </td>
              <br>

        <td>   <lable >
  
      اللقب:
      </label>
            <input type="text" name="last"  required ></td></tr>
     
     <tr><td> <h4>تاريخ الميلاد:</h4></td> </tr>
     <tr><td><label> 
              التاريخ:
      </label>
      
       <input type="date" name="dat"    required></td> </tr>
    
    <tr><td>  <h4> العنوان:</h4></td></tr>
       
      <tr><td> <label>
        المحافظة:
      </label>
        <input type="text" name="city"     required></td>
          <br>
      <td><label> 
           
            المديرية:
      </label>
       <input type="text" name="dic"  
              required></td></tr>
    <tr><td>  <h4>الجنس:</h4>  </td></tr>  
   <tr><td> 
    
  <input type="radio" name="gender"  value= "ذكر" required>
        
     ذكر
       </td>
       <td>  <input type="radio" name="gender"  value="انثى" required>
        انثى
      </td></tr>

      <tr><td>   <h4>   
      رقم الهاتف:
      </h4>  </td></tr>  
  
     <tr><td> <input type="number" name="phone"   /> </td></tr>
                
               
     
          
           
    <tr><td>   <h4>   
     البيانات العسكرية:
      </h4>  </td></tr>
               
             <tr><td>  <lable>
         
  الرقم العسكري:        
      </label>     
               
             <input type="number" name="id"    required></td>
               <br>
                          <td> <lable>
         
 الرتبة العسكرية:
      </label>  
                              <?php
                              include("connect.php");
  $sql="select rank_name from rank";
$var = $conn->query($sql);

  echo "<select required name='rank'>";
while($row=mysqli_fetch_array($var))      
 
    echo "<option>".$row["rank_name"]."</option>";
  
    
         
              echo "</select>";
                              ?>
               </td></tr>
               
                  <br> 
     <tr><td>  <lable>
         
      اسم الكتيبة:        
      </label>
                             <?php
  $sql="select battlion_name from battlion";
$var = $conn->query($sql);

  echo "<select required name='battlion'>";
while($row=mysqli_fetch_array($var))      
 
    echo "<option>".$row["battlion_name"]."</option>";
  
    
         
              echo "</select>";
                              ?>
         
         </td>    
                 <br>   
      <td> <lable >
         
                       اسم السرية:       
        </lable>
 
                                     <?php
  $sql="select company_name from company";
$var = $conn->query($sql);

  echo "<select required name='company'>";
while($row=mysqli_fetch_array($var))      
 
    echo "<option>".$row["company_name"]."</option>";
  
    
         
              echo "</select>";
          ?>
         
         </td></tr>  
                   <br>
      <tr><td>   <label>
      اسم الفصيل:
      </label>
      
      
                                     <?php
  $sql="select faction_name from faction";
$var = $conn->query($sql);

  echo "<select required name='faction'>";
while($row=mysqli_fetch_array($var))      
 
    echo "<option>".$row["faction_name"]."</option>";
  
    
         
              echo "</select>";
          ?>
          
          
          
          </td>  
               
           <br>
       <td>  <label>
     اسم المجموعة:
      </label>
      
         
                                     <?php
  $sql="select group_name from `group` ";
$var = $conn->query($sql);

  echo "<select required name='group'>";
while($row=mysqli_fetch_array($var))      
 
    echo "<option>".$row["group_name"]."</option>";
  
    
         
              echo "</select>";

          ?>
          
          
          
          
          </td></tr>    
               <br>            
<tr><td> <input type="file" id="aa" name="image"  required>         </td></tr> 

  
    
    

              <tr><td>  <input type="submit" name="submit" value="حفظ" id="submitt"></td>
                  <td><input type="reset" value="الغاء"/></td></tr>
                  </table> 
               </form>
     </div>
                  <?php 
    if(isset($_POST["submit"])){

  
        
include("insertsoliderr.php");
    }
        ?>
    
        </body>
</html>
     