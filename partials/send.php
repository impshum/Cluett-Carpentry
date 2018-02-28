<?php

error_reporting(E_ALL);
error_reporting(E_STRICT);

date_default_timezone_set('Europe/London');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // …

  require_once('smtp.php');
  //include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

  $name = stripslashes(trim($_POST['name']));
  $email = stripslashes(trim($_POST['email']));
  $phone = stripslashes(trim($_POST['phone']));
  $message = stripslashes(trim($_POST['message']));

  $mail             = new PHPMailer();

  $body             = "From: $name<br>Phone: $phone<br><br>$message";
  $body             = eregi_replace("[\]",'',$body);

  $mail->IsSMTP(); // telling the class to use SMTP
  $mail->Host       = "mail3.gridhost.co.uk"; // SMTP server
  $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                             // 1 = errors and messages
                                             // 2 = messages only
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  $mail->Host       = "mail3.gridhost.co.uk"; // sets the SMTP server
  $mail->Port       = 25;                    // set the SMTP port for the GMAIL server
  $mail->Username   = "impshum@impshum.co.uk"; // SMTP account username
  $mail->Password   = "2nbd-2ksk-help";        // SMTP account password

  $mail->SetFrom($email);

  $mail->AddReplyTo($email);

  $mail->Subject    = "Website Contact Form";

  //$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

  $mail->MsgHTML($body);


  $address = "impshum@impshum.co.uk";
  $mail->AddAddress($address);

  //$mail->AddAttachment("images/phpmailer.gif");      // attachment
  //$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

  if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
  } else {
    echo "Message sent!";
  }
}
?>
