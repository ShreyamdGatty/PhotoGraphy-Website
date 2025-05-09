<?php

// Database connection
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "potfolio";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
