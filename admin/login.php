<?php
include "config/db.php";

$name = $_POST['customer_name'];
$qtys = $_POST['qty'];

$prices = [
  "Classic Burnt Basque"=>239,
  "Blueberry Burnt Basque"=>239,
  "Pistachio Burnt Basque"=>239,
  "Nutella Burnt Basque"=>239,
  "Biscoff Burnt Basque"=>239,
  "Cream Cheese Garlic Bun"=>80,
  "Banana Bread"=>179,
  "Banana Pudding"=>119,
  "Biscoff Banana Pudding"=>159
];

foreach($qtys as $product=>$quantity){
  if($quantity > 0){
    $price = $prices[$product];
    $total = $price * $quantity;

    $stmt = $conn->prepare("INSERT INTO orders (customer_name, product_name, quantity, price, total) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssidd", $name, $product, $quantity, $price, $total);
    $stmt->execute();
  }
}

echo "<script>alert('Order Submitted!'); window.location='products.php';</script>";
?>