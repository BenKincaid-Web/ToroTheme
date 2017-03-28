
<?php
/*

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



  if (empty($_POST["contact-phone"])) {
    $phone_error = "Phone is required";
  }

  if (empty($_POST["url"])) {
    $url_error = "";
  }

  if (empty($_POST["contact-message"])) {
    $message = "";
  } else {
      $message = test_input($_POST["contact-message"]);
  }

  if (empty($_POST["contact-email"])) {
    $email = "";
  } else {
      $email = test_input($_POST["contact-email"]);
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
    $messagepost = $name . $email;
    if (mail($to, $subject, $messagepost, $headers )){
    $success = "<p class = 'success' >Thank you! A board member will be in touch with you shortly!</p>";
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

*/

$initLoad = true;
    
    if (isset($_POST['submit'])) {
        
        if(trim($_POST['contact-name']) == "") {
            $nameError = 'Please enter your name.';
            $hasError = true;
        } else {
            $name = trim($_POST['contact-name']);
        }
        
        if(trim($_POST['email-name']) == "") {
            $emailError = "Please enter your email.";
            $hasError = true;
        } else {
            $email = trim($_POST['email-name']);
        }
        if (trim($_POST['number-name']) == "") {
            $numberError = "Please enter your school Identification number.";
            $hasError = true;
        } else {
            $number = trim($_POST['number-name']);
        }
        
        if(trim($_POST['major-name']) == "") {
            $majorError = "Please enter your major."; 
            $hasError = true;
        } else {
            $major = trim($_POST['major-name']);
        }
        
        if(!isset($hasError)) {
            $emailToR = $email;
            $emailTo = "BenKincaidWeb@gmail.com";
            $subject = "AMA Join-Form Submission";
            $body = "name: $name \n\nEmail: $email \n\nMajor: $major \n\nCSUDH #: $number";
             $bodyR ="Thank you for your submission!";
            $headers =  'MIME-Version: 1.0' . "\r\n";
$headers .= 'From: ToroAMA <Submission@toroama.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            wp_mail($emailTo, $subject, $body, $headers);
            wp_mail($emailToR, $subject, $bodyR, $headers);
            $emailSent = true;
        }
        else {
            $initLoad = false;
        }
    }
