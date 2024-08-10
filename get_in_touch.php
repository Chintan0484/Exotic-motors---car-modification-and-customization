<?php
// Include PHPMailer
include 'db.php';
require 'vendor/autoload.php';
    
use PHPMailer\PHPMailer\PHPMailer;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // SMTP Configuration
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'exoticmotor2000@gmail.com';
        $mail->Password = 'hreksojscntyrnus';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Form values
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

            // Email to handler
            $mail->setFrom('exoticmotor2000@gmail.com', 'Exotic Motors');
            $mail->addAddress('mrhashtag292@gmail.com');
            $mail->isHTML(true);
            $mail->Subject = 'New Get in Touch Form Submission';
            $mail->Body    = "<p><strong>Name:</strong> $name</p>
                            <p><strong>Email:</strong> $email</p>
                            <p><strong>Phone:</strong> $phone</p>
                            <p><strong>Message:</strong> $message</p>";

        $mail->send();

        // Confirmation email to user
        $mail->clearAddresses();
        $mail->addAddress($email);
        $mail->Subject = 'Thank You for Getting in Touch';
        $mail->Body    = '<p>Thank you for filling out the form. We will get in touch with you soon.</p>';

        $mail->send();

        echo "<script>alert('Your message has been sent successfully.');</script>";
    } catch (Exception $e) {
        echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
    }
}
?>
