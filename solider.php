<?php
if(isset($_POST["submit"]))
{

if(isset($_POST["firstname"]) &&      isset($_POST["secondname"])      &&     isset($_POST["thirdname"])    &&     isset($_POST["lastname"])    &&      isset($_POST["city"]) &&      isset($_POST["directorate"])  &&      isset($_POST["birth_date"])    &&      isset($_POST["id_solider"])  )
{
    $b=$_POST["secondname"]  ;$c= $_POST["thirdname"];$d= $_POST["lastname"] ;$e=  $_POST["city"]     ;$f= $_POST["directorate"]; $g=$_POST["birth_date"];$h= $_POST["id_solider"] ;$a=$_POST["firstname"];
    
{$query="insert into solider11 ( first, second,third,last,city,directorate,birth_date,id_solider) values ('$a','$b','$c','$d','$e','$f','$g','$h')"; 
 
 
if(!($database=mysql_connect("localhost","root","")))
{
die("could not connect to database</body></html>");
}

if(!mysql_select_db("solider",$database))
{die("could not open solider database</body></html>");

}

if(!($result=mysql_query($query,$database)))
{

print("could not excecute query");
die(mysql_error());


}


mysql_close($database);
print("secssuful");






}
}
}
?>
