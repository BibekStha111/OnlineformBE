<?php require_once "../Database/database.php"; 
require_once "../Database/util.php"; 
$database = new Database();
$util = new Util();
$conn=$database->config();

$name = $_POST["name"];
$login = $_POST["login"];
$password = $_POST["password"];


$encpass = md5($password);
$query="insert into tbl_meterreader(reader_name,reader_login,reader_password) 
        values ('$name','$login','$encpass')";
   
    $result = $database->executeSQL($query);
    if($result){//if $result was right then print data recorded and if wrong print not recorded 
      echo'<a href="index.php"></a>';
      echo'<script language="javascript">';
       echo'window.location.href = "index.php"';
      echo' </script>'; 
      //header('location:index.php');
      //$util->uploadImage($image);
    }
    else{
       
       // die();
         print (mysqli_error($conn));
    }
    
?>