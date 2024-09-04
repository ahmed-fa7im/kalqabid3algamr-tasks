<?php
ob_start();
include 'config.php';

session_start();
$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location: login.php');
    exit();
}

// Handle logout
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header('location: login.php');
    exit();
}

ob_end_flush();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="profile">
            <?php
            $select = mysqli_query($link, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
            if (mysqli_num_rows($select) > 0) {
                $fetch = mysqli_fetch_assoc($select);

                // Display user image
                if ($fetch['image'] == '') {
                    echo '<img src="images/default-avatar.png">';
                } else {
                    echo '<img src="uploaded_img/' . $fetch['image'] . '">';
                }

                // Display user name
                echo '<h3>' . $fetch['name'] . '</h3>';
            } else {
                echo '<h3>User not found</h3>';
            }
            ?>
            <a href="update_profile.php" class="btn">update profile</a>
            <a href="home.php?logout=<?php echo $user_id; ?>" class="btn delete-btn" id="delete-btn">logout</a>
            <p>new <a href="login.php">login</a> or <a href="register.php">register</a></p>
        </div>
    </div>
</body>

</html>