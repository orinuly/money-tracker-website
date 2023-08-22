<?php
use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['name']) && isset($_POST['email'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  require_once "PHPMailer/PHPMailer.php";
  require_once "PHPMailer/SMTP.php";
  require_once "PHPMailer/Exception.php";

  $mail = new PHPMailer();

  $mail->isSMTP();
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPAuth = true;
  $mail->Username = "happysaddramas@gmail.com";
  $mail->Password = 'Sabaka2002';
  $mail->Port = 465;
  $mail->SMTPSecure = "ssl";

  $mail->isHTML(true);
  $mail->setFrom($email, $name);
  $mail->addAddress("amanovnurlan02@gmail.com");
  $mail->Body = $message;

  if($mail->send()) {
    $response = "Email is Sent";
  } else {
    $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
  }
  exit(json_encode(array("response" => $response)));
}

 ?>
