<?php
require('sendgrid-php.php');



$sendgrid = new SendGrid('app19512107@heroku.com', 'jbhv610v');

$emailname = $_POST['email'];
$first_name = $_POST['first_name'];
$telephone = $_POST['telephone'];
$message = $_POST['contact_message'];

$html = '<<<EOM 
<html>
<head></head>
<body>
 <p>Name:  ' . $first_name . ' </br>Telephone: ' . $telephone . '</br>Email: ' . $emailname . '</br>Message: ' . $message . '
 
 </p>
 </body>
 </html>
 EOM';

$email = new SendGrid\Email();
$email->addTo('richard.perez@me.com')->
       setFrom('richard.perez@me.com')->
       setSubject('New Contact From podlink.com')->
       setHtml($html);
       
       
 




$sendgrid->send($email);
?>

<script>
        alert('Your Message Was Sent Successfully!');
        window.location.href = "/contact.php";
</script>

<p>hello</p>

