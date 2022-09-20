<?php 
	require_once('../Database/database.php');
	require_once('../Database/util.php');
	$database = new Database();
	$util = new Util();
	require_once("../common/finesandrebate.php");
	$customer = $database->getCustomer();
	$connection = $database->getConnection();
	$reading = $database->getReadings();
	$area = $database->getArea();
	$counter = $database->getCounter();
	$reader = $database->getMeterReader();
	
?>