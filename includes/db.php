<?php

$servername = "localhost";
$username = "admin";
$password = "gg7hZGDf";
$dbName = "alpogo-db-test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "<p class='database-status'>Database is working fine!</p>";
