<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "ducnguyenan@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
$verify = $_POST['verify'];

if (isset($_POST["submit"]) && $verify == '4') {
    if (mail ($name, $email, $message)) { 
        echo '<p>Your message has been sent!</p>';
     } 

    else { 
        echo '<p>Something went wrong, go back and try again!</p>'; 
     }
  }    
    else if (isset($_POST["submit"]) && verify != '4') {
        echo '<p>You answered the anti-spam question incorrectly!</p>';
     }
?>
