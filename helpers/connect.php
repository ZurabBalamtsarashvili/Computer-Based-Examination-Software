<?php
$servername = "clhhubs1f000cmja29qjydbke";
$dbusername = "pmauser";
$dbpassword = "password";
$dbname = "CBT";

// Create connection
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
