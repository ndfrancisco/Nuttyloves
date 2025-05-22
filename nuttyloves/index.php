<?php
// Optional: include database connection if needed for dynamic products
// include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>NuttyLoves</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #ffffff;
      color: #333;
    }
    header {
      background-color: #2e7d32;
      padding: 20px;
      color: #fff;
      text-align: center;
    }
    nav {
      background-color: #c62828;
      display: flex;
      justify-content: center;
      padding: 10px;
    }
    nav a {
      color: #fff;
      margin: 0 15px;
      text-decoration: none;
      font-weight: bold;
    }
    nav a:hover {
      text-decoration: underline;
    }
    .container {
      padding: 30px;
      max-width: 1000px;
      margin: auto;
    }
    .product {
      border: 1px solid #eee;
      padding: 15px;
      margin: 15px 0;
      border-radius: 10px;
      background: #f5f5f5;
      display: flex;
      align-items: center;
    }
    .product img {
      width: 150px;
      height: 150px;
      object-fit: cover;
      border-radius: 10px;
      margin-right: 20px;
    }
    .product h3 {
      margin: 0;
      color: #2e7d32;
    }
    .product p {
      margin: 5px 0;
    }
    .btn {
      background-color: #c62828;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 10px;
      text-decoration: none;
      display: inline-block;
    }
    .btn:hover {
      background-color: #b71c1c;
    }
    footer {
      text-align: center;
      padding: 20px;
      background-color: #2e7d32;
      color: white;
      margin-top: 40px;
    }
  </style>
</head>
<body>

<header>
  <h1>NuttyLoves</h1>
  <p>Natural Goodness in Every Bite</p>
</header>

<nav>
  <a href="index.php">Home</a>
  <a href="products.php">Shop</a>
  <a href="cart.php">Cart</a>
  <a href="login.php">Login</a>
</nav>

<div>
 <div class="product">
  <img src="images/nuttyloves1.jpg" alt="8-in-1 Mix">
    <div>
      <h3>8-in-1 Trail Mix</h3>
      <p>1kg pack featuring eight wholesome ingredients in one bag.</p>
      <p><strong>₱379.00</strong></p>
      <a href="add_to_cart.php?product_id=2" class="btn">Add to Cart</a>
   </div>
  </div>
  
</div>
  <div class="product">
    <img src="images/nuttyloves2.jpg" alt="Trail Mix">
    <div>
      <h3>Trail Mix</h3>
      <p>1kg pack of nuts, dried fruits, and seeds — healthy and delicious.</p>
      <p><strong>₱359.00</strong></p>
      <a href="add_to_cart.php?product_id=1" class="btn">Add to Cart</a>
    </div>
  </div>

</div>
  <div class="product">
    <img src="images/nuttyloves3.jpg" alt="Trail Mix">
    <div>
      <h3>Premium Trail Mix</h3>
      <p>1kg pack of nuts, dried fruits, and seeds — healthy and delicious.</p>
      <p><strong>₱509.00</strong></p>
      <a href="add_to_cart.php?product_id=1" class="btn">Add to Cart</a>
    </div>
  </div>
  
  </div>
  <div class="product">
    <img src="images/nuttyloves4.jpg" alt="Trail Mix">
    <div>
      <h3>Roasted Cashews</h3>
      <p>1kg pack of nuts, dried fruits, and seeds — healthy and delicious.</p>
      <p><strong>₱499.00</strong></p>
      <a href="add_to_cart.php?product_id=1" class="btn">Add to Cart</a>
    </div>
  </div>

<footer>
  &copy; <?= date('Y') ?> NuttyLoves. All rights reserved.
</footer>

</body>
</html>
