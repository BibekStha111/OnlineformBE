<?php 
	include("../common/topscript.php");
	include("../common/content.php");
	include("../Database/util.php");
	include("../config.php");
	$customerID = $_GET["customer_id"];
	$selectedOtr = $database->getOtrByCustomer($customerID);
	$singleOtr = $selectedOtr[0];
	
	$util = new Util();

	 $duration = $util->calculateDuration($singleOtr["otr_start_date"], $singleOtr["otr_end_date"]);
                                $inYear = $util->calculateTimeInYear($duration);
                                $interest = $util->calculateInterest($singleOtr["otr_amount"],$inYear,$singleOtr["scheme_int_rate"]);
                                $total = $singleOtr["otr_amount"]+$interest;




?>

<div class="container">
	<div class="row card">
		
		<div style="font-family: monospace;">
		<h3 class="text-center"><?php echo $pasalName;?></h3>
		<p class="text-center"> <?php echo $pasalAddress.' Contact: '.$pasalContact;?></p>
		<p class="text-center"> Details for  <?php echo $singleOtr["otr_desc"];?></p>
	</div>
		<hr/>

		<?php $customer = $database->getCustomerById($customerID);?>
		<div style="font-family: monospace; padding: 14px; font-size: 14pt;">
		<table class="" style="width: 100%; font-size: 14pt;">
			<tr><td>Name : <?php echo $customer["customer_name"];?></td> <td>Address: <?php echo $customer["customer_address"];?></td></tr>


		 <tr><td><?php echo $singleOtr["otr_type"];?> Amount : <?php echo $singleOtr["otr_amount"];?></td> <td>Interest Rate: <?php echo $singleOtr["scheme_int_rate"];?> % </td></tr>

		 <tr><td> From : <?php echo $singleOtr["otr_start_date"];?> </td><td> To: <?php echo $singleOtr["otr_end_date"];?></td> <td> Duration: <?php echo $duration?></td></tr>

		 	<tr><td> Interest Amount Rs.: <?php echo $interest;?></td></tr>         
		 		<tr><td></td><td></td><td>Total: Rs. <?php echo $total;?> </td></tr>
		 	</table>

		 </div>
		</table>
		 <p style="margin-left: 18px;">Authorized Signature: </p>

		
</div>
</div>