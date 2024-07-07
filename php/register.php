<?php
include_once("database.php");

// Collect user input
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];

// Validate if passwords match
if ($password !== $cpassword) {
    die("Passwords do not match.");
}

// Generate a unique salt
$salt = bin2hex(random_bytes(16));

// Combine the password and salt and hash them
$salted_password = $password . $salt;
$hashed_password = hash('sha256', $salted_password);

// Redirect to the index page
header("Location: ../index.html");

// Prepare the SQL query
$query = "INSERT INTO users (name, email, password, salt) VALUES ('$name', '$email', '$hashed_password', '$salt')";

// Execute the query
mysqli_query($con, $query);
?>
