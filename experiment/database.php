<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "NathanDB"; 

try {
    $conn = new mysqli($servername, $username, $password, $database);
} catch (Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}

if ($conn) {
    echo "Connected successfully";
}
?>
