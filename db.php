<!-- <!?php

$connection = mysqli_connect('localhost', 'root', '', 'ecommerce');
if(!$connection) {
    die("Database connection failed");
}
$q = "SET SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO'";
$connection -> query($q);

?> -->

<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "ecommerce";

// Create connection
// $connection = new mysqli($servername, $username, $password, $database);
// $connection = new mysqli($servername, $username, $password, $database);
$connection = mysqli_connect('localhost', 'root', '', 'ecommerce');

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
$q = "SET SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO'";
$connection -> query($q);
?>
