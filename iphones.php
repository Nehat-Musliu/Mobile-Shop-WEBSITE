
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
<?php
include 'Database.php';
include 'productt.php';

$db = new Database();
$products = $db->getProducts();
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPhones - Apple Store</title>
</head>
    <h1>iPhone Collection</h1>
    <div class="product-container">
        <?php foreach ($products as $product) { ?>
            <div class="product">
                <img src="images/<?= $product->getPhoto(); ?>" alt="<?= $product->getName(); ?>">
                <h2><?= $product->getName(); ?></h2>
                <p class="price">$<?= $product->getPrice(); ?></p>
                <button onclick="addToCart('<?= $product->getName(); ?>', <?= $product->getPrice(); ?>)">Add To Cart</button>
            </div>
        <?php } ?>
    </div>
    
    <div class="cart">
        <h2>Cart</h2>
        <div id="cart-items"></div>
        <strong>Total: $<span id="total-amount">0</span></strong>
    </div>

    <script>
        let cart = [];
        let total = 0;

        function addToCart(productName, price) {
            cart.push({ name: productName, price: price });
            total += price;
            updateCart();
        }

        function updateCart() {
            const cartItemsDiv = document.getElementById('cart-items');
            cartItemsDiv.innerHTML = '';
            cart.forEach((item, index) => {
                cartItemsDiv.innerHTML += `<div>${item.name} - $${item.price} <button onclick="removeFromCart(${index})">Delete</button></div>`;
            });
            document.getElementById('total-amount').innerText = total;
        }

        function removeFromCart(index) {
            total -= cart[index].price;
            cart.splice(index, 1);
            updateCart();
        }
    </script>

</body>
</html>