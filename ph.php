<?php
if(isset($_POST['submit'])){
    $to = "uveshmemon.um777@gmail.com";



    $name = $_POST['name'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $subject= $_POST['subject'];
    $body= $_POST['body'];
    $headers = 'From: '.$email . "\r\n";


    $body = "name : ".$name. "\r\n" .
    		"Phone : ".$phone. "\r\n" .
    		"Message : " . $body;
   mail($to, $subject, $body , $headers);
}

?>
