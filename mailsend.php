<?php
// Connect to the MySQL database
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "mydb";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Retrieve all the Gmail addresses from the database
$sql = "SELECT email FROM users WHERE email LIKE '%@gmail.com'";
$result = mysqli_query($conn, $sql);

// Set up the PHPMailer instance


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


// require_once 'vendor/autoload.php';
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = '2512aksingh@gmail.com';
$mail->Password = 'kqwsapqmskwrqpwr';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Set the message content and recipients
$mail->setFrom('2512aksingh@gmail.com', 'Your Name');
$mail->Subject = 'Emergency Message';
$mail->Body = 'This is an emergency message. Please help me.';
while ($row = mysqli_fetch_assoc($result)) {
    $mail->addAddress($row['email']);
}

// Send the message
if (!$mail->send()) {
    echo 'Message could not be sent. ';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent to all recipients';
}
?>
