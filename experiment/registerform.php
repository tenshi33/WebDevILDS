 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ILoDigital Solution</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<form action="" method="post">
    <label for="RegisterUsername">Username</label>
    <input type="text" id="RegisterUsername" name="RegisterUsername" required><br><br>

    <label for="RegisterEmail">Email</label>
    <input type="email" id="RegisterEmail" name="RegisterEmail" required><br><br>

    <label for="RegisterPassword">Password</label>
    <input type="password" id="RegisterPassword" name="RegisterPassword" required><br><br>

    <button type="submit">Register</button>
</form>

<?php
include("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["RegisterUsername"];
    $email = $_POST["RegisterEmail"];
    $password = $_POST["RegisterPassword"];

    $sql1 = "SELECT * FROM users WHERE email='$email' OR username='$username";
    $result = $conn->query($sql1);

    if (!$result) {
        echo "Error executing SQL query: " . $conn->error;
    } else {
        if ($result->num_rows > 0) {
            echo "Account is already in use";
        } else {
            $sql = "INSERT INTO users (username, email, Pass) VALUES ('$username','$email','$password')";

            if ($conn->query($sql) === TRUE) {
                echo "New data added";
            } else {
                echo "Error: " . $conn->error;
            }
        }
    }
}

$conn->close();
?>
</body>
</html>
