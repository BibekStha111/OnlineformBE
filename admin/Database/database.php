<?php 
//require_once("../common/topscript.php");
  class Database{
     // public $conn;
    public function __construct(){

        // $this->dbCon=mysql_connect('localhost','root','')or die(mysql_close());
        // $selDb=mysql_select_db('accounting')or die(mysql_error());
        //$selDb=mysql_select_db('company_db')or die(mysql_error());
    }
    // public function config(){
    // $host = 'localhost';
    // $database = 'db_mbman';
    // $user = 'root';
    // $password = 'root';
    // $connection  = mysqli_connect($host, $user, $password, $database); 
    // return $connection;
    // }

   public function config(){
    $host = 'localhost';
    $database = 'onlinereg'; 

    $user = 'root';
    $password = '';
    $connection  = mysqli_connect($host, $user, $password, $database); 
    return $connection;
    }

   public function backupDatabase(){
      $date = date("Y/m/d");
      $dbhost = 'localhost';
      $dbuser = 'root';
      $dbpass = 'root';
      $dbname = 'db_mbman';
      $mysqldump=exec('which mysqldump');


      $command = "$mysqldump --opt -h $dbhost -u $dbuser -p $dbpass $dbname > $dbname-".$date."sql";

      exec($command);
    }

    public function executeSQL($sql){
      //echo $sql;
      $resultArray=array();
      $result=mysqli_query($this->config(),$sql);
     // print_r($result);
      return $result;
    }

   

    public function getAllStudents(){
      $students = array();  
      $sql='SELECT * FROM tbl_students ORDER BY st_id DESC';
      //echo $sql;
      $result =$this->executeSQL($sql);
      if(mysqli_num_rows($result)>0){
        while ($row=mysqli_fetch_assoc($result)) {
          array_push($students,$row);
          }
      }
      else{
      return false;
      }
      return $students;
    }
      
    public function getPriorityForms(){
      $priorities = array();  
      $sql='SELECT * FROM tbl_priority ORDER BY pr_id DESC';
      //echo $sql;
      $result =$this->executeSQL($sql);
      if(mysqli_num_rows($result)>0){
        while ($row=mysqli_fetch_assoc($result)) {
          array_push($priorities,$row);
          }
      }
      else{
      return false;
      }
      return $priorities;
    }
      
      public function getSinglePriorityForm($prID){
      $priorities = array();  
      $sql='SELECT * FROM tbl_priority WHERE pr_id ="'.$prID.'"';
     // echo $sql;
      $result =$this->executeSQL($sql);
      if(mysqli_num_rows($result)>0){
        while ($row=mysqli_fetch_assoc($result)) {
          array_push($priorities,$row);
          }
      }
      else{
      return false;
      }
      return $priorities[0];
    }

    public function getVerifiedStudents(){
      $students = array();  
      $sql='SELECT * FROM tbl_students WHERE  st_status = "Verified"';
      //echo $sql;
      $result =$this->executeSQL($sql);
      if(mysqli_num_rows($result)>0){
        while ($row=mysqli_fetch_assoc($result)) {
          array_push($students,$row);
          }
      }
      else{
      return false;
      }
      return $students;
    }

    public function getVerifiedMobileNos(){
      $students = array();  
      $sql='SELECT st_mobno FROM tbl_students WHERE  st_status = "Verified"';
      //echo $sql;
      $result =$this->executeSQL($sql);
      if(mysqli_num_rows($result)>0){
        while ($row=mysqli_fetch_assoc($result)) {
          array_push($students,$row);
          }
      }
      else{
      return false;
      }
      return $students;
    }

    public function getStudentById($id){
      $students = array();  
      $sql='SELECT * FROM tbl_students WHERE st_id = "'.$id.'"';
      
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

     public function getTokenFromUser($username){
      $tokens = array();
      $sql = 'SELECT session_token FROM tbl_admin_sessions WHERE session_user = "'.$username.'" ORDER BY admin_sessions_id DESC';
      $result = $this->executeSQL($sql);
      if(mysqli_num_rows($result)>0){
        while ($row=mysqli_fetch_assoc($result)) {
          array_push($tokens,$row);
        }
      }
      else{
        return false;
      }
      return $tokens[0]["session_token"];
    }


     public function getSMSsettings(){
      $settings = array();  
      $sql='SELECT * FROM tbl_sms_settings ORDER BY sms_id DESC';
    //  echo $sql;
      $result =$this->executeSQL($sql);
      if(mysqli_num_rows($result)>0){
        while ($row=mysqli_fetch_assoc($result)) {
          array_push($settings,$row);
          }
      }
      else{
      return false;
      }
      return $settings;
    }

    


  }

?>
