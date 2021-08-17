<?php

 //echo '<pre>';
  //  print_r($_POST);
 //echo '</pre>';
$message_sent = false;
if($_POST['send']){

if (isset($_POST['email']) && $_POST['email'] != '') {
   
        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $messageSubject = $_POST['subject'];
        $Message = $_POST['message'];

        $to = "mrboussena48@gmail.com";
        $body = "";

        $body .= "From: " . $userName . "\r\n";
        $body .= "Email: " . $userEmail . "\r\n";
        $body .= "Message: " . $Message . "\r\n";


        mail($to, $messageSubject, $body);

        $message_sent = true;
}
}
echo '<link rel="stylesheet" href="style.css" as="style" />',
'<html class="php">', '<body class="php">',
'<div class="phpdiv"><p class="php-paragraphes"> Thanks, Your Message Has Been Sent Succefully.</p>',
'<button type="submit" class="php-btn"> <a href="http://workspace.alien-dz.cf">Go Back </a></button></div>';
?>
