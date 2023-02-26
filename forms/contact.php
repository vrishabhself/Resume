<?php
 
  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'vrishabhpatilvr@gail.com';
  
  $to = $receiving_email_address;
  $from_name = $_POST['name'];
  $from_email = trim($_POST['email']);
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $subject = "Request From Resume";
  
  $data="<br>Name : ".ucwords(strtolower($from_name));

  $data.="<br>Subject : ".$subject;

  $data.="<br>message : ".$message;
  
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  
  $headers .= 'From: <'.strtolower($from_email).'>' . "\r\n";
  
  mail($to,$subject,$data,$headers);
?>
