<?php

$to      = "ebroussard@gmail.com";
$subject = "New Contact Form Submission";
$message = trim(stripslashes($_POST['Message']));
$from    = trim(stripslashes($_POST['Email']));
$name    = trim(stripslashes($_POST['Name']));
$car    = trim(stripslashes($_POST['Car']));
$year    = trim(stripslashes($_POST['Year']));

$body = "";
$body .= "Name: ";
$body .= $name;
$body .= "\n";
$body .= "Email: ";
$body .= $from;
$body .= "\n";
$body .= "Message: ";
$body .= $message;
$body .= "\n";
$body .= "Car: ";
$body .= $car;
$body .= "\n";
$body .= "Year: ";
$body .= $year;
$body .= "\n";
$success = mail($to, $subject, $body, "From: <$from>");

if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=thank-you.php\">";
}
else {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}

?>