<?php require_once "../Database/database.php"; 
require_once "../Database/util.php"; 
$database = new Database();
$util = new Util();
$conn=$database->config();

$provider= $_POST["sms_provider"];
$apiTItle = $_POST["sms_api"];
$message= $_POST["sms_message"];
$apikey=$_POST["sms_apikey"];
$emailmsg = $_POST["sms_emailmsg"];





$encpass = md5($password);
$query="insert into tbl_sms_settings (sms_provider,sms_sender_api,sms_message,sms_apikey,sms_emailmessage) VALUES ('$provider','$apiTItle','$message','$apikey','$emailmsg')";
//echo $query;
   
    $result = $database->executeSQL($query);
    if($result){//if $result was right then print data recorded and if wrong print not recorded 
      echo'<a href="index.php"></a>';
      echo'<script language="javascript">';
       echo'window.location.href = "index.php"';
      echo' </script>'; 
     
    }
    else{
       
       // die();
         print (mysqli_error($conn));
    }
    
?>