<?php 
class Util{
     // public $conn;
      public function __construct(){

       

      }
      public function uploadImage($image){
         $target_dir = "../uploads/";
$target_file = $target_dir . basename($image["name"]);
echo $_FILES["image"]["name"];


$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($image["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 1;
}
// Check file size
if ($image["size"] > 3000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($image["tmp_name"], $target_file)) {
       // echo "The file ". basename( $_FILES["item_image"]["name"]). " has been uploaded.";
       echo'<a href="index.php"></a>';
       echo'<script language="javascript">';
        echo'window.location.href = "index.php"';
       echo' </script>';
      //header('location:index.php'); 
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}
      
public  function generateToken(){
    $token = "";
    $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
    $codeAlphabet.= "0123456789";
    $max = strlen($codeAlphabet);
  // for ($i=0; $i < 25; $i++) {
    //   $token .= $codeAlphabet[random_int(0, $max-1)];
   //}
   return $token;
}

public  function generateSymbolNo(){
    $symbolno = "";
    $codeAlphabet.= "0123456789";
    $max = strlen($codeAlphabet);
   for ($i=0; $i < 4; $i++) {
       $symbolno .= $codeAlphabet[random_int(0, $max-1)];
   }
   return $symbolno;
}

   
public function saveToken($userName, $token){
    $date = date("Y-m-d");
     
     
     

 }



  }
?>
