<?php
//Connection information to database
$host = 'localhost';
$dbname = 'blogg';
$user = 'admin';
$password = 'localhorse';

//Attribute for our PDO-object
$attr = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

// Settings for our connection.
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

//Creating a PDO-object that will be used to establish a connection to the Database.
$pdo = new PDO($dsn, $user, $password, $attr);
 ?>
