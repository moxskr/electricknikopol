<?php
header("Access-Control-Allow-Origin: *");

$recepient = "moxskr@gmail.com";
$subject = "test";

$name = $_POST['name'];
$phone = $_POST['phone'];
$text = $_POST['text'];

$message = "Name : ".name." Phone : ".phone." Text : ".text;
$headers = "From : ".name;

mail($recepient, $subject, $message, $headers);

?>