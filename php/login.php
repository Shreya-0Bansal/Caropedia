<?php
include_once("database.php");

// Collect user input
$email = $_POST["email"];
$password = $_POST["password"];

// Retrieve the user from the database
$query = "SELECT password, salt FROM users WHERE email='$email'";
$result = mysqli_query($con, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        $stored_hash = $row['password'];
        $salt = $row['salt'];

        // Combine the input password with the stored salt and hash it
        $salted_password = $password . $salt;
        $hashed_password = hash('sha256', $salted_password);

        // Verify the hashed password
        if ($hashed_password === $stored_hash) {
            header("Location: ../index.html");
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }
} else {
    echo "Error: " . mysqli_error($con);
}
?>
