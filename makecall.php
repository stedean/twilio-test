<?php
session_start();
echo("Including twilio");
include 'twilio-php-master/Services/Twilio.php';
echo("<br>including config");
include("config.php");
echo("<br>creating client");
$client = new Services_Twilio($accountsid, $authtoken);
if (!isset($_REQUEST['called'])) {
 echo("<br>No phone number");
 $err = urlencode("Must specify your phone number");
 header("Location: click-to-call.php?msg=$err");
 die;
}
echo("<br>creating call: " . $_REQUEST['called']);
$call = $client->account->calls->create($fromNumber,$toNumber,'callback.php?number=' . $_REQUEST['called']);
$msg = urlencode("Connecting... ".$call->sid);
echo("<br>msg: " . $msg)
header("Location: click-to-call.php?msg=$msg");
?>