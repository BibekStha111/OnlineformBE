<?php
	require_once('../Database/database.php');
	$database = new Database();
	 $todayDate = date("Y/m/d");
	
	$dueReadings = $database->getAllDueReadingTransactions();
	if($dueReadings==null){

	}
	else{
	foreach ($dueReadings as $row) {
		# code...
		$readDate = $row["tr_date"];
		$amount = $row["tr_cramt"];
		$customer = $row["tr_customerno"];
		$code = $row["tr_code"];

		$finalPayCode = str_replace("RD-", "FNR-", $code);

		$fineRebate = $database->getSelectedFineOrRebate($finalPayCode);
		$start = strtotime($readDate);
		 $end = strtotime($todayDate);

		 $daysBtn = ceil(abs($end - $start) / 86400);
		print_r("DAYS---".$daysBtn);
	}

		if($daysBtn<=7){
			$fnAmt = 0.02*$amount;
			if($fineRebate[0]["tr_code"]==""){
				$sql="insert into tbl_transactions(tr_customerno,tr_particular,tr_date,tr_dramt,tr_cramt,tr_code,tr_status,tr_channel,tr_remarks) values ('$customer','REBATE','$todayDate','$fnAmt','0','$finalPayCode','DUE','REBATE','Rebate-$readDate')";
			}
			 else{
				$sql="UPDATE tbl_transactions SET tr_dramt = '$fnAmt',tr_date='$todayDate' WHERE tr_code = '$finalPayCode'";

				


			 }
			}



		
		else if($daysBtn<=22){
			
			$sql="UPDATE tbl_transactions SET tr_dramt = '0.00', tr_cramt='0.00' WHERE tr_code = '$finalPayCode'";


		}
		else if($daysBtn<=30){
			$fnAmt=0.05*$amount;
			if($fineRebate[0]["tr_code"]==""){
				$sql="insert into tbl_transactions(tr_customerno,tr_particular,tr_date,tr_dramt,tr_cramt,tr_code,tr_status,tr_channel,tr_remarks) values ('$customer','FINE --','$todayDate','0.0','$fnAmt','$finalPayCode','DUE','FINE','FINE-$readDate')";
			}
			 else{
				$sql="UPDATE tbl_transactions SET tr_particular='FINE',tr_dramt = '0', tr_cramt = '$fnAmt',tr_channel='FINE',tr_date='$todayDate' WHERE tr_code = '$finalPayCode'";


			}

		}
		else if($daysBtn<=40){
			$fnAmt=0.1*$amount;
			if($fineRebate[0]["tr_code"]==""){
				$sql="insert into tbl_transactions(tr_customerno,tr_particular,tr_date,tr_dramt,tr_cramt,tr_code,tr_status,tr_channel,tr_remarks) values ('$customer','FINE --','$todayDate','0.0','$fnAmt','$finalPayCode','DUE','FINE','FINE-$readDate')";
			}
			 else{
				$sql="UPDATE tbl_transactions SET tr_particular='FINE',tr_dramt = '0', tr_cramt = '$fnAmt',tr_channel='FINE' WHERE tr_code = '$finalPayCode'";


			}

		}
		else if($daysBtn>40){
			$fnAmt=0.25*$amount;
			if($fineRebate[0]["tr_code"]==""){
				$sql="insert into tbl_transactions(tr_customerno,tr_particular,tr_date,tr_dramt,tr_cramt,tr_code,tr_status,tr_channel,tr_remarks) values ('$customer','FINE --','$todayDate','0.0','$fnAmt','$finalPayCode','DUE','FINE','FINE-$readDate')";
			}
			 else{
				$sql="UPDATE tbl_transactions SET tr_particular='FINE',tr_dramt = '0', tr_cramt = '$fnAmt',tr_channel='FINE' WHERE tr_code = '$finalPayCode'";

			}


		}
		 echo $sql;
		 $resultFine=$database->executeSQL($sql);
		// if($result){
		// 	echo 'Fines Updated Sucessfully';
		// }else{
		// 	echo 'Fines Not Updated';
		// }

	}

	
?>