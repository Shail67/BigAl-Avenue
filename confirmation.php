<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: LoginPage.php");
    exit();
}
?>

<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
</head>
<body>
    <h1>Thank you for your order!</h1>
    <p>Your order has been successfully placed.</p>
    <a href="homepage.php">Continue Shopping</a>
</body>
</html>