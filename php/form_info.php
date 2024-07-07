<?php
include_once("database.php");
$name=$_POST["name"];
$email=$_POST["email"]; 
$phone=$_POST["phone"];
$message=$_POST["message"]; 
echo "Name:-".$name."<br>";
echo "E-Mail:-".$email."<br>";
echo "Phone:-".$phone."<br>";
echo "Message:-".$message."<br>";
echo "THANKS_FOR_SUBMITTING";
$query="insert into car_db(name,email,phone,message)values('$name','$email','$phone','$message')";
if(mysqli_query($con,$query))
{
header("Location:feedback.php?msgg=Success");  
}
?>