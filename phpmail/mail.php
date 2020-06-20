<?php
include "classes/class.phpmailer.php";
$mail = new PHPMailer; 
$mail->IsSMTP();
$mail->SMTPSecure = 'ssl'; 
$mail->Host = "talirami.com"; //host masing2 provider email
$mail->SMTPDebug = 2;
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = "official@talirami.com"; //user email
$mail->Password = "bandung88"; //password email 
$mail->SetFrom("official@talirami.com","Official Talirami");
$mail->Subject = "Regards Bro"; //subyek email
$mail->AddAddress("hexawolf88@gmail.com","nama email tujuan");  //tujuan email
$mail->MsgHTML("This email not for reply, Thank you!");
if($mail->Send()) echo "Message has been sent";
else echo "Failed to sending message";
?>