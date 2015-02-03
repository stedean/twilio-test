<?php
include 'twilio-php-master/Services/Twilio/Capability.php';
 
// put your Twilio API credentials here
$accountSid = 'ACfa638e607f8eb06cc2aa87e67c96a364';
$authToken  = 'a0e5d44bc1c7875f1aedabbc5be4c88c';
$appSid = 'AP6118fa7162278251646f075f55cb78fc';

// put your default Twilio Client name here
$clientName = 'HGSClient';

// get the Twilio Client name from the page request parameters, if given
if (isset($_REQUEST['client'])) {
    $clientName = $_REQUEST['client'];
}

$capability = new Services_Twilio_Capability($accountSid, $authToken);
$capability->allowClientOutgoing($appSid);
$capability->allowClientIncoming($clientName);
$token = $capability->generateToken();
?>
 
<!DOCTYPE html>
<html>
  <head>
    <title>Hello Client</title>
    <script type="text/javascript"
      src="//static.twilio.com/libs/twiliojs/1.2/twilio.min.js"></script>
    <script type="text/javascript"
      src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js">
    </script>
    <link href="client.css"
      type="text/css" rel="stylesheet" />
    <script type="text/javascript">
 
      try {
        Twilio.Device.setup("<?php echo $token; ?>");
      } catch (err) {
        console.log("Adobe Flash is required to use Twilio Client.");
      }
      
 
      Twilio.Device.ready(function (device) {
        $("#log").text("Client '<?php echo $clientName ?>' is ready");
      });
 
      Twilio.Device.error(function (error) {
        $("#log").text("Error: " + error.message);
      });
 
      Twilio.Device.connect(function (conn) {
        $("#log").text("Successfully established call");
      });
      
      Twilio.Device.disconnect(function (conn) {
        $("#log").text("Call ended:");
      });
      
      Twilio.Device.incoming(function (conn) {
        $("#log").text("Incoming connection from " + conn.parameters.From);
        // accept the incoming connection and start two-way audio
        conn.accept();
      });
 
      function call() {
        // get the phone number or client to connect the call to
        params = {"PhoneNumber": $("#number").val()};
        Twilio.Device.connect(params);
      }
      
      function hangup() {
        Twilio.Device.disconnectAll();
      }
      
      function keyPress(value) {
        $("#log").text("Key Pressed: " + value);
        var connection = Twilio.Device.activeConnection();
        if(connection) {
						if (value=='star')
							connection.sendDigits('*')
						else if (value=='pound')
							connection.sendDigits('#')
						else {
							$("#log").text("Conn Pressed: " + value);
							connection.sendDigits(value)
						}
						return false;
					} else {
					  $("#log").text("Pressed: " + value);
					}
      }
    </script>
  </head>
  <body>
    <button class="call" onclick="call();">
      Call
    </button>
    
    <button class="hangup" onclick="hangup();">
      Hangup
    </button>
   
   <input type="text" id="number" name="number"
      placeholder="Enter a phone number or client to call"/>
 
    <div id="log">Loading...</div>

    
    <div id="dialpad">
      <button id="btn" onclick="keyPress('1');">1</button>
      <button onclick="keyPress('2');">2</button>
      <button onclick="keyPress('3');">3</button>
    </div>
    <div id="dialpad">
      <button onclick="keyPress('4');">4</button>
      <button onclick="keyPress('5');">5</button>
      <button onclick="keyPress('6');">6</button>
    </div>
    <div id="dialpad">
      <button onclick="keyPress('7');">7</button>
      <button onclick="keyPress('8');">8</button>
      <button onclick="keyPress('9');">9</button>
    </div>
    <div id="dialpad">
      <button onclick="keyPress('*');">*</button>
      <button onclick="keyPress('0');">0</button>
      <button onclick="keyPress('#');">#</button>
    </div>

    
				
			
  </body>
</html>