<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Maison Itoko | Products</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <header class="header">
    <div class="logo">
      <img src="image/logo.png" alt="Maison Itoko Logo">
    </div>

    <nav class="nav">
      <a href="index.php">Home</a>
      <a href="products.php" class="active">Products</a>
      <a href="contact.php">Contact Us</a>
    </nav>

    <div class="top-line"></div>

  </header>

  <section class="products">
<form method="POST" action="submit_order.php">

<input type="text" name="customer_name" placeholder="Your Name" required class="name-input">

<div class="product-row">

<?php
$products = [
  ["Classic Burnt Basque",239,"img_product/classic.jpg","Rich and tangy cheesecake with a burnt top, a creamy center, and a buttery crust."],
  ["Blueberry Burnt Basque",239,"img_product/blueberry.jpg","Rich and tangy cheesecake perfectly paired with tart blueberry compote."],
  ["Pistachio Burnt Basque",239,"img_product/pistachio.jpg","Rich and creamy with a gentle tang, complemented by mellow pistachio cream."]
];

foreach($products as $p){
  echo "
  <div class='card'>
      <img src='{$p[2]}' alt='{$p[0]}'>
      <h3>{$p[0]}</h3>
      <p class='desc'>{$p[3]}</p>

      <div class='bottom'>
          <span class='price'>₱{$p[1]}</span>

          <div class='qty'>
              <button type='button' onclick='decrease(this)'>-</button>
              <input type='number' name='qty[{$p[0]}]' value='1' min='1'>
              <button type='button' onclick='increase(this)'>+</button>
          </div>

          <button type='submit' class='add-btn'>Add</button>
      </div>
  </div>
  ";
}
?>
</div>

<button type="submit" class="submit-btn">Submit Order</button>

</form>
</section>

  <script src="script.js"></script>
</body>
</html>
