<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    die("You need to login to add products to your cart.");
}

$user_id = $_SESSION['user_id'];
$product_id = $_POST['product_id'];
$quantity = $_POST['quantity'];

// Check if the product already exists in the user's cart
$check_sql = "SELECT * FROM cart WHERE user_id = $user_id AND product_id = $product_id";
$check_result = mysqli_query($conn, $check_sql);

if (mysqli_num_rows($check_result) > 0) {
    // Product exists, update the quantity
    $update_sql = "UPDATE cart SET quantity = quantity + $quantity WHERE user_id = $user_id AND product_id = $product_id";
    if (mysqli_query($conn, $update_sql)) {
        $_SESSION['message'] = "Product quantity updated in the cart!";
    } else {
        $_SESSION['message'] = "Error: " . mysqli_error($conn);
    }
} else {
    // Product does not exist, insert a new record
    $insert_sql = "INSERT INTO cart (user_id, product_id, quantity) VALUES ($user_id, $product_id, $quantity)";
    if (mysqli_query($conn, $insert_sql)) {
        $_SESSION['message'] = "Product added to cart!";
    } else {
        $_SESSION['message'] = "Error: " . mysqli_error($conn);
    }
}

header('Location: cart.php');
exit();
?>
