<?php
// Database Configuration 
$host = 'localhost';            // Database host(usually 'localhost')
$dbname = 'fredmon';          // Database name
$username = 'root';             // Database username (default 'root' for XAMMP)
$password = '';                 // Database password (usually empty for XAMPP)

// Create a connection 
$conn = new mysqli($host, $username, $password, $dbname);

// Check the connection 
if ($conn->connect_error) {
    die("Connection failed:". $conn->connect_error);
}  

echo "Database connection successful!";
?>