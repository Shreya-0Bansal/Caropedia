<?php
include_once("database.php");
$email=$_POST["email"]; 
echo "E-Mail:-".$email."<br>";
echo "THANKS_FOR_SUBSCRIBING";
$query="insert into pet_s(email) values('$email')";
if(mysqli_query($con,$query))
{
header("Location:pet_1.php?msg=Success");  
}
?> 