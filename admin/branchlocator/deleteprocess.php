<?php require_once "../Database/database.php"; 
      $database = new Database();

      $studentId = $_POST["st_id"];
      $sql = 'DELETE FROM tbl_students WHERE st_id = "'.$studentId.'"';

      $result = $database->executeSQL($sql);
      if($result){
        echo'<a href="index.php"></a>';
      echo'<script language="javascript">';
       echo'window.location.href = "index.php"';
      echo' </script>';   
        //header("location:index.php");
      }
      else{

      }
   
  
 
?>