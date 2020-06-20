<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "official@talirami.com";
    $to = "hexawolf88@gmail.com";
    $subject = "Check Blog";
    $message = "PHP mail works just fine";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
?>