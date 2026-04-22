<?php
function sendMail($to, $subject, $message){
    $headers = "From: avalakkivaibhav14@gmail.com";
    mail($to, $subject, $message, $headers);
}
?>