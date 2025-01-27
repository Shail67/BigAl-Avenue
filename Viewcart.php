<?php
session_start();
include 'db_connect.php';

if (!isset($_SESSION['user_id'])) {
header("Location: LoginPage.php");
exit();
}

$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT c.CartID, p.Name, p.Price, c.Quantity
FROM Cart c
JOIN Products p ON c.ProductID = p.ProductID
WHERE c.CustomerID = ?");
$stmt->bind_param('i', $user_id);
$stmt->execute();
$cart_items = $stmt->get_result();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['order'])) {
$stmt = $conn->prepare("DELETE FROM Cart WHERE CustomerID = ?");
$stmt->bind_param('i', $user_id);
$stmt->execute();
header("Location: confirmation.php");
exit();
}
?>
<html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Your Cart</title>
</head>
<body>
<h1>Your Shopping Cart</h1>
<?php if ($cart_items->num_rows > 0): ?>
<form action="viewcart.php" method="POST">
<table>
<tr>
<th>Product</th>
<th>Price</th>
<th>Quantity</th>
<th>Subtotal</th>
</tr>
<?php
$total = 0;
while ($item = $cart_items->fetch_assoc()): 
$subtotal = $item['Price'] * $item['Quantity'];
$total += $subtotal;
?>
<tr>
<td><?php echo htmlspecialchars($item['Name']); ?></td>
<td>$<?php echo number_format($item['Price'], 2); ?></td>
<td><?php echo $item['Quantity']; ?></td>
<td>$<?php echo number_format($subtotal, 2); ?></td>
</tr>
<?php endwhile; ?>
</table>
<p>Total: $<?php echo number_format($total, 2); ?></p>
<button type="submit" name="order">Place Order</button>
</form>
<?php else: ?>
<p>Your cart is empty. <a href="homepage.php">Continue Shopping</a></p>
<?php endif; ?>
</body>
</html>
