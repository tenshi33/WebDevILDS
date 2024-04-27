<?php
include("database.php");

try {
    // Check if the table exists
    $check_table_query = "SHOW TABLES LIKE 'users'";
    $result = $conn->query($check_table_query);
    
    if ($result->num_rows == 0) {
        // Table does not exist, so create it
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
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ILoDigital Solution</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<form action="loginform.php" method="post">
    <label for="username">Username</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="password">Password</label>
    <input type="password" id="password" name="password" required><br><br>

    <button type="submit">Register</button>
</form>
<?php
    include("database.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $sql = "INSERT INTO users (username, email, Pass) VALUES ('$username','$email','$password')";

        if(isset($username)){
            if ($conn->query($sql) === TRUE) {
                echo "new data added";
            } else {
                echo "Error: ". $conn->error;
            }
    }
    }





?>

</body>
</html>
