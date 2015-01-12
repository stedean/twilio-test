<?php
    // Include the Twilio PHP library
    require 'twilio-php-master/Services/Twilio.php';
 
    // Twilio REST API version
    $version = "2010-04-01";
 
    // Set our Account SID and AuthToken
    $sid = 'ACfa638e607f8eb06cc2aa87e67c96a364';
    $token = 'a0e5d44bc1c7875f1aedabbc5be4c88c';
     
    // A phone number you have previously validated with Twilio
    $phonenumber = '+447788310101';
    $receiving = '+441708394056';
    echo 'Creating a new Twilio client';
    // Instantiate a new Twilio Rest Client
    $client = new Services_Twilio($sid, $token, $version);
 
    try {
        echo 'Calling ' . $receiving . ' from ' . $phonenumber;
        // Initiate a new outbound call
        $call = $client->account->calls->create(
            $phonenumber, // The number of the phone initiating the call
            '+447788310101', // The number of the phone receiving call
            'https://ancient-mesa-3939.herokuapp.com/hello-monkey.php' // The URL Twilio will request when the call is answered
        );
        echo 'Started call: ' . $call->sid;
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
?>