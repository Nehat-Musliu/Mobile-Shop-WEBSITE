<?php
// Krijo lidhjen me bazën e të dhënave
$host = "localhost"; // ose adresën IP të serverit të MySQL
$username = "root"; // emri i përdoruesit për MySQL
$password = ""; // fjalëkalimi për MySQL
$dbname = "mobile_shop"; // emri i bazës së të dhënave

// Krijo lidhjen
$conn = new mysqli($host, $username, $password, $dbname);

// Kontrollo nëse lidhja ka pasur probleme
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Merrni të dhënat nga tabela e produkteve
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

// Kontrollo nëse ka rezultate
if ($result->num_rows > 0) {
    // Ndërtoni HTML për produktet
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="product.css">
        <title>Apple Products</title>
    </head>
    <body>
        <header>
            <h1>Apple Products</h1>
        </header>
        <nav class="navbar">
            <ul class="menu">
                <li><a href="HomePage.php">Home</a></li>
                <li><a href="Product.php">Product</a></li>
                <li><a href="About Us.html">About Us</a></li>
                <li><a href="Contact Us.html">Contact Us</a></li>
                <li><a href="Support.html">Support</a></li>
                <li><a href="log out.html">Log Out</a></li>
            </ul>
        </nav>
        <main>
            <div class="product-container">';

    // Shfaq produktet nga vijnë nga baza e të dhënave
    while($row = $result->fetch_assoc()) {
        echo '<div class="product" onclick="location.href=\'product_page.php?id=' . $row['id'] . '\'">
                <img src="' . $row['image_url'] . '" alt="' . $row['name'] . '" />
                <h2>' . $row['name'] . '</h2>
                <p>' . $row['description'] . '</p>
            </div>';
    }

    echo '</div>
        </main>
        <footer>
            <p>&copy;2025 Loxo. All rights reserved.</p>
        </footer>
    </body>
    </html>';

} else {
    echo "No products found.";
}

// Mbyll lidhjen me bazën e të dhënave
$conn->close();
?>
