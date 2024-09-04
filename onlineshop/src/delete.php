<?php

include 'config.php';

$ID = $_GET['id'];

$query = "DELETE FROM prod WHERE id=$ID ";
mysqli_query($con,$query);

header('Location: products.php');
?>