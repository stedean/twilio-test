{"filter":false,"title":"makecall.php","tooltip":"/makecall.php","undoManager":{"mark":3,"position":3,"stack":[[{"group":"doc","deltas":[{"start":{"row":0,"column":0},"end":{"row":15,"column":2},"action":"insert","lines":["<?php","session_start();","include 'Services/Twilio.php';","include(\"config.php\");","$client = new Services_Twilio($accountsid, $authtoken);","if (!isset($_REQUEST['called'])) {"," $err = urlencode(\"Must specify your phone number\");"," header(\"Location: click-to-call.php?msg=$err\");"," die;","}","$call = $client->account->calls->create($fromNumber,"," $toNumber,"," 'callback.php?number=' . $_REQUEST['called']);","$msg = urlencode(\"Connecting... \".$call->sid);","header(\"Location: click-to-call.php?msg=$msg\");","?>"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":9},"end":{"row":2,"column":10},"action":"remove","lines":["S"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":9},"end":{"row":2,"column":10},"action":"insert","lines":["S"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":9},"end":{"row":2,"column":27},"action":"insert","lines":["twilio-php-master/"]}]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":2,"column":27},"end":{"row":2,"column":27},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1421256725174,"hash":"3b5537c2b67195d080ae68922a0cba09232eb64b"}