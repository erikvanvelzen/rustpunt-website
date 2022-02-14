<?php

//error handler function
function customError( $errno, $errstr ) {
  header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
  die();
}

//set error handler
set_error_handler("customError");

// define variables and set to empty values
$name = $email = $telephone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $subject = $message = "";
  foreach ($_POST as $key => $value) {
    $key_parts = explode( "-", $key );
    if ( $subject == "" )
      $subject .= str_replace( "_", " ", array_shift( $key_parts ) );
    $message .= array_pop( $key_parts );
    $message .= ": " . test_input( $value ) . "\n";
  }
  $message = "Via de site is een aanvraag binnengekomen betreffende $subject \n\n$message";
  mail("erikvvelzen@gmail.com","Aanvraag $subject",$message,"From: phpFormGenerator");
  header($_SERVER['SERVER_PROTOCOL'] . ' 200 OK', true, 200);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
