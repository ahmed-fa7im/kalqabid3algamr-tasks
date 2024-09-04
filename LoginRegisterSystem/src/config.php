

<?php
$servername = "db";
$username = "root";
$password = "root";
$db_name = "user_db";

// Create connection
$link = new mysqli($servername, $username, $password,$db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $link->connect_error);
}
//echo "Connected successfully";
?> 