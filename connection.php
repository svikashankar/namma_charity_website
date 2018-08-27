<?php
 ini_set('display_errors','1');
define('DB_HOST', 'localhost:8081');
define('DB_NAME', 'id4378182_antishell');
define('DB_USER','root');
define('DB_PASSWORD','vikas93');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
 
 


    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Message = $_POST['Message'];
    //$password =  $_POST['pass'];
    $query = "INSERT INTO charity (Name,Email,Message) VALUES ('$Name','$Email','$Message')";
    $data = mysql_query ($query)or die(mysql_error());
    if($data)
    {
        $mailname = $_POST['Name'];
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
   $mail ->name = $mailname;
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
    //header("Location:thank.html");
    }

?>