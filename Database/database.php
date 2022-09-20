<?php 
//require_once("../common/topscript.php");
  class Database{
     // public $conn;
    public function __construct(){

        // $this->dbCon=mysql_connect('localhost','root','')or die(mysql_close());
        // $selDb=mysql_select_db('accounting')or die(mysql_error());
        //$selDb=mysql_select_db('company_db')or die(mysql_error());
    }
    public function config(){
    $host = 'localhost';
    $database = 'onlinereg'; 

    $user = 'root';
    $password = '';
    $connection  = mysqli_connect($host, $user, $password, $database); 
    return $connection;
    }

    //  public function config(){
    //   $host = 'localhost';
    // $database = 'ehsnehd4_ragatdaan';
    // $user = 'ehsnehd4_ragat';
    // $password = 'ragatdaan123!';
    // $connection  = mysqli_connect($host, $user, $password, $database); 
    // return $connection;

    // }

   

    public function executeSQL($sql){
      //echo $sql;
      $resultArray=array();
      $result=mysqli_query($this->config(),$sql);
     // print_r($result);
      return $result;
    }

    public function getAllStudents(){
      $duetransactions = array();  
      $sql='SELECT * FROM tbl_students';
      echo $sql;
      $result =$this->executeSQL($sql);
      if(mysqli_num_rows($result)>0){
        while ($row=mysqli_fetch_assoc($result)) {
          array_push($duetransactions,$row);
          }
      }
      else{
      return false;
      }
      return $duetransactions;
    }

     public function getStudentByCode($code){
      $students = array();  
      $sql='SELECT * FROM tbl_students WHERE st_code = "'.$code.'"';
      
      $result =$this->executeSQL($sql);
      if(mysqli_num_rows($result)>0){
        while ($row=mysqli_fetch_assoc($result)) {
          array_push($students,$row);
          }
      }
      else{
      return false;
      }
      return $students[0];
    }



    


  }

?>
