<?php
include "connection.php";

$new_password = "scciweb";  
$hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

$select = "SELECT `id` FROM `users`";
$run_select = mysqli_query($connect, $select);

if ($run_select) {
    while ($row = mysqli_fetch_assoc($run_select)) {
        $user_id = $row['id'];

        $update = "UPDATE `users` SET `hash_password` = '$hashed_password' WHERE `id` = '$user_id'";
        $run_update = mysqli_query($connect, $update);
    }
    echo "passwords updated successfully";
} else {
    echo "error" ;
}


?>


