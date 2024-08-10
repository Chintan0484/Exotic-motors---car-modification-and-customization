<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    die("You need to login to update your cart.");
}

$cart_id = $_POST['cart_id'];
$quantity = $_POST['quantity'];

$sql = "UPDATE cart SET quantity = $quantity WHERE id = $cart_id";
if (mysqli_query($conn, $sql)) {
    $_SESSION['message'] = "Cart updated successfully!";
} else {
    $_SESSION['message'] = "Error: " . mysqli_error($conn);
}

header('Location: cart.php');
