<?php
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'TKE Contact Form'; 
    $to = 'aaquin03@nyit.edu'; 
    $subject = 'Message from TKE Contact Page ';
    
    $body ="From: $name\n E-Mail: $email\n Message:\n $message";
    // Check if name has been entered
    if (!$_POST['name']) {
      $errName = 'Please enter your name';
    }
    
    // Check if email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errEmail = 'Please enter a valid email address';
    }
    
    //Check if message has been entered
    if (!$_POST['message']) {
      $errMessage = 'Please enter your message';
    }

// If there are no errors, send the email

  mail ($to, $subject, $body, $from);
    $result='<div class="alert alert-success">Thank You! We will be in touch</div>';
?>