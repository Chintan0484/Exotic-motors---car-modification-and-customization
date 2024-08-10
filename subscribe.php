<?php
// session_start();
include 'db.php';
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email address.');</script>";
    } else {
        // Check if email already exists
        $sql = "SELECT email FROM newsletter WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('You\'ve already subscribed to our newsletter.');</script>";
        } else {
            // Insert email into database
            $sql = "INSERT INTO newsletter (email) VALUES ('$email')";
            if (mysqli_query($conn, $sql)) {
                // Send success email
                $mail = new PHPMailer;
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'exoticmotor2000@gmail.com';
                $mail->Password = 'hreksojscntyrnus';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                $mail->setFrom('exoticmotor2000@gmail.com', 'Exotic Motors');
                $mail->addAddress($email);
                $mail->isHTML(true);

                $mail->Subject = 'Subscription Confirmation';
                $mail->Body    = '<p>Thank you for subscribing to our newsletter!</p>';

                if($mail->send()) {
                    echo "<script>alert('You have subscribed to our newsletter successfully.');</script>";
                } else {
                    echo "<script>alert('Subscription successful, but failed to send confirmation email.');</script>";
                }
            } else {
                echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
            }
        }
    }
}
?>
