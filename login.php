<?php
// Start the session
session_start();

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Save form data into session variables
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['email'] = $_POST['email'];

    // Redirect to welcome page
    header("Location: welcome.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>

<h2>Login Form</h2>

<form method="post" action="login.php">
    Username: <input type="text" name="username" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    <input type="submit" value="Login">
</form>

</body>
</html>