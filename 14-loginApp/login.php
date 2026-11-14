<?php
// 1. Start the session at the very beginning
session_start();

// Initialize $message to avoid the undefined variable warning
$message = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // Example credentials
    $username = 'erwinllano';
    $password = 'secret';

    // Get the input from the user
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    if ($input_username === $username && $input_password === $password) {
        // Set session variables
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $input_username;

        // 2. Fixed the typo ("Location" instead of "Locations")
        header("Location: admin.php");
        exit;
    } else {
        $message = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>
    <h2>Login Page</h2>

    <?php if (!empty($message)): ?>
        <p style="color:red;"><?php echo $message; ?></p>
    <?php endif; ?>

    <form method="POST">
        <label for="username">Username</label>
        <input id="username" type="text" name="username"><br><br>
        <label for="password">Password</label>
        <!-- Optional: Change type="text" to type="password" to hide password input -->
        <input id="password" type="password" name="password"><br><br>

        <input type="submit" value="Login">
    </form>

</body>

</html>