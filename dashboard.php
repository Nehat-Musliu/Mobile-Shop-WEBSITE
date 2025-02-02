<?php
session_start();

// Check if user is logged in and is an admin
iif (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
header("Location: HomePage.php"); // Redirect if not admin
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <h1>Welcome, Admin!</h1>
    <nav>
        <a href="dashboard.php">Dashboard</a>
        <a href="manage_users.php">Manage Users</a>
        <a href="log out.php">Logout</a>
    </nav>
</header>

<main>
    <h2>Admin Dashboard</h2>
    <p>Here, you can manage users, view reports, and perform admin tasks.</p>

    <?php
    include_once '../repository/userRepository.php';

    $userRepository = new UserRepository();
    $users = $userRepository->getAllUsers();

    // Displaying the user data in a table
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Surname</th><th>Username</th><th>Password</th></tr>";

    foreach($users as $user){
        echo "<tr>
                <td>{$user['id']}</td>
                <td>{$user['Name']}</td>
                <td>{$user['Surname']}</td>
                <td>{$user['email']}</td>
                <td>{$user['Password']}</td>
              </tr>";
    }

    echo "</table>";
    ?>
</main>

</body>
</html>