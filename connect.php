<?php
$servername = "localhost";
$username =$_SESSION["username"];
$password =$_SESSION["password"]; 
$dbname="army";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 ?> 
