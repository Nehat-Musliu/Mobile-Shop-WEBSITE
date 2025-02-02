<?php

include 'Database.php'; 


$db = new Database();


$query = "SELECT * FROM products";  
$results = $db->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPhones - Apple Store</title>
    <style>
           * {  
            margin: 0;  
            padding: 0;  
            box-sizing: border-box;  
        }  
        body {  
            font-family: Arial, sans-serif;  
            background-color: #f4f4f4;  
            text-align: center;  
        }  
        .header {  
            padding: 15px 20px;  
        }  
        .back-button {  
            position: absolute;  
            top: 20px;  
            left: 20px;  
            font-size: 16px;  
            color: #007bff;  
            text-decoration: none;  
            background: none;  
        }  
        .back-button:hover {  
            text-decoration: underline;  
            color: #0056b3;  
        }  
        .header h1 {  
            font-size: 24px;  
            margin-top: 10px;  
        }  
        .header p {  
            font-size: 14px;  
        }  
        .product-container {  
            display: flex;  
            flex-wrap: wrap;  
            justify-content: center;  
            padding: 20px;  
        }  
        .product {  
            background: white;  
            border-radius: 8px;  
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);  
            margin: 10px;  
            padding: 15px;  
            width: 200px;  
            transition: transform 0.3s;  
        }  
        .product img {  
            max-width: 100%;  
            height: auto;  
            border-radius: 5px;  
        }  
        .product h2 {  
            font-size: 18px;  
            margin: 10px 0;  
        }  
        .price {  
            font-size: 16px;  
            color: #333;  
        }  
        .product:hover {  
            transform: scale(1.05);  
        }  
        .cart {  
            padding: 20px;  
            background: #fff;  
            margin: 20px;  
            border-radius: 8px;  
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);  
        }  
        .cart-item {  
            display: flex;  
            justify-content: space-between;  
            margin: 5px 0;  
        }  
        .cart-item button {  
            background-color: #ff4a4a;  
            color: white;  
            border: none;  
            cursor: pointer;  
            border-radius: 5px;  
            padding: 5px;  
        }  
        .payment {  
            padding: 20px;  
            background: #fff;  
            margin: 20px;  
            border-radius: 8px;  
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);  
            display: none;  
        }  
        .payment form input {  
            margin-bottom: 10px;  
            padding: 8px;  
            width: 100%;  
        }  
        .payment button {  
            background-color: #28a745;  
            color: white;  
            border: none;  
            cursor: pointer;  
            padding: 10px;  
            border-radius: 5px;  
        }  
        #message {  
            margin-top: 20px;  
            color: green;  
            font-weight: bold;  
        }  
    </style>
</head>
<body>
    <div class="header">
        <a href="Product.html" class="back-button">← Back</a>
        <h1>iPhone Collection</h1>
        <p>Explore our range of iPhones from iPhone 11 to iPhone 16</p>
        <P>Payment at the Bottom of the Page</P>
    </div>

   
    <div class="product-container">
    <?php
include_once 'Database.php'; // Përfshi klasën e bazës

// Krijo një instancë të objektit Database
$db = new Database();

// Merr të gjitha produktet nga baza e të dhënave
$products = $db->getProducts(); // Funksioni getProducts merr të gjitha produktet

// Shfaq produktet
foreach ($products as $product) {
    $productName = $product['name'];  
    $productPrice = $product['price'];  
    $productImage = $product['photo'];

    // Krijo HTML me variabla PHP
    $productHTML = '
    <div class="product" data-price="' . $productPrice . '">
        <img src="images/' . $productImage . '" alt="' . $productName . '">
        <h2>' . $productName . '</h2>
        <p class="price">$' . $productPrice . '</p>
        <button onclick="addToCart(\'' . $productName . '\', ' . $productPrice . ')">Add To Cart</button>
    </div>
    ';

    // Shfaq produktin
    echo $productHTML;
}
?>
    </div>

    <div class="cart">
        <h2>Cart</h2>
        <div id="cart-items"></div>
        <strong>Total: $<span id="total-amount">0</span></strong>
    </div>

    <div class="payment" id="payment-section">
        <h2>Payment Information</h2>
        <form onsubmit="return processPayment(event)">
            <input type="text" placeholder="Name" required>
            <input type="text" placeholder="Surname" required>
            <input type="text" placeholder="Address" required>
            <input type="text" placeholder="Phone Number" required>
            <input type="text" placeholder="Bank Account Number" required>
            <button type="submit">Continue with Payment</button>
        </form>
    </div>

    <div id="message"></div>

    <script>
        let cart = [];  
        let total = 0;  

        function addToCart(productName, price) {  
            cart.push({name: productName, price: price});  
            total += price;  
            updateCart();  
        }  

        function updateCart() {  
            const cartItemsDiv = document.getElementById('cart-items');  
            cartItemsDiv.innerHTML = '';  
            cart.forEach((item, index) => {  
                cartItemsDiv.innerHTML += `  
                    <div class="cart-item">  
                        ${item.name} - $${item.price}  
                        <button onclick="removeFromCart(${index})">Delete</button>  
                    </div>  
                `;  
            });  
            document.getElementById('total-amount').innerText = total;  
            document.getElementById('payment-section').style.display = cart.length > 0 ? 'block' : 'none';  
        }  

        function removeFromCart(index) {  
            total -= cart[index].price;  
            cart.splice(index, 1);  
            updateCart();  
        }  

        function processPayment(event) {  
            event.preventDefault();  
            document.getElementById('message').innerText = 'Thank you,your order will reach you within two days.';  
            cart = [];  
            total = 0;  
            updateCart();  
            document.getElementById('payment-section').style.display = 'none';  
            return false;  
        }
    </script>

</body>
</html>