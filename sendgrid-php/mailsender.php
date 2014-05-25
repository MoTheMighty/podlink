<?php
require('sendgrid-php.php');



$sendgrid = new SendGrid('app19512107@heroku.com', 'jbhv610v');




$email = new SendGrid\Email();
$email->addTo('richard.perez@me.com')->
       setFrom('richard.perez@me.com')->
       setSubject('Subject goes here')->
       setText('Hello World!')->
       setHtml('<strong>Hello World!</strong>');




$sendgrid->send($email);
?>