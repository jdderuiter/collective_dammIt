<?php
$servername = "justinderuiter.nl";
$username = "justin1q_parklaan";
$password = "CLE3parklaan";
$db = "justin1q_CLE3";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>