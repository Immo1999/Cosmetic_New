<?php
$a=$_POST["txt"];
$b=$_POST["email"];
$b=$_POST["password"];
echo $a."<br>";
echo $b."<br>";
echo $c."<br>";


// Database connection

$con=mysqli_connect("localhost:3308","root","","loginform");
$sql="insert into registration values('$a','$b','$c',)";
$exe=mysqli_query($con,$sql);

?>