<?php

  if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $formcontent="From: $name \n Message: $message";
    $recipient = "mrjustinfry@gmail.com";
    $subject = "Contact Form";
    $mailheader = "From: $email \r\n";
      mail($recipient, $subject, $formcontent, $mailheader);
      header("Location: index.html?mailsend");
  }
?>
