<?php
include 'nav.php';
// 3l4an my5o44 mn url w hwa msh 3amel login
if (!isset($_SESSION['id'])) {
    header("location:login.php");
}

$user_id = $_SESSION['id'];
// Fetch user data using $userId
// select attendance
$select = "SELECT * FROM `attendance` 
    JOIN `sessionday` ON `sessionday`.`id` = `attendance`.`session_id` 
    WHERE `attendance`.`user_id` = '$user_id'";
$run_select = mysqli_query($connect, $select);

// select data user
$select_user = "SELECT * FROM `users` WHERE id='$user_id' ";
$run_select_user = mysqli_query($connect, $select_user);
$fetch_user = mysqli_fetch_assoc($run_select_user);
// update_photo
if (isset($_POST["save"]) && isset($_FILES['image']['name'])) {
    $image = basename($_FILES['image']['name']);
    $tmp_name = $_FILES['image']['tmp_name'];

    //  unique file name
    $fileExt = pathinfo($image, PATHINFO_EXTENSION);
    $newFileName = "user_" . $user_id . "_" . time() . "." . $fileExt;
    $uploadPath = "./img/" . $newFileName;


    move_uploaded_file($tmp_name, $uploadPath);
    $update = "UPDATE `users` SET `user_photo`='$newFileName' WHERE id='$user_id'";
    mysqli_query($connect, $update);
    header("Location: profile.php");


}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- links -->
     <script src="https://kit.fontawesome.com/567d267f56.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/profile.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono:400,700" rel="stylesheet"> 
    <link rel="shortcut icon" href="./img/scci_logo.png" type="image/x-icon">
    <title>Profile</title>
</head>
<body>
     <!-- card info -->
     <form action="" method="POST" enctype="multipart/form-data">
            <?php foreach ($run_select_user as $data) { ?>
                <div class="card">
                    <div class="profile">
                        <div class="profile__img">

                            <img src="./img/<?php echo $data['user_photo'] ?>" alt="photo" class="profile">
                        </div>
                        
                        <div class="upload-icon">
                            <input type="file" id="photoInput" name="image" accept="image/*" style="display: none;">
                            <button type="button" id="uploadTrigger">
                                <i class="fas fa-camera"></i>
                            </button>
                            <button type="submit" class="save-btn" name="save">Save</button>
                        </div>

                        <?php foreach($run_select_user as $data) {?>
                        <div class="profile__info">
                            <!-- han3ml echo le el name/workshop hna lma na5od el database -->
                            <h1 class="cssanimation typing " id="spicialstyle"><?php echo $data['first_name']."  ". $data['last_name'] ?> </h1>
                            
                            <h3 class="cssanimation typing"><?php echo $data['workshop']."".$data['committee'] ?></h3>
                        </div>
                        <?php } ?>
                    </div>
                </div>
    
<?php } ?>


</form>

<!----attendance table -->
<?php foreach ($run_select_user as $data2) { ?>
    <?php if($data['role'] == 'Participant'){ ?>
        
<h1 class="title_courses">Your Attendance</h1>

<section>
    <form action="" method="post">
        <table>
            <thead>
                <tr>
                    <th>Session</th>
                    <th>Attendance</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //hna 3l4an yzhr hwa 7dr el session wla la
                $sessions = "SELECT * FROM `sessionday`";
                $run_sessions = mysqli_query($connect, $sessions);

                if (mysqli_num_rows($run_sessions) > 0) {
                    while ($session = mysqli_fetch_assoc($run_sessions)) {
                        $session_id = $session['id']; 
                        $session_title = htmlspecialchars($session['title']); 

                        $attendance = "SELECT * FROM `attendance` WHERE `session_id` = '$session_id' AND `user_id` = '$user_id'";
                        $run_attendance = mysqli_query($connect, $attendance);

                        if (mysqli_num_rows($run_attendance) > 0) {
                            echo "
                                <tr>
                                    <td>$session_title</td>
                                    <td class='attendance attendance-present'>Present</td>
                                </tr>
                            ";
                        } else {
                            echo "
                                <tr>
                                    <td>$session_title</td>
                                    <td class='attendance attendance-absent'>Absent</td>
                                </tr>
                            ";
                        }
                    }
                }
                ?>
            </tbody>
        </table>
        <?php } else { ?>
            <h1 class="title_courses">Your Attendance</h1>
    <h2 class="cssanimation typing" id="member">  انت ميمبر معندكش حضور يا قلب أخوك </h2>

    <?php } ?>
        
        <?php  } ?>

      
    </form>

</section>
<?php if (isset($_SESSION['id'])) { ?>
    <form action="login.php" method="POST">
        <button name="logout" class="logout-btn" type="submit">
            Logout
        </button>
    </form>
<?php } ?>

<!--links Section -->
<h1 class="title_courses"> Courses</h1>
<section class="cards-section">

    <div class="card-item">
        <h3>DEVOLOGY </h3>
        <p>Find information about PROGRAMMING </p>
        <a href="#" target="_blank">Go to Resource</a>
    </div>


    <div class="card-item">
        <h3>APP SPLASH </h3>
        <p>Find information about APP SPLASH</p>
        <a href="#" target="_blank">Go to Resource</a>
    </div>


    <div class="card-item">
        <h3>TECHSOLVE</h3>
        <p>Find information about TECHSOLVE</p>
        <a href="" target="_blank">Go to Resource</a>
    </div>

    <div class="card-item">
        <h3>INVESTENUER</h3>
        <p>Find information about INVESTENUER</p>
        <a href="#" target="_blank">Go to Resource</a>
    </div>

    <div class="card-item">
        <h3>MARKETIVE</h3>
        <p>Find information about MARKETIVE</p>
        <a href="#" target="_blank">Go to Resource</a>
    </div>

    <div class="card-item">
        <h3>MOBLIE CRAFT</h3>
        <p>Find information about MOBLIE CRAFT</p>
        <a href="#" target="_blank">Go to Resource</a>
    </div>

    <div class="card-item">
        <h3>MEDIA PRODUCTION</h3>
        <p>Find information about MEDIA PRODUCTION.</p>
        <a href="#" target="_blank">Go to Resource</a>
    </div>

    <div class="card-item">
        <h3>LOGISTIC</h3>
        <p>Find information about  <br> LOGISTIC</p>
        <a href="#" target="_blank">Go to Resource</a>
    </div>

</section>

<!-- footer -->


<?php include 'footer.php'; ?>
</body>

<script src="./js/main.js"></script>
<script src="./js/profile.js"></script>



</html>