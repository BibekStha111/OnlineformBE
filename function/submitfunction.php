<?php 
require_once "../Database/database.php"; 
require_once "../Database/util.php"; 
$database = new Database();
$util = new Util();
$conn=$database->config();


$stEmail = $_POST["st_email"];
$stName= $_POST["st_name"];
$stDOB= $_POST["st_dob"];
$stQualification = $_POST["st_qualification"];
$stVoucher= $_FILES["st_voucher"];

$photo = $_FILES["st_photo"];
//$photoName = $photo["name"];
$stGradesheetxi= $_FILES["st_gradesheetxi"];
$stGradesheetxii= $_FILES["st_gradesheetxii"];

$stMobileNo= $_POST["st_mobno"];
$stParents= $_POST["st_parents"];
$stParentsMob= $_POST["st_parentsmob"];
$stAddress= $_POST["st_address"];
$stCourse= $_POST["st_course"];
$stCollege = $_POST["st_college"];
$stStatus= "New";
$stCode= $util->generateToken();

$photoName = "photo-".$stCode;

$stGradesheetName = "gs-".$stCode;

$stGradesheetXiiName = "gsxii-".$stCode;


$voucerName = "vr-".$stCode;



$util->uploadImage($photo,$photoName);
$util->uploadImage($stVoucher,$voucerName);
$util->uploadImage($stGradesheetxi,$stGradesheetName);

$util->uploadImage($stGradesheetxii,$stGradesheetXiiName);

if($stName=="" ||$stDOB=="" ||$stQualification==""  ||$stMobileNo=="" ||$stAddress=="" ||$stCourse=="" ||$stCollege==""||$stVoucher["name"]==""||$photo["name"]==""){
    
    echo 'Invalid data. ';
}
else{
$query="insert into tbl_students(st_email,st_name,st_qualification,st_dob,st_photo,st_voucher,st_gradesheetxii,st_gradesheet,st_mobno,st_parents,st_parentsmob,st_address,st_course,st_college,st_status,st_code)
         values ('$stEmail', '$stName', '$stQualification','$stDOB', '$photoName','$voucerName','$stGradesheetXiiName', '$stGradesheetName', '$stMobileNo', '$stParents', '$stParentsMob', '$stAddress', '$stCourse','$stCollege', '$stStatus', '$stCode')";
//echo $query;
        
        

   
    $result = $database->executeSQL($query);
    if($result){//if $result was right then print data recorded and if wrong print not recorded 
      header('location:../confirmation.php?code='.$stCode);
     // $util->uploadImage($image);
    }
    else{
       
       // die();
         print (mysqli_error($conn));
    }
}
    
?>