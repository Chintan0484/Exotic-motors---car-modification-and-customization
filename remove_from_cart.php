<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    die("You need to login to update your cart.");
}

$cart_id = $_POST['cart_id'];

$sql = "DELETE FROM cart WHERE id = $cart_id";
if (mysqli_query($conn, $sql)) {
    $_SESSION['message'] = "Item removed from cart!";
} else {
    $_SESSION['message'] = "Error: " . mysqli_error($conn);
}

header('Location: cart.php');
