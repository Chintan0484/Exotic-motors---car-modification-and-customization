<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Include PHPMailer library

// Start session
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $car_make = $_POST['car_make'];
    $car_model = $_POST['car_model'];
    $car_year = $_POST['car_year'];
    $service_type = $_POST['service_type'];
    $preferred_date = $_POST['preferred_date'];
    $additional_details = $_POST['additional_details'];

    // You can add validation and sanitization here

    // Send confirmation email
    sendConfirmationEmail($car_make, $car_model, $car_year, $service_type, $preferred_date, $additional_details);
}

// Function to send confirmation email
function sendConfirmationEmail($car_make, $car_model, $car_year, $service_type, $preferred_date, $additional_details) {
    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'exoticmotor2000@gmail.com'; // Your Gmail email address
        $mail->Password = 'hreksojscntyrnus'; // Your Gmail password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Sender and recipient
        $mail->setFrom('exoticmotor2000@gmail.com', 'Exotic Motors'); // Sender email and name
        $mail->addAddress($_POST['email']); // Recipient email (user's email)
        
        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'Car Service Booking Confirmation';
        $mail->Body = "
            <p>Dear ".$_POST['name'].",</p>
            <p>Thank you for booking a car service with us.</p>
            <p>Your booking details:</p>
            <ul>
                <li>Car Make: $car_make</li>
                <li>Car Model: $car_model</li>
                <li>Year: $car_year</li>
                <li>Service Type: $service_type</li>
                <li>Preferred Date: $preferred_date</li>
                <li>Additional Details: $additional_details</li>
            </ul>
            <p>We will get back to you shortly to confirm your appointment.</p>
            <p>Best regards,<br>Exotic Motors</p>
        ";

        // Send email
        $mail->send();

        // Redirect to a thank you page or display a success message
        header('Location: index.php');
        exit;
    } catch (Exception $e) {
        // Handle errors
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
