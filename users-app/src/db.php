<?php
$user = 'root';
$password = 'root';
$db = 'users_app';
$host = 'db';
$port = 3306;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db,
   $port
);

if (!$success) {
    die('Connection failed: ' . mysqli_connect_error());
}