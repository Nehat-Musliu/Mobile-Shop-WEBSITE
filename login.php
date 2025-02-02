<?php
session_start();
include_once 'Database.php';
include_once 'user.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Database();
    $connection = $db->getConnection();
    $user = new User($connection);

    // Get form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Attempt to log in
    if ($user->login($email, $password)) {
        header("Location: HomePage.php"); // Redirect to home page
        exit;
    } else {
        echo "Invalid login credentials!";
    }
}
?>
<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Login</title>  
    <link rel="stylesheet" href="login.css">  
</head>  
<body>
    <div class="container">    
        <div class="form-container">  
            <div class="form login-form active">  
                <h2>Login</h2>  
                <form id="login-form" onsubmit="return login(event)">  
                    <div class="input-group">  
                        <label for="login-email">Email</label>  
                        <input type="email" id="login-email" placeholder="Enter your email" required>  
                    </div>  
                    <div class="input-group">  
                        <label for="login-password">Password</label>  
                        <input type="password" id="login-password" placeholder="Enter your password" required>  
                    </div>  
                    <button type="submit">Login</button>  
                    <p class="switch-form">Don't have an account? <a href="register.php">Register here</a></p>  
                </form>  
            </div>  
        </div>  
    </div>  
    <!-- <script src="script.js"></script>   -->
</body>  
</html>