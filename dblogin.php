<?php
$db_host = "localhost"; 
$db_user = "root"; 
$db_pass = ""; 
$db_name = "dblogin"; 

// Establish database connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize user input (prevent SQL injection)
function sanitize_input($data) {
    global $conn;
    return mysqli_real_escape_string($conn, trim($data));
}
?>