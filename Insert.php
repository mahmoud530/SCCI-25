<?php
$run_insert = false;
$message = "";

if (isset($_POST['submit'])) {

    $conn = new mysqli("localhost", "root", "", "scci'25");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name  = trim($_POST['Name']);
    $email = trim($_POST['Email']);
    $phone = trim($_POST['phone']);
    $msg   = trim($_POST['Message']);

    // BACKEND VALIDATION
    if (strlen($name) < 3) {
        $message = "Name must be at least 3 characters!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid email format!";
    } elseif (strlen($phone) < 10 || strlen($phone) > 15) {
        $message = "Invalid phone number!";
    } elseif (strlen($msg) < 5) {
        $message = "Message too short!";
    } else {
        // INSERT
        $stmt = $conn->prepare("INSERT INTO contact_us (name, email, phone, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $phone, $msg);

        if ($stmt->execute()) {
            $run_insert = true;
            $message = "Your message has been sent successfully!";
        } else {
            $run_insert = false;
            $message = "Error: " . $conn->error;
        }
        $stmt->close();
    }

    $conn->close();
}


?>
