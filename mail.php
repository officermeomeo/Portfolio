<?php
//getting data from form

$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['reason'];
$message=$_POST['message'];

$to="adityajoshi2104@gmail.com";
$subject="Subject:".$subject;
$txt ="Name = ". $name . "\r\nEmail :  " . $email . "\r\nMessage :".$message;

$headers = "From: noreply@yoursite.com" . "\r\n"."CC:ad8tya.joshi@gmail.com"; 
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

//redirect
header("Location:index.html");
?>
