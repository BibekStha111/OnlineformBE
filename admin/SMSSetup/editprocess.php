<?php require_once "../Database/database.php"; 
require_once "../Database/util.php"; 
$database = new Database();
$util = new Util();
$conn=$database->config();
$stCode = $_POST["st_code"];
$stEmail = $_POST["st_email"];
$stName= $_POST["st_name"];
$stDOB= $_POST["st_dob"];
$stQualification = $_POST["st_qualification"];


$stMobileNo= $_POST["st_mobno"];
$stParents= $_POST["st_parents"];
$stParentsMob= $_POST["st_parentsmob"];
$stAddress= $_POST["st_address"];
$stCourse= $_POST["st_course"];
$stCollege = $_POST["st_college"];





  
   $query = 'UPDATE tbl_students set 
   st_email ="'.$stEmail.'", 
              st_name ="'.$stName.'", 
              st_qualification ="'.$stQualification.'",

               st_dob ="'.$stDOB.'",
                st_mobno ="'.$stMobileNo.'",
                 st_parents ="'.$stParents.'",
                  st_parentsmob ="'.$stParentsMob.'",
                   st_address ="'.$stAddress.'",
                    st_course ="'.$stCourse.'",
                     st_college ="'.$stCollege.'


              " WHERE st_code ="'.$stCode.'"';
  echo $query;

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

