<?php

ob_start();
include 'config.php';

if (isset($_POST['submit'])) {



    $name = mysqli_real_escape_string($link, $_POST['name']);
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $pass = mysqli_real_escape_string($link, md5($_POST['password']));
    $cpass = mysqli_real_escape_string($link, md5($_POST['cpassword']));
    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'uploaded_img/' . $image;

    // Check if user already exists
    $select = mysqli_query($link, "SELECT * FROM `user_form` WHERE email = '$email'") or die('query failed');

    if (mysqli_num_rows($select) > 0) {
        $message[] = 'user already exists';
    } else {
        // Check if passwords match
        if ($_POST['password'] != $_POST['cpassword']) {
            $message[] = 'confirm password not matched!';
        } elseif ($image_size > 2000000) {
            $message[] = 'image size is too large!';
        } else {
            // Insert new user
            $insert = mysqli_query($link, "INSERT INTO `user_form` (name, email, password, image) VALUES('$name','$email','$pass','$image')") or die('query failed');

            if ($insert) {
                move_uploaded_file($image_tmp_name, $image_folder);
                $message[] = 'registered successfully!';
                header('Location: login.php');
            } else {
                $message[] = 'registration failed!';
            }
        }
    }
}
ob_end_flush();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="from-container">
        <form action="" method="post" enctype="multipart/form-data">
            <h3>register now</h3>
            <?php
            if (isset($message)) {
                foreach ($message as $message) {
                    echo '<div class="message">' . $message . '</div>';
                }
            }
            ?>
            <input type="text" name="name" placeholder="enter username" class="box" required>
            <input type="email" name="email" placeholder="enter email" class="box" required>
            <input type="password" name="password" placeholder="enter password" class="box" required>
            <input type="password" name="cpassword" placeholder="confirm password" class="box" required>
            <input type="file" name="image" class="box" accept="image/jpeg, image/jpg, image/png">
            <input type="submit" name="submit" value="register now" class="btn">
            <p>already have an account? <a href="login.php">login now</a></p>
        </form>
    </div>
</body>

</html>