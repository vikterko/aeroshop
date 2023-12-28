<?php
// Database credentials
$host = 'localhost'; // Host name
$username = 'stranka'; // MySQL username
$password = 'supertajneheslo'; // MySQL password
$dbname = 'strankaINF'; // Database name

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}