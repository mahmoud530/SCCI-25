<?php
include("connection.php");
$error_msg = "";
$email = ""; 
$password = "";
$remember = "";

if (isset($_SESSION['id'])) {
    header("location:home.php");
}



if (isset($_POST['login'])) {
    // SQL INJECTION
    $email=mysqli_real_escape_string($connect,$_POST['email']);
    $password=mysqli_real_escape_string($connect,$_POST['hash_password']);
    // Check if 'Remember Me' is checked
    if (isset($_POST['remember'])) {
        $remember = $_POST['remember'];
    }
    $select = "SELECT * FROM `users` WHERE `email` = '$email'";
    $run_select = mysqli_query($connect, $select);
    $rows = mysqli_num_rows($run_select);
    if ($rows > 0) {
        $fetch = mysqli_fetch_assoc($run_select);
        $hashed_password = $fetch['hash_password'];

        // Verify password
        if (password_verify($password, $hashed_password)) {
            $user_id = $fetch['id'];
            $_SESSION['id'] = $user_id; 
            // If 'Remember Me' is checked, set cookies for 1 year
            if (isset($_POST['remember'])) {
                setcookie("remember_email", $email, time() + 3600 * 24 * 365); 
                setcookie("remember_password", $password, time() + 3600 * 24 * 365);   
                setcookie("remember", $remember, time() + 3600 * 24 * 365);
            } else {
                // If 'Remember Me' is not checked, delete cookies
                setcookie("remember_email", "", time() - 3600); 
                setcookie("remember_password", "", time() - 3600); 
                setcookie("remember", "", time() - 3600);
            }
            // Redirect to Home page after successful login
            header("Location:profile.php");
            exit();
            
        } else {
            $error_msg = "Password incorrect";  
        }
    } else {
        $error_msg = "Incorrect email";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- links -->
    <link rel="shortcut icon" href="img/scci logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/login.css">
    <title>login</title>
</head>
<body>
<h1 class="welcome-text"> SCCI' 25</h1>
    <!-- Start card -->
    <div class="card">
        <h4 class="title">Log In!</h4>
        <form method="POST">
            <div class="field">
                <!-- Email input -->
                <svg class="input-icon" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
                    <path d="M207.8 20.73c-93.45 18.32-168.7 93.66-187 187.1c-27.64 140.9 68.65 266.2 199.1 285.1c19.01 2.888 36.17-12.26 36.17-31.49l.0001-.6631c0-15.74-11.44-28.88-26.84-31.24c-84.35-12.98-149.2-86.13-149.2-174.2c0-102.9 88.61-185.5 193.4-175.4c91.54 8.869 158.6 91.25 158.6 183.2l0 16.16c0 22.09-17.94 40.05-40 40.05s-40.01-17.96-40.01-40.05v-120.1c0-8.847-7.161-16.02-16.01-16.02l-31.98 .0036c-7.299 0-13.2 4.992-15.12 11.68c-24.85-12.15-54.24-16.38-86.06-5.106c-38.75 13.73-68.12 48.91-73.72 89.64c-9.483 69.01 43.81 128 110.9 128c26.44 0 50.43-9.544 69.59-24.88c24 31.3 65.23 48.69 109.4 37.49C465.2 369.3 496 324.1 495.1 277.2V256.3C495.1 107.1 361.2-9.332 207.8 20.73zM239.1 304.3c-26.47 0-48-21.56-48-48.05s21.53-48.05 48-48.05s48 21.56 48 48.05S266.5 304.3 239.1 304.3z"></path>
                </svg>
                <input autocomplete="off" id="logemail" class="input-field" name="email" type="email"
                    value="<?php echo !empty($email) ? $email : (isset($_COOKIE['remember_email']) ? $_COOKIE['remember_email'] : ''); ?>" 
                    placeholder="Enter Your E-mail" required>
            </div>
            <div class="field">
                <!-- Password input -->
                <svg class="input-icon" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
                    <path d="M80 192V144C80 64.47 144.5 0 224 0C303.5 0 368 64.47 368 144V192H384C419.3 192 448 220.7 448 256V448C448 483.3 419.3 512 384 512H64C28.65 512 0 483.3 0 448V256C0 220.7 28.65 192 64 192H80zM144 192H304V144C304 99.82 268.2 64 224 64C179.8 64 144 99.82 144 144V192z"></path>
                </svg>
                <input autocomplete="off" id="logpass" class="input-field" name="hash_password" type="password"
                    value="<?php echo !empty($password) ? $password : (isset($_COOKIE['remember_password']) ? $_COOKIE['remember_password'] : ''); ?>" 
                    placeholder="Enter Your Password" required>
            </div>
            <!-- 'Remember Me' checkbox -->
            <label class="checkbox-container">
                <input checked="" class="check" type="checkbox" name="remember" value="1"
                    <?php echo (!empty($remember) || isset($_COOKIE['remember'])) ? 'checked' : ''; ?>>
                Remember me
            </label>
            <!-- Login button -->
            <button  type="submit" class="btn" name="login">
            <span class="shadow"></span>
            <span class="edge"></span>
            <span class="front text"> Login</span>
            </button>
        </form>
    </div>
    <!-- Popup error message -->
    <div id="popup" class="popup"></div>
    <script>
        // JavaScript for error message
        const errormsg = "<?php echo $error_msg; ?>";
        if (errormsg) {
            const popup = document.getElementById("popup");
            popup.innerText = errormsg;
            popup.style.display = "block";
            popup.style.marginTop = "-35px";

            // Fade out the popup after 5 seconds
            setTimeout(() => {
                popup.style.opacity = "0";
                setTimeout(() => { popup.style.display = "none"; }, 500);
            }, 5000);
        }
    </script>
</body>
</html>
