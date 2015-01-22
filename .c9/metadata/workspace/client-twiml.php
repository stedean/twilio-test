{"filter":false,"title":"client-twiml.php","tooltip":"/client-twiml.php","undoManager":{"mark":31,"position":31,"stack":[[{"group":"doc","deltas":[{"start":{"row":0,"column":0},"end":{"row":8,"column":11},"action":"insert","lines":["<?php","header('Content-type: text/xml');","?>"," ","<Response>","    <Dial>","        <Client>jenny</Client>","    </Dial>","</Response>"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":16},"end":{"row":6,"column":21},"action":"remove","lines":["jenny"]},{"start":{"row":6,"column":16},"end":{"row":6,"column":17},"action":"insert","lines":["H"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":17},"end":{"row":6,"column":18},"action":"insert","lines":["G"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":18},"end":{"row":6,"column":19},"action":"insert","lines":["S"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":19},"end":{"row":6,"column":20},"action":"insert","lines":["C"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":20},"end":{"row":6,"column":21},"action":"insert","lines":["l"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":21},"end":{"row":6,"column":22},"action":"insert","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":22},"end":{"row":6,"column":23},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":23},"end":{"row":6,"column":24},"action":"insert","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":24},"end":{"row":6,"column":25},"action":"insert","lines":["t"]}]}],[{"group":"doc","deltas":[{"start":{"row":0,"column":0},"end":{"row":8,"column":11},"action":"remove","lines":["<?php","header('Content-type: text/xml');","?>"," ","<Response>","    <Dial>","        <Client>HGSClient</Client>","    </Dial>","</Response>"]},{"start":{"row":0,"column":0},"end":{"row":27,"column":11},"action":"insert","lines":["<?php","header('Content-type: text/xml');"," ","// put a phone number you've verified with Twilio to use as a caller ID number","$callerId = \"+1xxxxxxxxxx\";"," ","// put your default Twilio Client name here, for when a phone number isn't given","$number   = \"jenny\";"," ","// get the phone number from the page request parameters, if given","if (isset($_REQUEST['PhoneNumber'])) {","    $number = htmlspecialchars($_REQUEST['PhoneNumber']);","}"," ","// wrap the phone number or client name in the appropriate TwiML verb","// by checking if the number given has only digits and format symbols","if (preg_match(\"/^[\\d\\+\\-\\(\\) ]+$/\", $number)) {","    $numberOrClient = \"<Number>\" . $number . \"</Number>\";","} else {","    $numberOrClient = \"<Client>\" . $number . \"</Client>\";","}","?>"," ","<Response>","    <Dial callerId=\"<?php echo $callerId ?>\">","          <?php echo $numberOrClient ?>","    </Dial>","</Response>"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":14},"end":{"row":4,"column":25},"action":"remove","lines":["1xxxxxxxxxx"]},{"start":{"row":4,"column":14},"end":{"row":4,"column":15},"action":"insert","lines":["4"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":15},"end":{"row":4,"column":16},"action":"insert","lines":["4"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":16},"end":{"row":4,"column":17},"action":"insert","lines":["7"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":17},"end":{"row":4,"column":18},"action":"insert","lines":["7"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":18},"end":{"row":4,"column":19},"action":"insert","lines":["8"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":19},"end":{"row":4,"column":20},"action":"insert","lines":["8"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":20},"end":{"row":4,"column":21},"action":"insert","lines":["3"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":21},"end":{"row":4,"column":22},"action":"insert","lines":["1"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":22},"end":{"row":4,"column":23},"action":"insert","lines":["0"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":23},"end":{"row":4,"column":24},"action":"insert","lines":["1"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":24},"end":{"row":4,"column":25},"action":"insert","lines":["0"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":25},"end":{"row":4,"column":26},"action":"insert","lines":["1"]}]}],[{"group":"doc","deltas":[{"start":{"row":7,"column":13},"end":{"row":7,"column":18},"action":"remove","lines":["jenny"]},{"start":{"row":7,"column":13},"end":{"row":7,"column":14},"action":"insert","lines":["H"]}]}],[{"group":"doc","deltas":[{"start":{"row":7,"column":14},"end":{"row":7,"column":15},"action":"insert","lines":["G"]}]}],[{"group":"doc","deltas":[{"start":{"row":7,"column":15},"end":{"row":7,"column":16},"action":"insert","lines":["S"]}]}],[{"group":"doc","deltas":[{"start":{"row":7,"column":16},"end":{"row":7,"column":17},"action":"insert","lines":["C"]}]}],[{"group":"doc","deltas":[{"start":{"row":7,"column":17},"end":{"row":7,"column":18},"action":"insert","lines":["l"]}]}],[{"group":"doc","deltas":[{"start":{"row":7,"column":18},"end":{"row":7,"column":19},"action":"insert","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":7,"column":19},"end":{"row":7,"column":20},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":7,"column":20},"end":{"row":7,"column":21},"action":"insert","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":7,"column":21},"end":{"row":7,"column":22},"action":"insert","lines":["t"]}]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":7,"column":24},"end":{"row":7,"column":24},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":54,"mode":"ace/mode/php"}},"timestamp":1421957219646,"hash":"ba6bddccf8bc21ed323f38096e796162db0aef73"}