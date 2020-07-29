<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require_once './vendor/autoload.php';
  function enroll($conn){
    // var_dump($_POST);
      $error = '';
      $fullname = trim(mysqli_real_escape_string($conn, $_POST['fullname']));
      $email = trim(mysqli_real_escape_string($conn, $_POST['email']));
      $track = trim(mysqli_real_escape_string($conn, $_POST['track']));
      $course = trim(mysqli_real_escape_string($conn, $_POST['course']));
      $level = trim(mysqli_real_escape_string($conn, $_POST['level']));

      if(empty($fullname) || empty($email) || empty($track) || empty($course) || empty($level)){
        $error = 'All fields are required';
        echo 'Echo';
        return $error;
      }
      $query = "INSERT INTO user(fullname, email, course, track, level) VALUES('$fullname', '$email', '$course','$track', '$level')";
      $result = query($conn, $query);
      if($result){
        $success = send_mail($email,$fullname);
          echo '<script>alert("'.$success['message'] .'")</script>';
      }
  }
  
  function query($conn, $query){
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Could not execute query" . mysqli_error($conn));
    }
    return $result;
  }

  function send_mail($userEmail, $name) {
    
//PHPMailer Object
$mail = new PHPMailer(true); //Argument true in constructor enables exceptions

$mail->isSMTP();            
//Set SMTP host name 
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = GMAIL;                 
$mail->Password = GMAIL_PASSWORD;

$mail->Port = 587; 

//From email address and name
$mail->From = GMAIL;
$mail->FromName = NAME;

//To address and name
$mail->addAddress($userEmail, $name);

//Address to which recipient will reply
$mail->addReplyTo($mail->From, "Reply");


$mail->Subject = "Enrolled Succesfully";
$mail->Body = "<h1>Thank you for enrolling with us</h1>
<h4>We promise to give you the best learning experience</h4>
<h5>You can put your html and css here</h5>";
//Send HTML or Plain Text email
$mail->isHTML(true);
$mail->AltBody = "This is the plain text version of the email content";

try {
    $mail->send();
    return [ 'message' => 'Sent Succesfully', 'type' => "Error"];
} catch (Exception $e) {
    return [ 'message' => 'Mail Error: '.$mail->ErrorInfo, 'type' => "Error"];
}
}


