<!DOCTYPE html>
 <html>
 <head>
 <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="https://www.fontstatic.com/f=dubai" />
<script language="javascript" type="text/javascript">
     window.history.forward();</script>

	 <title>Army base</title>

	 <style>
         *{
           direction:rtl;  
             font-family: 'dubai';
             
         }
	 .hhead{
	 background:#777;
	 }
#frame{
            position:absolute;
    top:0;
   left:200px;
width: 1000px;
height:100%;
padding-left: 25px ;
padding-right: 25px;
background: rgba(255,255,255,.1) ;
box-sizing: border-box;
box-shadow: 0 15px 25px rgba(0,0,0,.5); 
border-radius:10px;
    z-index:3;

}
         iframe{
             position:absolute;
             background: transparent;
             border:none;
             margin-top:15px;
             height: 515px;
             left:0;
             width:100%;
         }         
    .blurr{background-image: url("s.jpg");
        
            position:absolute;
    top:0;
   left:200px;
width: 1000px;
height:100%;
 filter: blur(5px);
        
padding-left: 25px ;
padding-right: 25px;
box-sizing: border-box;
border-radius:10px;
    z-index:2;

}
         
         nav{
          
            margin-top:70px;
            text-align:center;
         }        
 nav button{
        background: rgba(0,0,0,0.4);
       padding-left:50px;
            padding-right:50px;
       padding-bottom: 35px;
       padding-top: 20px;
    font-size:16px;
    border:none;
        height:20px;
     color:white;
     text-decoration: none;
         }
         nav button:hover{
              background: rgba(0,0,0,0.8);
             
         }


	 h1
	 {
      margin:0;   
    position:absolute;
        top:0;
         left:200px; 
         
         width:1000px;
	 font-size:25x;
	 text-align:center;
	 background-color:#fff200;
	 border:2px solid black;
	 border-radius:9px;
   display:block;
   z-index:4;
	 }
	 
	 .h2{
	 text-align:center;
  color:white;
  font-size:30px;
	 }
         
         .options{
        transition:1s;
        z-index:5;
        position:absolute;
             
        width:174px;
             height:auto;
                  background: rgba(0,0,0,0.9); 
        display:none;     
             
        
         }    
.options a{

    padding-left:33px;
            padding-right:33px;
       padding-bottom: 5px;
       padding-top: 5px;

    
        height:20px;
     color:white;
     text-decoration: none;
    margin:0px;
           display:block  ;
         }
             .options a:hover{
              background: rgba(255,255,255,0.7);
             
         }
         
         

            
        #diiv a:hover{
color:#f1f1f1;

}


#diiv a {
  text-decoration:none;
  color: #818181;
  padding:5px;
  transition:.4s;
    display:block;
}


