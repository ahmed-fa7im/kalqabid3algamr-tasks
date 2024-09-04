<?php

ob_start();
include "config.php";

if (isset($_POST['update'])) {
    $ID = $_POST['id'];
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];


    $current_image_query = "SELECT image FROM prod WHERE id=$ID";
    $result = mysqli_query($con, $current_image_query);
    $row = mysqli_fetch_assoc($result);
    $current_image = $row['image'];

    // check if update image or not
    if ($_FILES['image']['name']) {
        $image_location = $_FILES['image']['tmp_name'];
        $image_name = $_FILES['image']['name'];
        $image_up = "images/" . $image_name;

        // update new image
        $update = "UPDATE prod SET name='$NAME', price='$PRICE', image='$image_up' WHERE id=$ID";

        mysqli_query($con, $update);
        if (move_uploaded_file($image_location, 'images/' . $image_name)) {
            echo "<script>alert('تم تحديث المنتج بنجاح')</script>";
        } else {
            echo "<script>alert('حدث مشكلة لم يتم تحديث المنتج')</script>";
        }
    } else {
        // if not update image use the same image.....
        $update = "UPDATE prod SET name='$NAME', price='$PRICE', image='$current_image' WHERE id=$ID";
        mysqli_query($con, $update);
        echo "<script>alert('تم تحديث المنتج')</script>";
    }

    header('Location: index.php');
    exit;
}

ob_end_flush();
