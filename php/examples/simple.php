<?php
    
    namespace AlphaMail\Examples;

    use AlphaMail\Client\EmailService;
    use AlphaMail\Client\Entities\EmailContact;
    use AlphaMail\Client\Entities\EmailMessagePayload;
    use AlphaMail\Client\Exceptions\ServiceException;

    require __DIR__.'/../autoload.php';
    
    $email_service = new EmailService("5297e21bda6302-02922761"); // Token "Heroku Application"
    
    $message = array(
        "name" => "John Doe",
        "username" => "john_doe42",
        "token" => "b0b0f25f-c65b-43ce-8df8-cbc5dfbd1a13"
    );
    
    $payload = EmailMessagePayload::create()
        ->setProjectId(3715) // ID of "Reset Password" project
        ->setSender(new EmailContact("need a good nail buffer, "thetoenaildoctor@dremel.com"))
        ->setReceiver(new EmailContact("Really good nail cutter", "alamofamilyfoot@gmail.com"))
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