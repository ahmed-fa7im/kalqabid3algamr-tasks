<?php
include 'config.php';
$ID = $_GET['id'];
$query = "DELETE FROM addcard WHERE id=$ID";
mysqli_query($con,$query);

header('location: card.php');
?>