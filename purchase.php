<?php
session_start();
include 'db_connect.php';

$stmt = $conn->prepare("SELECT * FROM Products WHERE Category = ?");
$category = 'apparel';
$stmt->bind_param('s', $category);
$stmt->execute();
$products = $stmt->get_result();
?>

<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apparel</title>
</head>
<body>
    <h1>Apparel</h1>
    <div>
        <?php while ($product = $products->fetch_assoc()): ?>
            <div>
                <img src="images/<?php echo $product['Image']; ?>" alt="<?php echo $product['Name']; ?>">
                <h3><?php echo $product['Name']; ?></h3>
                <p>$<?php echo number_format($product['Price'], 2); ?></p>
                <form action="cart.php" method="POST">
                    <input type="hidden" name="product_id" value="<?php echo $product['ProductID']; ?>">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit">Add to Cart</button>
                </form>
