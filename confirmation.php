<?php 

include("common/topscript.php");
$code = $_GET["code"];
require_once "Database/database.php"; 

$database = new Database();
$selectedStudent = $database->getStudentByCode($code);


	

?>
<html lang="en">
    <head>
        
       
    </head>
    <body>
         <?php include("common/navbar.php");?>

         <main style="margin-top: 8px;" >
                <div class="container-fluid card" style="width: 80%; margin-left: 10%; padding: 18px;">
                	<p>Dear <strong><?php echo $selectedStudent["st_name"]; ?></strong>,your Enrollment Exam form for <?php echo $selectedStudent["st_course"]; ?>  has been received. Your registration code is <center><br><strong><font size="7"><?php echo $selectedStudent["st_code"]; ?></font></strong></center> to print Entrance Card. <font color="green">Please kindly wait till the form gets verified by the Admin.</font></p>

                	<p>You will be notified via sms and email.</p>
                	<p> You are requested to use registration code to print Entrance Card.</p>
                	<b>Please make sure you have securely copied or snapped your registration code for future references.</b>

                </div>
         </main>
          <?php include("common/footer.php");?>
     </body>
          

