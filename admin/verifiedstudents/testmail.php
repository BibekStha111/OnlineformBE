<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$from = "registrar@college.edu.np";
$email = $_GET["userid"];

$to = $email;
$name=$_GET["username"];
$subject = "Registration Department";
$message = "Dear ".$name.", your form has been successfully verified. We will contact you soon for any further queries.";
$headers = "From:" . $from;
if(mail($to,$subject,$message, $headers)) {
    echo "The email message was sent.";
} else {
  echo "The email message was not sent.";
}

echo $email;
echo $name;
?>