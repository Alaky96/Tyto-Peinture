<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  require 'PHPMailer/src/Exception.php';
  require 'PHPMailer/src/PHPMailer.php';
  require 'PHPMailer/src/SMTP.php';

  $nom = "Brunet";
  $prenom = "Gabriel";
  $telephone = "(438) 495-1194";
  $courriel = "g.brunet96@gmail.com";
  $message = "bonjour ceci est un test";
  
  $mail = new PHPMailer();
  $mail->IsSMTP();
$mail->Host = 'localhost';
$mail->SMTPAuth = false;
$mail->SMTPAutoTLS = false; 
$mail->Port = 25; 


  $mail->IsHTML(true);
  $mail->AddAddress("g.brunet96@gmail.com");
  $mail->SetFrom("info@tytopeinture.com", "Formulaire Contactez-Nous Tyto");
  $mail->AddReplyTo($courriel, $prenom . " " . $nom);
  $mail->Subject = "Tyto peinture - formulaire Contactez-Nous";
  $content = "<b>De : ".$prenom . " " . $nom . "<br/> Telephone : ". $telephone . "<br/> Courriel : " . $courriel . "<br/>Message : " . $message ."</b>";

  $mail->MsgHTML($content); 
  if(!$mail->Send()) {
    echo "Error while sending Email.";
    var_dump($mail);
  } else {
    echo "Email sent successfully";
  }
?>