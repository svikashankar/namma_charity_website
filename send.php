<?php
ini_set('display_errors','1');
// $username=$_POST['username'];
    // $email=$_POST['email'];
// $message=$_POST['message'];

// echo("<h2> welcome ". $username."</h2>");
// echo("<h2>". $email."</h2>");

 // $mailname = $_POST['username'];
 // $mailto = $_POST['email'];
 //    $mailMsg = $_POST['message'];
  //  echo("<h2> welcome ". $mailname."</h2>");
 $mailname = $_POST['username'];
    $mailto = $_POST['Email'];
    $mailMsg = $_POST['Message'];

   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "vikas.flyhigh93@gmail.com";
   $mail ->Password = "framgia93";
   $mail ->SetFrom("vikas.flyhigh93@gmail.com");
   $mail ->Name = $mailname;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       header("Location:thank.html");
   }

?>
