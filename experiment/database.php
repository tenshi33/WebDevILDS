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

try {
    $check_table_query = "SHOW TABLES LIKE 'users'";
    $result = $conn->query($check_table_query);
    
    if ($result->num_rows == 0) {
        $sql = "CREATE TABLE users (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(50) NOT NULL,
            email VARCHAR(100) NOT NULL,
            pass VARCHAR(50) NOT NULL)";
        
        if ($conn->query($sql) === TRUE) {
            echo "Table created";
        } else {
            throw new Exception("Error creating table: " . $conn->error);
        }
    } else {
        echo "Table 'users' already exists <br>";
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
