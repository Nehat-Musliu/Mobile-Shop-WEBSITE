<?php
session_start();
include_once 'Database.php';
include_once 'user.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Database();
    $connection = $db->getConnection();
    $user = new User($connection);

    // Merr të dhënat nga forma
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Tentoni të logoheni
    if ($user->login($email, $password)) {
        // Ruaj përdoruesin dhe rolin në seancë
        $_SESSION['user_email'] = $email; // Përdoruesi në sesion
        $_SESSION['user_role'] = $_SESSION['role']; // Roli i përdoruesit në sesion

        // Kontrollo nëse roli është admin dhe ridrejto në dashboardin e adminit
        if ($_SESSION['user_role'] == 'admin') {
            header("Location: dashboard.php"); // Ridrejto në dashboardin e adminit
        } else {
            header("Location: HomePage.php"); // Ridrejto në faqen e kryesore për përdoruesit
        }
        exit;
    } else {
        echo "Invalid login credentials!";
    }
}
?>

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
                <form id="login-form" action="login.php" method="POST">
    <div class="input-group">
        <label for="login-email">Email</label>
        <input type="email" id="login-email" name="email" placeholder="Enter your email" required>
    </div>
    <div class="input-group">
        <label for="login-password">Password</label>
        <input type="password" id="login-password" name="password" placeholder="Enter your password" required>
    </div>
    <button type="submit">Login</button>
    <p class="switch-form">Don't have an account? <a href="register.php">Register here</a></p>
</form>

            </div>  
        </div>  
    </div>  
        
    <script src="script.js"></script>
</body>
</html>
