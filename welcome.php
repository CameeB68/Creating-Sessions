<?php
// Start session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
</head>
<body>

<h2>Welcome Page</h2>

<?php
// Check if session variables exist
if (isset($_SESSION['username']) && isset($_SESSION['email'])) {

    echo "<p>Welcome, " . $_SESSION['username'] . "!</p>";
    echo "<p>Your email is: " . $_SESSION['email'] . "</p>";

} else {

    echo "<p>No session data found. Please login first.</p>";
}
?>

<br>
<a href="login.php">Back to Login</a>

</body>
</html>