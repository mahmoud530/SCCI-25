<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">

</head>

<body>
    <!-- nav -->
    <header style="height: 10vh" id="bars">
        <nav id="nav">
            <div class="logo">
                <img src="./icons/scci logo.png" alt="" />
            </div>
            <div class="listIcon">
                <img id="list_icon" src="./icons/bars.svg" alt="" />
            </div>
        </nav>
        <ul id="lists">
            <li><a href="./home.php">Home</a></li>
            <li><a href="./crew.php">Crew</a></li>
            <li><a href="workshop.php">Workshops</a></li>
            <li><a href="gallery.php">Gallery</a></li>

            <?php if (!isset($_SESSION['id'])) { ?>
                <li><a href="login.php">Login In</a></li>
            <?php } else { ?>
                <li><a href="profile.php">Profile</a></li>
            <?php } ?>
            <li><a href="aboutUs.php">About Us</a></li>
            <div class="contactUs">
                <li><a href="contact.php">Contact Us</a></li>
            </div>
        </ul>
    </header>

</body>

</html>
