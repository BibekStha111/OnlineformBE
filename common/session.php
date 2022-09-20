<?php if(session_status() == PHP_SESSION_NONE){
   
    session_start();
}

	 require_once("../Database/database.php");
	 $database = new Database();
//	echo 'The token is'.$_SESSION["token"];
	 $userName = $_SESSION["username"];
	 $token = $_SESSION["token"];
	 
	 

	// echo $userName;
	// echo 'The user is='.$userName;
	// die();

	
	

	 $databaseToken = $database->getTokenFromUser($userName);

	 
	if($token==$databaseToken){
		if($token==""){
		//	header("location:../login/");
				echo'<a href="../dashboard/"></a>';
      echo'<script language="javascript">';
       echo'window.location.href = "../login/"';
      echo' </script>';
		}
		
	}
	else{
	//	header("location:login/");
			echo'<a href="../Dashboard/"></a>';
      echo'<script language="javascript">';
       echo'window.location.href = "../login/"';
      echo' </script>';
	}


	


?>