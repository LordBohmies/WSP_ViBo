<?php
$server = "localhost";
$user = "admin";
$pass = "localhorse";
$db = "blogg";

// Create connection
$conn = new mysqli($server, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

else {
    echo "Connection success";
}

?>
