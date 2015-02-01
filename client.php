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
      
      $.each(['0','1','2','3','4','5','6','7','8','9','star','pound'], function(index, value) { 
		    	$('#button' + value).click(function(){ 
					if(connection) {
						if (value=='star')
							connection.sendDigits('*')
						else if (value=='pound')
							connection.sendDigits('#')
						else
							connection.sendDigits(value)
						return false;
					} 
					});
			});
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
 
    <div id="log">Loading pigeons...</div>
    <div id="dialpad" style="display:none;">
				<table>
				<tr>
				<td><input type="button" value="1" id="button1"></td>
				<td><input type="button" value="2" id="button2"></td>
				<td><input type="button" value="3" id="button3"></td>
				</tr>
				<tr>
				<td><input type="button" value="4" id="button4"></td>
				<td><input type="button" value="5" id="button5"></td>
				<td><input type="button" value="6" id="button6"></td>
				</tr>
				<tr>
				<td><input type="button" value="7" id="button7"></td>
				<td><input type="button" value="8" id="button8"></td>
				<td><input type="button" value="9" id="button9"></td>
				</tr>
				<tr>
				<td><input type="button" value="*" id="buttonstar"></td>
				<td><input type="button" value="0" id="button0"></td>
				<td><input type="button" value="#" id="buttonpound"></td>
				</tr>
				</table>
			</div>
  </body>
</html>