{"filter":false,"title":"hello-client-twiml.php","tooltip":"/hello-client-twiml.php","undoManager":{"mark":47,"position":47,"stack":[[{"group":"doc","deltas":[{"start":{"row":0,"column":0},"end":{"row":8,"column":11},"action":"insert","lines":["<?php","header('Content-type: text/xml');","?>"," ","<Response>","    <Dial>","        <Client>jenny</Client>","    </Dial>","</Response>"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":16},"end":{"row":6,"column":21},"action":"remove","lines":["jenny"]},{"start":{"row":6,"column":16},"end":{"row":6,"column":17},"action":"insert","lines":["S"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":17},"end":{"row":6,"column":18},"action":"insert","lines":["t"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":18},"end":{"row":6,"column":19},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":19},"end":{"row":6,"column":20},"action":"insert","lines":["p"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":20},"end":{"row":6,"column":21},"action":"insert","lines":["h"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":21},"end":{"row":6,"column":22},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":22},"end":{"row":6,"column":23},"action":"insert","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":0,"column":0},"end":{"row":8,"column":11},"action":"remove","lines":["<?php","header('Content-type: text/xml');","?>"," ","<Response>","    <Dial>","        <Client>Stephen</Client>","    </Dial>","</Response>"]},{"start":{"row":0,"column":0},"end":{"row":27,"column":11},"action":"insert","lines":["<?php","header('Content-type: text/xml');"," ","// put a phone number you've verified with Twilio to use as a caller ID number","$callerId = \"+1xxxxxxxxxx\";"," ","// put your default Twilio Client name here, for when a phone number isn't given","$number   = \"jenny\";"," ","// get the phone number from the page request parameters, if given","if (isset($_REQUEST['PhoneNumber'])) {","    $number = htmlspecialchars($_REQUEST['PhoneNumber']);","}"," ","// wrap the phone number or client name in the appropriate TwiML verb","// by checking if the number given has only digits and format symbols","if (preg_match(\"/^[\\d\\+\\-\\(\\) ]+$/\", $number)) {","    $numberOrClient = \"<Number>\" . $number . \"</Number>\";","} else {","    $numberOrClient = \"<Client>\" . $number . \"</Client>\";","}","?>"," ","<Response>","    <Dial callerId=\"<?php echo $callerId ?>\">","          <?php echo $numberOrClient ?>","    </Dial>","</Response>"]}]}],[{"group":"doc","deltas":[{"start":{"row":7,"column":13},"end":{"row":7,"column":18},"action":"remove","lines":["jenny"]},{"start":{"row":7,"column":13},"end":{"row":7,"column":14},"action":"insert","lines":["S"]}]}],[{"group":"doc","deltas":[{"start":{"row":7,"column":14},"end":{"row":7,"column":15},"action":"insert","lines":["t"]}]}],[{"group":"doc","deltas":[{"start":{"row":7,"column":15},"end":{"row":7,"column":16},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":7,"column":16},"end":{"row":7,"column":17},"action":"insert","lines":["p"]}]}],[{"group":"doc","deltas":[{"start":{"row":7,"column":17},"end":{"row":7,"column":18},"action":"insert","lines":["h"]}]}],[{"group":"doc","deltas":[{"start":{"row":7,"column":18},"end":{"row":7,"column":19},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":7,"column":19},"end":{"row":7,"column":20},"action":"insert","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":14},"end":{"row":4,"column":25},"action":"remove","lines":["1xxxxxxxxxx"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":13},"end":{"row":4,"column":14},"action":"remove","lines":["+"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":13},"end":{"row":4,"column":14},"action":"insert","lines":["+"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":14},"end":{"row":4,"column":15},"action":"insert","lines":["4"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":15},"end":{"row":4,"column":16},"action":"insert","lines":["4"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":15},"end":{"row":4,"column":16},"action":"remove","lines":["4"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":14},"end":{"row":4,"column":15},"action":"remove","lines":["4"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":13},"end":{"row":4,"column":14},"action":"remove","lines":["+"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":13},"end":{"row":4,"column":28},"action":"insert","lines":["+44 1708 394056"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":21},"end":{"row":4,"column":22},"action":"remove","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":16},"end":{"row":4,"column":17},"action":"remove","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":25},"end":{"row":4,"column":26},"action":"remove","lines":["6"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":24},"end":{"row":4,"column":25},"action":"remove","lines":["5"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":23},"end":{"row":4,"column":24},"action":"remove","lines":["0"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":22},"end":{"row":4,"column":23},"action":"remove","lines":["4"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":21},"end":{"row":4,"column":22},"action":"remove","lines":["9"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":20},"end":{"row":4,"column":21},"action":"remove","lines":["3"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":19},"end":{"row":4,"column":20},"action":"remove","lines":["8"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":18},"end":{"row":4,"column":19},"action":"remove","lines":["0"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":17},"end":{"row":4,"column":18},"action":"remove","lines":["7"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":16},"end":{"row":4,"column":17},"action":"remove","lines":["1"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":16},"end":{"row":4,"column":17},"action":"insert","lines":["7"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":17},"end":{"row":4,"column":18},"action":"insert","lines":["7"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":18},"end":{"row":4,"column":19},"action":"insert","lines":["8"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":19},"end":{"row":4,"column":20},"action":"insert","lines":["8"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":20},"end":{"row":4,"column":21},"action":"insert","lines":["3"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":21},"end":{"row":4,"column":22},"action":"insert","lines":["1"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":22},"end":{"row":4,"column":23},"action":"insert","lines":["0"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":23},"end":{"row":4,"column":24},"action":"insert","lines":["1"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":24},"end":{"row":4,"column":25},"action":"insert","lines":["0"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":25},"end":{"row":4,"column":26},"action":"insert","lines":["1"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":16},"end":{"row":4,"column":24},"action":"insert","lines":["17083940"]},{"start":{"row":4,"column":24},"end":{"row":4,"column":34},"action":"remove","lines":["7788310101"]},{"start":{"row":4,"column":16},"end":{"row":4,"column":24},"action":"remove","lines":["17083940"]},{"start":{"row":4,"column":16},"end":{"row":4,"column":26},"action":"insert","lines":["7788310101"]}]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":11,"column":36},"end":{"row":11,"column":36},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1421049694598,"hash":"f1599e1042507822a5890c1e27684bb8a1c36654"}