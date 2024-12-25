<?php
// MySQLi procedural connection
$conn = mysqli_connect("localhost", "root", "root", "tutorial4all");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
