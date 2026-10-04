<?php
$servername = "localhost";
$username = "root";
$password = ""; // Leave empty for WAMP default
$dbname = "space_research_db";

// Create the connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
echo "Connection successful. Comm-link established.";
?>