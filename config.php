<?php

define("CompanyName", "PANOTING");

$servername = "localhost";
$username = "root";
$password = "";
$database = "PAN-OTING";

// Create connection

$conn = new mysqli($servername, $username, $password, $database);

// Check connection

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
echo "";
?>