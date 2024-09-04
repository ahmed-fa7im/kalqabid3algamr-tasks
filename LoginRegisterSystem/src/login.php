<?php

ob_start();
include 'config.php';
session_start();

if (isset($_POST['submit'])) {



    $email = mysqli_real_escape_string($link, $_POST['email']);
    $pass = mysqli_real_escape_string($link, md5($_POST['password']));

    // Check if user already exists
    $select = mysqli_query($link, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

    if (mysqli_num_rows($select) > 0) {

        $row = mysqli_fetch_assoc($select);
        $_SESSION['user_id'] = $row['id'];
        header('location: home.php');
    }
    else{
        $message[] = 'incorrect email or password!';

    }
}
ob_end_flush();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="from-container">
        <form action="" method="post" enctype="multipart/form-data">
            <h3>login now</h3>
            <?php
            if (isset($message)) {
                foreach ($message as $message) {
                    echo '<div class="message">' . $message . '</div>';
                }
            }
            ?>
            <input type="email" name="email" placeholder="enter email" class="box" required>
            <input type="password" name="password" placeholder="enter password" class="box" required>
            <input type="submit" name="submit" value="login now" class="btn delete_btn">
            <p>don't have an account? <a href="register.php">register now</a></p>
        </form>
    </div>
</body>

</html>