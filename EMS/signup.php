<?php
$con = mysqli_connect("localhost","root","","ems");
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];
    
    // Validate input (add more validation as needed)
    if (empty($username) || empty($password) || empty($confirmPassword)) {
        echo "Please fill in all fields.";
    } elseif ($password !== $confirmPassword) {
        echo "Passwords do not match.";
    } else {
        // Validation successful; you can add code here to store the user data in a database.
        // For simplicity, we'll just display a success message.
        mysqli_query($con , "INSERT INTO `admin`(`username`, `password`) VALUES ('$username','$password')");
        echo "Signup successful!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.min.css">    
</head>
<body>
    <h1>Signup</h1>
    
    

    <form method="POST" action="signup.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br><br>
        
        <input type="submit" value="Signup">
    </form>
    <button><a href="user.php">Sign In</a></button>
</body>
</html>
 