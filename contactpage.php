<?php
//get data from form  

$name = $_POST['name'];
$City= $_POST['ADDRESS'];
// $phone= $_POST['contact'];
$email= $_POST['email'];
$message= $_POST['msg'];



$to = "braxleylab@gmail.com,shashikantkamthe77@gmail.com";

$subject = "Mail From website astraneo pharma contact page";
$txt ="Name: ".$name."\r\nPhoneNumber: ".$phone."\r\nCity: ". $City ."\r\nEmail: ".$email."\r\nMessage: ".$message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>