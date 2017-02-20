<?php

print_r($_POST);
$headers =  'MIME-Version: 1.0' . "\r\n";
$headers .= 'From: Your name <info@address.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// define variables and set to empty values
$name_error = $email_error = $phone_error = $url_error = "";
$name = $email = $phone = $message = $url = $success = "";

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["contact-name"])) {
    $name_error = "Name is required";
  } else {
    $name = test_input($_POST["contact-name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $name_error = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["contact-email"])) {
    $email_error = "Email is required";
  } else {
    $email = test_input($_POST["contact-email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_error = "Invalid email format";
    }
  }

  if (empty($_POST["contact-phone"])) {
    $phone_error = "Phone is required";
  } else {
    $phone = test_input($_POST["contact-phone"]);
    // check if e-mail address is well-formed
    if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i",$phone)) {
      $phone_error = "Invalid phone number";
    }
  }

  if (empty($_POST["url"])) {
    $url_error = "";
  } else {
    $url = test_input($_POST["url"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)) {
      $url_error = "Invalid URL";
    }
  }

  if (empty($_POST["contact-message"])) {
    $message = "";
  } else {
    $message = test_input($_POST["contact-message"]);
  }

  if ($name_error == '') {
    $message_body = "";
    unset($_POST['submit']);
    foreach ($_POST as $key => $value){
      $message_body .= "$key: $value\n";
    }

    $date = getdate();


    $to = "benkincaidweb@gmail.com";
    $subject .= "$date: AMA Join Form Submission" ;
    $messagepost = "Date: $date" . "Name: $name";
    if (mail($to, $subject, $messagepost, $name, $headers )){
    $success = "Thanks!!!!!!";
    $name = "";
  }


  }


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