#diiv{
border:none;
position:fixed;
right:0;
top:0;
width:120px;
height:100%;
transition:width .2s;
overflow-x:hidden;
background-color:#111;
text-align:center;
z-index:2;
display:block;

} 
       
	 </style>
	 
     <script>
     function insert(){
         
         if((document.getElementById("insert").style.display !="block") )
        {
         document.getElementById("insert").style.display="block";  
             document.getElementById("show").style.display="none";
            document.getElementById("update").style.display="none";
               document.getElementById("search").style.display="none";
            document.getElementById("delet").style.display="none";
     }
     else
         document.getElementById("insert").style.display="none";
     }

             
          function show(){
         
         if((document.getElementById("show").style.display !="block") )
        {
         document.getElementById("show").style.display="block";  
             document.getElementById("insert").style.display="none";  
            document.getElementById("update").style.display="none";
               document.getElementById("search").style.display="none";
            document.getElementById("delet").style.display="none";
     }
     else
         document.getElementById("show").style.display="none";
     }

                 function update(){
         
         if((document.getElementById("update").style.display !="block") )
        {
         document.getElementById("update").style.display="block";  
                         document.getElementById("insert").style.display="none";  
               document.getElementById("search").style.display="none";
            document.getElementById("delet").style.display="none";
             document.getElementById("show").style.display="none";
     }
     else
         document.getElementById("update").style.display="none";
     }
                   function search(){
         
         if((document.getElementById("search").style.display !="block") )
        {
         document.getElementById("search").style.display="block";  
                           document.getElementById("insert").style.display="none";  
            document.getElementById("delet").style.display="none";
             document.getElementById("show").style.display="none";
            document.getElementById("update").style.display="none";
     }
     else
         document.getElementById("search").style.display="none";
     }
                          function delet(){
         
         if((document.getElementById("delet").style.display !="block") )
        {
         document.getElementById("delet").style.display="block";  
                                       document.getElementById("insert").style.display="none";  
             document.getElementById("show").style.display="none";
            document.getElementById("update").style.display="none";
             document.getElementById("search").style.display="none";
     }
     else
         document.getElementById("delet").style.display="none";
     }
       function closee()
         {
             
             
             
             document.getElementById("delet").style.display="none";  
                                       document.getElementById("insert").style.display="none";  
             document.getElementById("show").style.display="none";
            document.getElementById("update").style.display="none";
             document.getElementById("search").style.display="none";
         }
         
         
     </script>
 </head>
 
 <h1>Welcome To The
 Army Base
 </h1>
	 <body background="s.jpg" onclick="hide" id="bod">
         <div class="blurr">
             </div>
	 <div  id="frame"> 
         <nav>
         <button href="#"  onclick="insert()">ادخال بيانات</button>
           <div id="insert" class="options" style="right:51px;">
                                   <a href="javascript:void(0)" onclick="closee()">&times;</a>
             <a href="ssolider.php" target="framee"> جنود</a>
    
             <a href='vechile.php'target="framee"> مركبات</a>
             <a href="weaponn.php" target="framee"> اسلحة</a>
             <a href="battlion.php"target="framee"> كتيبة</a>
             <a href="companyy.php"target="framee"> سرية</a>
             <a href="factionn.php"target="framee"> فصيل</a>
             <a href="groupp.php"target="framee"> مجموعة</a>
             <a href="rank.php "target="framee"> رتبة</a>
            </div>
             
             
             
             
             
             
             
             
             
          <button onclick="show()"> رؤية البيانات</button>
            <div id="show" class="options"style="right:228px;" >
                                   <a href="javascript:void(0)" onclick="closee()">&times;</a>

             <a href="showsolider.php" target="framee"> جنود</a>
             <a href="showvechile.php" target="framee"> مركبات</a>
             <a href="showweapon.php" target="framee"> اسلحة</a>
             <a href="showbatlion.php" target="framee"> كتيبة</a>
             <a href="showcompany.php" target='framee'> سرية</a>
             <a href="showfactionn.php" target='framee'> فصيل</a>
             <a href="showgroup.php" target="framee"> مجموعة</a>
             <a href="showrank.php" target='framee'> رتبة</a>
            </div>
             
             
             
              <button onclick="update()">تعديل بيانات</button>
                <div id="update" class="options"style="right:405px;">
                                   <a href="javascript:void(0)" onclick="closee()">&times;</a>

             <a href="updatessolider1.php" target="framee"> جنود</a>
             <a href="updatevechile.php" target="framee"> مركبات</a>
             <a href="updatesweapon.php" target="framee"> اسلحة</a>
            </div>
             
             
              <button onclick="search()"> بحث عن بيانات</button>
                <div id="search"class="options"style="right:592px;">
                                   <a href="javascript:void(0)" onclick="closee()">&times;</a>

             <a href="searchsolider.php" target="framee"> جنود</a>
             <a href="searchvechile.php" target="framee"> مركبات</a>
             <a href="searchweapon.php" target="framee"> اسلحة</a>
             <a href="searchbattlion.php" target="framee"> كتيبة</a>
             <a href="searchcompany.php" target="framee"> سرية</a>
             <a href="searchfaction.php" target="framee"> فصيل</a>
             <a href="searchgroup.php" target="framee"> مجموعة</a>
             <a href="searchrank.php" target="framee"> رتبة</a>
            </div>
             
             
             <button onclick="delet()">حذف بيانات</button>
                <div id="delet"class="options"style="right:775px;">
                                   <a href="javascript:void(0)" onclick="closee()">&times;</a>

                     <a href="deletesolider" target="framee"> جنود</a>
             <a href="deletevechile.php" target="framee"> مركبات</a>
             <a href="delete_weapon.php" target="framee"> اسلحة</a>
             <a href="deletebattlion.php" target="framee"> كتيبة</a>
             <a href="deletecompany.php" target="framee"> سرية</a>
             <a href="deletefaction.php"  target="framee"> فصيل</a>
             <a href="deletegroup.php" target="framee"> مجموعة</a>
             <a href="deleterank.php" target="framee"> رتبة</a>
            </div>
             
             
         </nav>
         
         <iframe name="framee" > </iframe>
         
         

	</div>

	 	 
<div id="diiv">
    <br/>
	 <br/>
	 <br/>
 <br/>
	 
<a href="Mainn.php"   >الرئيسية</a>
<a   href="gg.php" target="framee" >
اضافة مستخدم

    </a>

<a href="showusers.php" target="framee"  > رؤية المستخدمين </a>
    
   <a href="deleteuser.php"  target="framee"> حذف مستخدم</a> 
    <a href="logout.php" > تسجيل الخروج</a> 
    
    
</div>

         
	 </body>
 </html>