<?php
$servername = "localhost";
$username = "u768844772_crm123";
$password = "Crm@mihu123";
$dbname = "u768844772_crm_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>