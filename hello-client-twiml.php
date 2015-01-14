<?php
header('Content-type: text/xml');
 
// put a phone number you've verified with Twilio to use as a caller ID number
$callerId = "+447788310101";
 
// put your default Twilio Client name here, for when a phone number isn't given
$number   = "Stephen";
 
// get the phone number from the page request parameters, if given
if (isset($_REQUEST['PhoneNumber'])) {
    $number = htmlspecialchars($_REQUEST['PhoneNumber']);
}
 
// wrap the phone number or client name in the appropriate TwiML verb
// by checking if the number given has only digits and format symbols
if (preg_match("/^[\d\+\-\(\) ]+$/", $number)) {
    $numberOrClient = "<Number>" . $number . "</Number>";
} else {
    $numberOrClient = "<Client>" . $number . "</Client>";
}
?>
 
<Response>
    <Dial callerId="+447788310101">
          <Number>+447788310101</Number>
    </Dial>
</Response>