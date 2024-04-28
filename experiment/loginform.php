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

    <label for="LoginEmail">Email</label>
    <input type="email" id="LoginEmail" name="LoginEmail" required><br><br>

    <label for="LoginPassword">Password</label>
    <input type="password" id="LoginPassword" name="LoginPassword" required><br><br>

    <button type="submit">Register</button>
    
</form>
<?php
    include('database.php');
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $LoginEmail = $_POST["LoginEmail"];
        $LoginPassword = $_POST["LoginPassword"];
        $sql = "SELECT * FROM users WHERE email='$LoginEmail'";
        $result = $conn->query($sql);

        if(!$result){
            echo "error";
        }else{
            $row = $result->fetch_assoc();
            $storedPassword = $row["pass"];
            
            // Verify password
            if($LoginPassword == $storedPassword){
                echo "Login successful";
            } else {
                echo "Incorrect password";
            }
        }
    }

?>
</body>
</html>
