<?php
include_once 'Database.php';
include_once 'user.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Database();
    $connection = $db->getConnection();
    $user = new User($connection);

    // Get form data
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    


    // Register the user
    if ($user->register($name, $surname, $email, $password,$role)) {
        header("Location: login.php"); // Redirect to login page
        exit;
    } else {
        echo "Error registering user!";
    }
}
?>
<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Register</title>  
    <link rel="stylesheet" href="login.css">  
</head>  
<body>
    <div class="container">    
        <div class="form-container">  
            <div class="form register-form active">  
                <h2>Register</h2>  
                <form action="register.php" method="POST" id="register-form">  
                    <div class="input-group">  
                        <label for="register-name">Name</label>  
                        <input type="text" id="register-name" name="name" placeholder="Enter your name" required>  
                    </div>  
                    <div class="input-group">  
                        <label for="register-surname">Surname</label>  
                        <input type="text" id="register-surname" name="surname"  placeholder="Enter your surname" required>  
                    </div> 
                    <div class="input-group">  
                        <label for="register-email">Email</label>  
                        <input type="email" id="register-email" name="email" placeholder="Enter your email" required>  
                    </div>  
                    <div class="input-group">  
                        <label for="register-password">Password</label>  
                        <input type="password" id="register-password" name="password" placeholder="Enter your password" required>  
                    </div>   
                    <button type="submit">Register</button>  
                    <p class="switch-form">Already have an account? <a href="login.php">Login here</a></p>  
                </form>  
            </div>  
        </div>  
    </div>  
    <script src="script.js"></script>  
</body>  
</html>