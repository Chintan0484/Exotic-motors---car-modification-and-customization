<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $car_make = $_POST['car_make'];
    $car_model = $_POST['car_model'];
    $year_of_manufacture = $_POST['year_of_manufacture'];
    $license_plate_number = $_POST['license_plate_number'];
    $desired_car_color = $_POST['desired_car_color'];
    $skin_wrap_options = $_POST['skin_wrap_options'];
    $additional_modifications = implode(', ', $_POST['additional_modifications']);
    $preferred_service_date = $_POST['preferred_service_date'];
    $preferred_service_time = $_POST['preferred_service_time'];
    $additional_notes = $_POST['additional_notes'];

    // Handle file uploads
    $current_car_photo = $_FILES['current_car_photo']['name'];
    $desired_look_photo = $_FILES['desired_look_photo']['name'];

    $target_dir = "uploads/";
    $current_car_photo_target = $target_dir . basename($current_car_photo);
    $desired_look_photo_target = $target_dir . basename($desired_look_photo);

    move_uploaded_file($_FILES['current_car_photo']['tmp_name'], $current_car_photo_target);
    move_uploaded_file($_FILES['desired_look_photo']['tmp_name'], $desired_look_photo_target);

    // Insert data into database
    $sql = "INSERT INTO bookings (full_name, email, phone_number, car_make, car_model, year_of_manufacture, license_plate_number, desired_car_color, skin_wrap_options, additional_modifications, current_car_photo, desired_look_photo, preferred_service_date, preferred_service_time, additional_notes) VALUES ('$full_name', '$email', '$phone_number', '$car_make', '$car_model', '$year_of_manufacture', '$license_plate_number', '$desired_car_color', '$skin_wrap_options', '$additional_modifications', '$current_car_photo', '$desired_look_photo', '$preferred_service_date', '$preferred_service_time', '$additional_notes')";

    if ($conn->query($sql) === TRUE) {
        // Send confirmation email
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
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = 'Booking Confirmation';
            $mail->Body    = "
                <h1>Booking Confirmation</h1>
                <p>Dear $full_name,</p>
                <p>Thank you for booking your car modification and customization with us. Here are your booking details:</p>
                <ul>
                    <li><strong>Car Make:</strong> $car_make</li>
                    <li><strong>Car Model:</strong> $car_model</li>
                    <li><strong>Year of Manufacture:</strong> $year_of_manufacture</li>
                    <li><strong>License Plate Number:</strong> $license_plate_number</li>
                    <li><strong>Desired Car Color:</strong> $desired_car_color</li>
                    <li><strong>Skin Wrap Option:</strong> $skin_wrap_options</li>
                    <li><strong>Additional Modifications:</strong> $additional_modifications</li>
                    <li><strong>Preferred Service Date:</strong> $preferred_service_date</li>
                    <li><strong>Preferred Service Time:</strong> $preferred_service_time</li>
                    <li><strong>Additional Notes:</strong> $additional_notes</li>
                </ul>
                <p>We look forward to serving you.</p>
                <p>Best regards,<br>Exotic Motors</p>
            ";

            $mail->send();
            $_SESSION['message'] = 'Booking successful! A confirmation email has been sent to your email address.';
        } catch (Exception $e) {
            $_SESSION['message'] = "Booking successful! However, the confirmation email could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        $_SESSION['message'] = "Error: " . $sql . "<br>" . $conn->error;
    }

    header('Location: thank_you.php');
}
?>
