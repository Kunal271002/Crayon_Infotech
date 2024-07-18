<?php

// Database has been Created Manually using Xampp server.
// Database information has been given below
//password is none

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "experience";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
