<?php

if($_POST) {
  $to = "aaronblac@gmail.com"; 
  $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
  $phone = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
  $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
  $body = "Message: $message\nE-mail: $email\nPhone: $phone";

  if(@mail($to, $subject, $body)) {
    $output = json_encode(array('success' => true));
    die($output);
  } else {
    $output = json_encode(array('success' => false));
    die($output);
  }
}
