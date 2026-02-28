<?php
session_start();
include "../config/db.php";

if(!isset($_SESSION['admin'])){
  header("Location: ../login.php");
}

$result = $conn->query("SELECT * FROM orders ORDER BY order_date DESC");
?>

<h2>Admin Dashboard</h2>
<a href="logout.php">Logout</a>

<table border="1" cellpadding="10">
<tr>
<th>Name</th>
<th>Product</th>
<th>Qty</th>
<th>Total</th>
<th>Status</th>
</tr>

<?php while($row = $result->fetch_assoc()): ?>
<tr>
<td><?= $row['customer_name'] ?></td>
<td><?= $row['product_name'] ?></td>
<td><?= $row['quantity'] ?></td>
<td>₱<?= $row['total'] ?></td>
<td><?= $row['status'] ?></td>
</tr>
<?php endwhile; ?>

</table>