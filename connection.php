<?php
$localhost = "localhost";
$username = "root";
$password = "";
$database ="scci'25";
$connect = mysqli_connect($localhost, $username ,$password , $database); 
if($connect){
    // echo"connected" ;
}
if (session_status() == PHP_SESSION_NONE) {
    session_start();  // Start the session only if it's not started yet
}
ob_start();
if(isset($_POST['logout']))
{
    session_unset();
    session_destroy();
    header("location:login.php");
}
    // error_reporting(0);
if (!$connect) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
