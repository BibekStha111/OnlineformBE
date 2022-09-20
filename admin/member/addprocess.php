<?php
require_once "../Database/database.php"; 
require_once "../Database/util.php"; 
$database = new Database();
$util = new Util();
$conn=$database->config();


$name = $_POST["name"];
$occupation = $_POST["occupation"];
$fname = $_POST["fname"];
$gfname = $_POST["gname"];
$howner = $_POST["oname"];
$house = $_POST["hno"];
$tole = $_POST["tole"];
$ward = $_POST["ward"];
$vdcmun = $_POST["vdc"];
$district = $_POST["district"];
$phone = $_POST["phone"];
$house_type = $_POST["house_type"];
$house = $_POST["house"];
$storey = $_POST["floor"];
$structure = $_POST["house_structure"];
$rooms = $_POST["rooms"];
$contname = $_POST["contname"];
$oldcnum = $_POST["oldcnum"];
$olddate = $_POST["olddate"];
$oldcname = $_POST["oldcname"];
$oldcfname = $_POST["oldcfname"];
$use = $_POST["use"];
$new = $_POST["new"];
$deposited = $_POST["form"];
$prevduecustno = $_POST["cnum"];
$prevduecustname = $_POST["cname"];
$prevdueadd = $_POST["caddress"];
$prevdueamt = $_POST["camt"];
// $custno = $_POST["custno"];
// $csystemcode = $_POST["custcode"];
// $load = $_POST["load"];
$image=$_FILES["image"];
$imageName = $_FILES["image"]["name"];
$area = $_POST["area"];



$query="insert into tbl_customer(c_name,c_occupation,c_father_name,c_grandfather_name,c_houseowner_name,c_house_no,c_house_tole,c_house_ward,c_house_vdc,c_house_district,c_house_phone,c_house_type,c_place_detail,c_place_storey,c_house_structure,c_house_totalroom,c_contractor_name,c_old_customerno,c_old_year,c_old_customer_name,c_old_customer_fname,c_electricity_use,c_line_type,c_deposited,c_deposited_customerno,c_deposited_customer_name,c_deposited_customer_address,c_deposited_amount,c_photo,c_area)
         values ('$name', '$occupation', '$fname', '$gfname', '$howner', '$house', '$tole', '$ward', '$vdcmun', '$district', '$phone', '$house_type', '$house', '$storey', '$structure', '$rooms', '$contname', '$oldcnum', '$olddate', '$oldcname', '$oldcfname', '$use', '$new', '$deposited', '$prevduecustno', '$prevduecustname', '$prevdueadd', '$prevdueamt', '$imageName', '$area')";
       
        // die();
   
    $result = $database->executeSQL($query);
    if($result){//if $result was right then print data recorded and if wrong print not recorded 
      //header('location:index.php');
      $util->uploadImage($image);
    }
    else{
       
       // die();
         print (mysqli_error($conn));
    }
    
?>