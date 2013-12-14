<?php
    
    namespace AlphaMail\Examples;

    use AlphaMail\Client\EmailService;
    use AlphaMail\Client\Entities\EmailContact;
    use AlphaMail\Client\Entities\EmailMessagePayload;
    use AlphaMail\Client\Exceptions\ServiceException;

    require __DIR__.'/../autoload.php';
    
    $email_service = new EmailService("5297e21bda6302-02922761"); // Token "Heroku Application"
    
    $message = array(
        "first_name" => $_POST["first_name"],
        "last_name" => $_POST["last_name"],
        "email" => $_POST["email"],
        "message" => $_POST["contact_message"]
    );
    
    $payload = EmailMessagePayload::create()
        ->setProjectId(3716) // ID of "Test" project
        ->setSender(new EmailContact("heroku_bcc84b281380105c3655d26f065e569a", "app19512107@heroku.com"))
        ->setReceiver(new EmailContact("podlink contact request", "alamofamilyfoot@gmail.com"))
        ->setBodyObject($message);
  
    try
    {
        $response = $email_service->queue($payload);
        printf("Mail successfully sent! ID = %s", $response->result);
    }
    catch(ServiceException $exception)
    {
        printf("Error! %s (%s)", $exception->getMessage(), $exception->getErrorCode());
    }

?>