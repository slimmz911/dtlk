<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

if(!$name || !$email || !$phone || !$message)
{
    $error = 'formerror';
    include('error.php');
    exit;
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL))
{
    $error = 'emailerror';
    include('error.php');
    exit;
}

else{
$to = 'services@dtlkandbma.com';
$from = 'From: noreply@dtlkandbma.com';
$subject = 'Hi! I would like to tap into your expertise';

$content = 'Below are my details'."\n"
            .'Name: '.$name."\n"
            .'Email: '.$email."\n"
            .'Phone: '.$phone."\n"
            .'Message: '.$message."\n";

mail($to, $subject, $content, $from);
include('thankyou.php');

}

?>
