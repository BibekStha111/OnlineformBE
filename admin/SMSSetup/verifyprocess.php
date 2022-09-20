<?php require_once "../Database/database.php"; 
require_once "../Database/util.php"; 
$database = new Database();
$util = new Util();
$conn=$database->config();

$studentID = $_POST["student_id"];
$symbolNo = $_POST["verify_symbolno"];




  
   $query = 'UPDATE tbl_students set st_status ="Verified", 
              st_symbolno ="'.$symbolNo.'" WHERE st_id = '.$studentID;
  

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