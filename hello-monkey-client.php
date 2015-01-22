<?php
include 'twilio-php-master/Services/Twilio/Capability.php';
 
// put your Twilio API credentials here
$accountSid = 'ACfa638e607f8eb06cc2aa87e67c96a364';
$authToken  = 'a0e5d44bc1c7875f1aedabbc5be4c88c';

// put your Twilio Application Sid here
//$appSid     = 'AP25a7956ae01e54abc5472fab132c684e';
$appSid     = 'AP1ed53150a4fb7e430c22a450ad93bb8f';

$capability = new Services_Twilio_Capability($accountSid, $authToken);
$capability->allowClientOutgoing($appSid);
$capability->allowClientIncoming('OpenVBX');
$token = $capability->generateToken();
?>
 
<!DOCTYPE html>
<html>
  <head>
    <title>Hello Client Monkey 1</title>
    <script type="text/javascript"
      src="//static.twilio.com/libs/twiliojs/1.2/twilio.min.js"></script>
    <script type="text/javascript"
      src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js">
    </script>
    <link href="http://static0.twilio.com/packages/quickstart/client.css"
      type="text/css" rel="stylesheet" />
    <script type="text/javascript">
 
      Twilio.Device.setup("<?php echo $token; ?>");
 
      Twilio.Device.ready(function (device) {
        $("#log").text("Ready");
      });
 
      Twilio.Device.error(function (error) {
        $("#log").text("Error: " + error.message);
      });
 
      Twilio.Device.connect(function (conn) {
        $("#log").text("Successfully established call");
      });
      
      Twilio.Device.disconnect(function (conn) {
        $("#log").text("Call ended");
      });
      
      Twilio.Device.incoming(function (conn) {
        $("#log").text("Incoming connection from " + conn.parameters.From);
        // accept the incoming connection and start two-way audio
        conn.accept();
      });
 
      function call() {
        // get the phone number to connect the call to
        params = {"PhoneNumber": $("#number").val()};
        $("#log").text($("#number").val());
        Twilio.Device.connect(params);
      }
      
      function hangup() {
        Twilio.Device.disconnectAll();
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
      placeholder="Enter a phone number to call"/>
 
    <div id="log">Loading pigeons...</div>
  </body>
</html>