<?php

$servername = "mysql://mysql:3306/";
$database = "sampledb";
$username = "free";
$password = "free";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully without Mysqli";