<?php
//mail('jcconfere@gmail.com','Testing','this is a test','From: jcconfere@gmail.com');

$emailTo = "jcconfere@gmail.com";
$subject = "testing";
$body = "This is a test";
$headers = "From: jcconfere@gmail.com";
  if(mail($emailTo, $subject, $body, $headers)) {
    echo "Mail sent successfully";
  } else {
    echo "Mail has not been sent";
  }

  ?>
