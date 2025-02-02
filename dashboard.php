<?php
session_start();
include_once 'Database.php';
include_once 'userRepository.php';

// Sigurohuni që po krijoni një lidhje të databazës
$db = new Database();
$connection = $db->getConnection();  // Merrni lidhjen e databazës

// Kontrolloni nëse përdoruesi është loguar si admin
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: Homepage.php"); // Rilidhni në homepage nëse nuk është admin
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
        <a href="logout.php">Logout</a>
    </nav>
</header>

<main>
    <h2>Admin Dashboard</h2>
    

    <?php
    // Krijoni një instancë të UserRepository dhe kaloni lidhjen e databazës
    $userRepository = new UserRepository($connection); // Kaloni lidhjen në konstruktor
    $users = $userRepository->getAllUsers();

    // Kontrolloni nëse keni përdorues dhe shfaqni tabelën
    if ($users) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th><th>Surname</th><th>Email</th><th>Password</th></tr>";

        foreach ($users as $user) {
            echo "<tr>
                    <td>{$user['id']}</td>
                    <td>{$user['name']}</td> <!-- Emri në databazë -->
                    <td>{$user['surname']}</td> <!-- Mbiemri në databazë -->
                    <td>{$user['email']}</td>  <!-- Emaili në databazë -->
                   <td>{$user['PASSWORD']}</td>  <!-- Përdorni kolonën 'password' nëse kjo është emri i saktë -->
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "No users found.";
    }
    ?>
</main>

</body>
</html>
