<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Load composer's autoloader
require 'phpmailer.php';
require 'smtp.php';

$name = stripslashes(trim($_POST['name']));
$email = stripslashes(trim($_POST['email']));
$phone = stripslashes(trim($_POST['phone']));
$message = stripslashes(trim($_POST['message']));

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 1;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'XXXXXXX';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'XXXXXXX';                 // SMTP username
    $mail->Password = 'XXXXXXX';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->addAddress('impshum@impshum.co.uk', 'Cluett Carpentry');
    $mail->setFrom($email, $name);

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Contact Form';
    $mail->Body = "From: $name<br>Phone: $phone<br><br>$message";
    $mail->AltBody    = "From: $name%0D%0APhone: $phone%0D%0A$message";


    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>
