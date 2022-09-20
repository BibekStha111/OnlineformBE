<?php 
class Util{
     // public $conn;
      public function __construct(){

       

      }
      public function uploadImage($image,$imageName){
         $tmp=$image["tmp_name"];

         $extension =  $image["type"];

         
          $name=$imageName.".".$extension;

        move_uploaded_file($tmp, "../uploads/" . $imageName.".png");

         // echo "Your file is uploaded with ".$imageName." name and ".$extension ;   
       
      }
      
public  function generateToken(){
    $token = "";
    $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
    $codeAlphabet.= "0123456789";
    $max = strlen($codeAlphabet);
   for ($i=0; $i < 15; $i++) {
       $token .= $codeAlphabet[random_int(0, $max-1)];
   }
   return $token;
}
   




  }
?>
