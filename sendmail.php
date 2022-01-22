<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$alert = '';

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $age = $_POST['age'];
   $gender = $_POST['gender'];
   $date = $_POST['date'];
   $time = $_POST['time'];
   $location = $_POST['location'];
   $message = $_POST['message'];
   $mobile = $_POST['mobile'];
   $email = $_POST['email'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.hostinger.in';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'booking@psychowaves.org';                 // SMTP username
$mail->Password = 'Psychowaves9988';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('booking@psychowaves.org', 'Mailer');
$mail->addAddress('booking@psychowaves.org', 'Joe User');     // Add a recipient
$mail->addAddress('booking@psychowaves.org');               // Name is optional
$mail->addReplyTo('booking@psychowaves.org', 'Information');

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Booking Appointment';
$mail->Body    = ' Name :' .$name .'<br>Age :' .$age.'<br>Gender :' .$gender.'<br>Date :' .$date.'<br>Time :' .$time.'<br>Location :' .$location.'<br>Message :' .$message.'<br>Mobile :' .$mobile.'<br>Email :' .$email ;


if(!$mail->send()) {
   $alert =  'Appointment not booked.'.' Error: ' . $mail->ErrorInfo;
   
} else {
    $alert = 'Appointment Booked successfully';
}

}