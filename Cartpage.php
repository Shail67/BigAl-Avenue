<?php
session_start();
include 'db_connect.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: LoginPage.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT Cart.CartID, Products.Name, Products.Price, Cart.Quantity
                        FROM Cart
                        JOIN Products ON Cart.ProductID = Products.ProductID
                        WHERE Cart.CustomerID = ?");
$stmt->bind_param('i', $user_id);
$stmt->execute();
$cart_items = $stmt->get_result();
?>

<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <style>
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Your Cart</h1>

    <?php if ($cart_items->num_rows > 0): ?>
        <form action="update_cart.php" method="POST">
            <table>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                    <th>Remove</th>
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
                        <td>
                            <input type="number" name="quantities[<?php echo $item['CartID']; ?>]" value="<?php echo $item['Quantity']; ?>" min="1">
                        </td>
                        <td>$<?php echo number_format($subtotal, 2); ?></td>
                        <td><a href="remove_from_cart.php?cart_id=<?php echo $item['CartID']; ?>">Remove</a></td>
                    </tr>
                <?php endwhile; ?>
            </table>
            <p>Total: $<?php echo number_format($total, 2); ?></p>
            <button type="submit">Update Cart</button>
            <button type="submit" formaction="checkout.php">Checkout</button>
        </form>
    <?php else: ?>
        <p>Your cart is empty. <a href="products.php">Start Shopping</a></p>
    <?php endif; ?>
</body>
</html>
