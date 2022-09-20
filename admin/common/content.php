<?php 
	require_once('../Database/database.php');
	require_once('../Database/util.php');
	$util = new Util();
	
	$database = new Database();
	
	
	$students = $database->getAllStudents();
	$verifiedStudents = $database->getVerifiedStudents();


	$verifiedNumbers = $database->getVerifiedMobileNos();
	$priorityForms = $database->getPriorityForms();
	
	
	
?>