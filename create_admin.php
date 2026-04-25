<?php
include "./database.php";

$username = "admin";          // choose your admin username
$password = "admin123";       // choose a password

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert into admin table
$sql = "INSERT INTO admin (username, password) VALUES (?, ?)";
$stmt = mysqli_prepare($connection, $sql);
mysqli_stmt_bind_param($stmt, "ss", $username, $hashed_password);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

echo "Admin created successfully!";
?>
