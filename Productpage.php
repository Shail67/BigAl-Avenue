<?php
session_start();
include 'db_connect.php';

$result = $conn->query("SELECT * FROM Products");
?>

<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <style>
        .product {
            border: 1px solid #ddd;
            padding: 10px;
            margin: 10px;
            display: inline-block;
            width: 200px;
        }
        .product img {
            max-width: 100%;
        }
        .product button {
            margin-top: 10px;
            padding: 5px 10px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
        .product button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Products</h1>
    <div>
        <?php while ($product = $result->fetch_assoc()): ?>
            <div class="product">
                <img src="path_to_image/<?php echo $product['Image']; ?>" alt="<?php echo $product['Name']; ?>">
                <h3><?php echo $product['Name']; ?></h3>
                <p>$<?php echo number_format($product['Price'], 2); ?></p>
                <form action="cart.php" method="POST">
                    <input type="hidden" name="product_id" value="<?php echo $product['ProductID']; ?>">
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit">Add to Cart</button>
                </form>
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>
