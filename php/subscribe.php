<?php
include_once("database.php");
$email=$_POST["email"]; 
echo "E-Mail:-".$email."<br>";
echo "THANKS_FOR_SUBSCRIBING";
$query="insert into subscribe(email) values('$email')";
if(mysqli_query($con,$query))
{
header("Location:feedback.php?msg=Success");  
}
?> 