<?php 
require_once "../Database/database.php"; 
require_once "../Database/util.php"; 
$database = new Database();
$util = new Util();
$conn=$database->config();


$prName = $_POST["pr_name"];
$prSNO = $_POST["pr_sno"];
$prRank = $_POST["pr_rank"];
$prContact = $_POST["pr_contact"];
$prSchool = $_POST["pr_school"];
$prct = $_POST["pr_ct"];
$prFirst = $_POST["f_priority"];
$prSecond = $_POST["s_priority"];
$prThird = $_POST["t_priority"];

$prDoc = $_FILES["pr_document"];


$prCode= $util->generateToken();




$formName = "form-".$prCode;



$util->uploadImage($prDoc,$formName);




if($prName=="" ||$prSNO=="" ||$prRank==""  ||$prSchool=="" ||$prFirst=="" ||$prSecond=="" ||$prThird==""||$prDoc==""){
    
    echo 'Invalid data. ';
}
else{
$query="insert into tbl_priority(pr_name,pr_symbolno,pr_rank,pr_contact,pr_school,pr_firstp,pr_secondp,pr_thirdp,pr_prform, st_ct)
         values ('$prName', '$prSNO', '$prRank','$prContact', '$prSchool','$prFirst','$prSecond', '$prThird', '$formName','$prct')";
       // echo $query;
        

   
    $result = $database->executeSQL($query);
    if($result){//if $result was right then print data recorded and if wrong print not recorded 
      header('location:../priorityconfirm.php');
     // $util->uploadImage($image);
    }
    else{
       
       // die();
         print (mysqli_error($conn));
    }
}
    
?>