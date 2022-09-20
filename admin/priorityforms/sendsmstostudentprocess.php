<?php require_once "../Database/database.php"; 
$database = new Database();
require_once "../Util/sendsms.php"; 
$smsSetting = $database->getSMSsettings();
$token = $smsSetting[0]["sms_apikey"];

// $database = new Database();
 $sendSMS = new SendSMS();


 $message = $_POST["ssm_message"];
 $rnumber = $_POST["ssm_number"];

 //echo $message;

 $sendSMS ->sendMessage($token,$rnumber,$message);
 echo'<a href="index.php"></a>';
      echo'<script language="javascript">';
       echo'window.location.href = "index.php"';
      echo' </script>'; 
 

    
?>