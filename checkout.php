<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    die("You need to login to checkout.");
}

$user_id = $_SESSION['user_id'];

// Fetch the user's email from the database
$sql = "SELECT email FROM users WHERE id = $user_id";
$result = mysqli_query($conn, $sql);
$user_data = mysqli_fetch_assoc($result);
$user_email = $user_data['email'];

// Fetch the user's cart items
$sql = "SELECT cart.product_id, cart.quantity, products.name, products.price
        FROM cart
        JOIN products ON cart.product_id = products.id
        WHERE cart.user_id = $user_id";
$result = mysqli_query($conn, $sql);
$cart_items = mysqli_fetch_all($result, MYSQLI_ASSOC);

if (empty($cart_items)) {
    die("Your cart is empty.");
}

// Insert each cart item into the purchase table
$purchase_date = date('Y-m-d H:i:s');
foreach ($cart_items as $item) {
    $product_id = $item['product_id'];
    $quantity = $item['quantity'];
    $insert_sql = "INSERT INTO purchase (user_id, product_id, quantity, purchase_date)
                   VALUES ($user_id, $product_id, $quantity, '$purchase_date')";
    mysqli_query($conn, $insert_sql);
}

// Clear the user's cart
$delete_sql = "DELETE FROM cart WHERE user_id = $user_id";
mysqli_query($conn, $delete_sql);

// Prepare the email
$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'exoticmotor2000@gmail.com';
    $mail->Password = 'hreksojscntyrnus';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('exoticmotor2000@gmail.com', 'Exotic Motors');
    $mail->addAddress($user_email);

    $mail->isHTML(true);
    $mail->Subject = 'Your Purchase from Exotic Motors';

    $bodyContent = '<h1>Thank you for your purchase!</h1>';
    $bodyContent .= '<p>Here are the details of your purchase:</p>';
    $bodyContent .= '<table border="1" cellspacing="0" cellpadding="10">
                     <tr><th>Product</th><th>Quantity</th><th>Price</th><th>Total</th></tr>';

    $total_price = 0;
    foreach ($cart_items as $item) {
        $product_total = $item['price'] * $item['quantity'];
        $total_price += $product_total;
        $bodyContent .= "<tr>
                            <td>{$item['name']}</td>
                            <td>{$item['quantity']}</td>
                            <td>\${$item['price']}</td>
                            <td>\${$product_total}</td>
                         </tr>";
    }
    $bodyContent .= "<tr><td colspan='3'>Total</td><td>\${$total_price}</td></tr>";
    $bodyContent .= '</table>';

    $mail->Body = $bodyContent;

    // Send the email
    if ($mail->send()) {
        $_SESSION['message'] = "Purchase successful! A confirmation email has been sent.";
    } else {
        $_SESSION['message'] = "Purchase successful, but email could not be sent.";
    }
} catch (Exception $e) {
    $_SESSION['message'] = "Purchase successful, but email could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

header('Location: cart.php');
exit();
?>
