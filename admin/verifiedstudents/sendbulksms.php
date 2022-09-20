<?php require_once "../Database/database.php"; 
require_once "../Util/sendsms.php"; 
$database = new Database();
$smsSetting = $database->getSMSsettings();
$verifiedStudents = $database->getVerifiedStudents();
$token = $smsSetting[0]["sms_apikey"];
$messageStatic = $smsSetting[0]["sms_sms"];
$sendSMS = new SendSMS();
foreach ($verifiedStudents as $row) {
 	# code...
 	$messageInt = str_replace("<code>", $row["st_code"], $messageStatic);
 	$messageFinal = str_replace("<symbolno>", $row["st_symbolno"], $messageInt);
 	$sendSMS->sendMessage($token,$row["st_mobno"],$messageFinal);
 }
echo'<a href="index.php"></a>';
      echo'<script language="javascript">';
       echo'window.location.href = "index.php"';
      echo' </script>'; 
?>