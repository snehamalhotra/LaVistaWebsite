<?php
$servername = "localhost";
$uname = "root";
$pword = "";
$db = "dbname";
// Create connection
$conn = new mysqli($servername, 
            $uname, $pword);
  
// Check connection
if ($conn->connect_error) {
    die("Connection failure: " 
        . $conn->connect_error);
} 
  
// Creating a database named geekdata
$sql = "CREATE DATABASE login";
if ($conn->query($sql) === TRUE) {
    echo "Login Successfully";
} else {
    echo "Error: " . $conn->error;
}
?>