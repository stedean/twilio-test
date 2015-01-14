{"changed":true,"filter":false,"title":"hello-client-twiml.php","tooltip":"/hello-client-twiml.php","value":"<?php\nheader('Content-type: text/xml');\n \n// put a phone number you've verified with Twilio to use as a caller ID number\n$callerId = \"+447788310101\";\n \n// put your default Twilio Client name here, for when a phone number isn't given\n$number   = \"Stephen\";\n \n// get the phone number from the page request parameters, if given\nif (isset($_REQUEST['PhoneNumber'])) {\n    $number = htmlspecialchars($_REQUEST['PhoneNumber']);\n}\n \n// wrap the phone number or client name in the appropriate TwiML verb\n// by checking if the number given has only digits and format symbols\nif (preg_match(\"/^[\\d\\+\\-\\(\\) ]+$/\", $number)) {\n    $numberOrClient = \"<Number>\" . $number . \"</Number>\";\n} else {\n    $numberOrClient = \"<Client>\" . $number . \"</Client>\";\n}\n?>\n \n<Response>\n    <Dial callerId=\"+447788310101\">\n          <Number>+447788310101</Number>\n    </Dial>\n</Response>","undoManager":{"mark":98,"position":100,"stack":[[{"group":"doc","deltas":[{"start":{"row":4,"column":14},"end":{"row":4,"column":15},"action":"insert","lines":["4"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":15},"end":{"row":4,"column":16},"action":"insert","lines":["4"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":15},"end":{"row":4,"column":16},"action":"remove","lines":["4"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":14},"end":{"row":4,"column":15},"action":"remove","lines":["4"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":13},"end":{"row":4,"column":14},"action":"remove","lines":["+"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":13},"end":{"row":4,"column":28},"action":"insert","lines":["+44 1708 394056"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":21},"end":{"row":4,"column":22},"action":"remove","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":16},"end":{"row":4,"column":17},"action":"remove","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":25},"end":{"row":4,"column":26},"action":"remove","lines":["6"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":24},"end":{"row":4,"column":25},"action":"remove","lines":["5"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":23},"end":{"row":4,"column":24},"action":"remove","lines":["0"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":22},"end":{"row":4,"column":23},"action":"remove","lines":["4"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":21},"end":{"row":4,"column":22},"action":"remove","lines":["9"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":20},"end":{"row":4,"column":21},"action":"remove","lines":["3"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":19},"end":{"row":4,"column":20},"action":"remove","lines":["8"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":18},"end":{"row":4,"column":19},"action":"remove","lines":["0"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":17},"end":{"row":4,"column":18},"action":"remove","lines":["7"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":16},"end":{"row":4,"column":17},"action":"remove","lines":["1"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":16},"end":{"row":4,"column":17},"action":"insert","lines":["7"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":17},"end":{"row":4,"column":18},"action":"insert","lines":["7"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":18},"end":{"row":4,"column":19},"action":"insert","lines":["8"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":19},"end":{"row":4,"column":20},"action":"insert","lines":["8"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":20},"end":{"row":4,"column":21},"action":"insert","lines":["3"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":21},"end":{"row":4,"column":22},"action":"insert","lines":["1"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":22},"end":{"row":4,"column":23},"action":"insert","lines":["0"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":23},"end":{"row":4,"column":24},"action":"insert","lines":["1"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":24},"end":{"row":4,"column":25},"action":"insert","lines":["0"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":25},"end":{"row":4,"column":26},"action":"insert","lines":["1"]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":16},"end":{"row":4,"column":24},"action":"insert","lines":["17083940"]},{"start":{"row":4,"column":24},"end":{"row":4,"column":34},"action":"remove","lines":["7788310101"]},{"start":{"row":4,"column":16},"end":{"row":4,"column":24},"action":"remove","lines":["17083940"]},{"start":{"row":4,"column":16},"end":{"row":4,"column":26},"action":"insert","lines":["7788310101"]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":9},"end":{"row":24,"column":44},"action":"remove","lines":[" callerId=\"<?php echo $callerId ?>\""]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":10},"end":{"row":25,"column":39},"action":"remove","lines":["<?php echo $numberOrClient ?>"]},{"start":{"row":25,"column":10},"end":{"row":25,"column":11},"action":"insert","lines":["<"]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":11},"end":{"row":25,"column":12},"action":"insert","lines":["N"]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":12},"end":{"row":25,"column":13},"action":"insert","lines":["u"]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":13},"end":{"row":25,"column":14},"action":"insert","lines":["m"]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":14},"end":{"row":25,"column":15},"action":"insert","lines":["b"]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":15},"end":{"row":25,"column":16},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":16},"end":{"row":25,"column":17},"action":"insert","lines":["r"]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":17},"end":{"row":25,"column":27},"action":"insert","lines":["></Number>"]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":18},"end":{"row":25,"column":19},"action":"insert","lines":["+"]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":19},"end":{"row":25,"column":20},"action":"insert","lines":["4"]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":20},"end":{"row":25,"column":21},"action":"insert","lines":["4"]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":20},"end":{"row":25,"column":21},"action":"remove","lines":["4"]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":19},"end":{"row":25,"column":20},"action":"remove","lines":["4"]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":18},"end":{"row":25,"column":19},"action":"remove","lines":["+"]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":18},"end":{"row":25,"column":19},"action":"insert","lines":["\""]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":19},"end":{"row":25,"column":20},"action":"insert","lines":["+"]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":20},"end":{"row":25,"column":21},"action":"insert","lines":["4"]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":21},"end":{"row":25,"column":22},"action":"insert","lines":["4"]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":22},"end":{"row":25,"column":23},"action":"insert","lines":["7"]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":23},"end":{"row":25,"column":24},"action":"insert","lines":["7"]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":24},"end":{"row":25,"column":25},"action":"insert","lines":["8"]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":25},"end":{"row":25,"column":26},"action":"insert","lines":["8"]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":26},"end":{"row":25,"column":27},"action":"insert","lines":["3"]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":27},"end":{"row":25,"column":28},"action":"insert","lines":["1"]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":28},"end":{"row":25,"column":29},"action":"insert","lines":["0"]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":29},"end":{"row":25,"column":30},"action":"insert","lines":["1"]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":30},"end":{"row":25,"column":31},"action":"insert","lines":["0"]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":31},"end":{"row":25,"column":32},"action":"insert","lines":["1"]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":32},"end":{"row":25,"column":33},"action":"insert","lines":["\""]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":32},"end":{"row":25,"column":33},"action":"remove","lines":["\""]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":18},"end":{"row":25,"column":19},"action":"remove","lines":["\""]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":9},"end":{"row":24,"column":10},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":10},"end":{"row":24,"column":44},"action":"insert","lines":["callerId=\"<?php echo $callerId ?>\""]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":42},"end":{"row":24,"column":43},"action":"remove","lines":[">"]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":41},"end":{"row":24,"column":42},"action":"remove","lines":["?"]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":40},"end":{"row":24,"column":41},"action":"remove","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":39},"end":{"row":24,"column":40},"action":"remove","lines":["d"]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":38},"end":{"row":24,"column":39},"action":"remove","lines":["I"]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":37},"end":{"row":24,"column":38},"action":"remove","lines":["r"]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":36},"end":{"row":24,"column":37},"action":"remove","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":35},"end":{"row":24,"column":36},"action":"remove","lines":["l"]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":34},"end":{"row":24,"column":35},"action":"remove","lines":["l"]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":33},"end":{"row":24,"column":34},"action":"remove","lines":["a"]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":32},"end":{"row":24,"column":33},"action":"remove","lines":["c"]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":31},"end":{"row":24,"column":32},"action":"remove","lines":["$"]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":30},"end":{"row":24,"column":31},"action":"remove","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":29},"end":{"row":24,"column":30},"action":"remove","lines":["o"]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":28},"end":{"row":24,"column":29},"action":"remove","lines":["h"]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":27},"end":{"row":24,"column":28},"action":"remove","lines":["c"]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":26},"end":{"row":24,"column":27},"action":"remove","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":25},"end":{"row":24,"column":26},"action":"remove","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":24},"end":{"row":24,"column":25},"action":"remove","lines":["p"]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":23},"end":{"row":24,"column":24},"action":"remove","lines":["h"]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":22},"end":{"row":24,"column":23},"action":"remove","lines":["p"]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":21},"end":{"row":24,"column":22},"action":"remove","lines":["?"]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":20},"end":{"row":24,"column":21},"action":"remove","lines":["<"]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":20},"end":{"row":24,"column":21},"action":"insert","lines":["+"]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":21},"end":{"row":24,"column":22},"action":"insert","lines":["4"]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":22},"end":{"row":24,"column":23},"action":"insert","lines":["4"]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":23},"end":{"row":24,"column":24},"action":"insert","lines":["7"]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":24},"end":{"row":24,"column":25},"action":"insert","lines":["7"]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":25},"end":{"row":24,"column":26},"action":"insert","lines":["8"]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":26},"end":{"row":24,"column":27},"action":"insert","lines":["8"]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":27},"end":{"row":24,"column":28},"action":"insert","lines":["3"]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":28},"end":{"row":24,"column":29},"action":"insert","lines":["1"]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":29},"end":{"row":24,"column":30},"action":"insert","lines":["0"]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":30},"end":{"row":24,"column":31},"action":"insert","lines":["1"]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":31},"end":{"row":24,"column":32},"action":"insert","lines":["0"]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":32},"end":{"row":24,"column":33},"action":"insert","lines":["1"]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":18},"end":{"row":25,"column":19},"action":"insert","lines":["\""]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":18},"end":{"row":25,"column":19},"action":"remove","lines":["\""]}]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":0,"column":0},"end":{"row":0,"column":0},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1421254373905}