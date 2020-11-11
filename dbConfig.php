<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "agile_team5";

// Create database connection
$db = mysqli_connect($dbHost, $dbUsername, $dbPassword);
$connection = mysqli_select_db($db, "agile_team5");
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>