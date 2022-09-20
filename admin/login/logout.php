<?php 
	require_once("../common/session.php");
	$token = $_SESSION["token"];

	
		session_destroy();
		echo'<a href="index.html"></a>';
      echo'<script language="javascript">';
       echo'window.location.href = "index.html"';
      echo' </script>';
	

?>