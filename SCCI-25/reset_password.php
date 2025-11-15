<?php
include 'connection.php'; // Ensure database connection

if (!isset($_SESSION['id'])) {
    echo "Unauthorized access!";
    exit();
}

$user_id = $_SESSION['id'];
$newPassword = $_POST['newPassword'];

// Hash the new password for security
$hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

// Update password in database
$update = "UPDATE `users` SET `password`='$hashedPassword' WHERE id='$user_id'";
if (mysqli_query($connect, $update)) {
    echo "Password successfully updated!";
    header("Location:login.php");
} else {
    echo "Error updating password!";
}

?>
