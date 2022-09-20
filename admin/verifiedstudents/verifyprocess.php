<?php require_once "../Database/database.php"; 
require_once "../Database/util.php"; 
$database = new Database();
$util = new Util();
$conn=$database->config();

$studentID = $_POST["student_id"];
$symbolNo = $_POST["verify_symbolno"];

$student = $database->getStudentById($studentID);

$mobileNo = $student["st_mobno"];
$email = $student["st_email"];




  
   $query = 'UPDATE tbl_students set st_status ="Verified", 
              st_symbolno ="'.$symbolNo.'" WHERE st_id = '.$studentID;
  

    $result = $database->executeSQL($query);
    if($result){//if $result was right then print data recorded and if wrong print not recorded 
      $message = 'Dear '.$student["st_name"].', your application of code : '.$student["st_code"].' for entrance at Madan Bhandari Academy is verified. Your symbol number is '.$symbolNo.'.';

        
        mail("noreply@mbman.org.np",$email,$message);

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