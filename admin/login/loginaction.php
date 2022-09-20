<?php 
session_start();
 $host = 'localhost';
    $database = 'onlinereg'; 
    $user = 'root';
    $password = '';
    $conn = mysqli_connect($host, $user, $password, $database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

    
    $username1 = $_POST["username"];
	$username = strtolower($username1);
	$encpassword = $_POST["password"];

	
		 $sql = "SELECT user_email, user_password FROM tbl_user WHERE user_email = '".$username ."' AND user_password='".$encpassword."'";
  
   $result=mysqli_query($conn,$sql);
		  
   $count = mysqli_num_rows($result);
 if($count=='1'){

	   //echo "Logged In";
	   //die();
   		//$token = $util->generateToken();

   	
   		//die();
   		$_SESSION["username"]= $username;
       $_SESSION["username1"]=$row['user_fullname'];
   		//$_SESSION["token"]= $token;
   		//$util->saveToken($username,$token);
   		echo $_SESSION["username"];
		//die();


   		echo'<a href="../Dashboard/"></a>';
      echo'<script language="javascript">';
       echo'window.location.href = "../Dashboard/"';
      echo' </script>';
   }

   else{
	echo "Not Logged In";
	die();
		echo'<a href="../dashboard/"></a>';
		echo'<script language="javascript">';
		echo'window.location.href = "../Login/"';
		echo' </script>';
}
      

  


?>
  
   

?>