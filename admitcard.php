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
    <body style="width: 8.5in;">
         <?php include("common/cardheader.php");?>

         <main style="margin-top: 8px;" >
                <div class="container-fluid" style="width:100%; padding: 18px;">
                   <table class="table table-borderless" style="width:90%;">
                       <tr>
                         <td>
                                <img src="uploads/<?php echo $selectedStudent["st_photo"];?>.png" style="width: 180px;"> <br/>
                                <?php 
                                    $status = $selectedStudent["st_status"];
                                    if($status == "New"){
                                         echo '
                                        <img src="images/stamp.png" style="width: 150px; margin-top: -270px; margin-left:110px;"/>
                                        <h2><p style="width: 150px;margin-top: 5px; margin-left: 150px;"> UNVERIFIED </p></h2>';
                                    }
                                    
                                    else{
                                        echo '
                                        <img src="images/stamp.png" style="width: 150px; margin-top: -275px; margin-left:110px; "/>
                                       
                                        
                                        <img src="images/signature.png" style="width:80px; margin-left:-105px; margin-top:-30px;"/>';
                                        echo '<p style="width: 150px;margin-top: 5px; margin-left: 150px; justify-content:right"> Verified By <br/> Bibek Shrestha<br/> Registrar<br/> </p>';
                                    }
                                ?>
                                 
                            </td>
                            <td style="line-height: 40px; font-size: 19px;">
                                
                                <span style="color: red; line-height: 40px;" ><strong>SYMBOL NO: <?php echo $selectedStudent["st_symbolno"];?> </strong></span><br/> 
                                FULL NAME: <?php echo $selectedStudent["st_name"];?> <br/> 
                                DATE OF BIRTH: <?php echo $selectedStudent["st_dob"];?> <br/> 
                                Email: <?php echo $selectedStudent["st_email"];?> <br/> 
                                 Program: <?php echo $selectedStudent["st_course"];?> <br/> 

                            </td>
                            
                           
                        </tr>
                   </table>
                   <hr/>
                   <div > 

                        <h4 style="font-weight:bold;">Instructions to the applicant</h4>
                                        <ol style="font-size:14px;line-height:18px;">
                                            <li style="line-height:18px;margin-bottom:15px;text-align: justify;">Applicant will NOT be allowed to enter into the examination hall without valid admission card. If lost, a provisional card will be issued on application along with payment of NRs. 300 and a recent photograph one day before exam.</li>
                                            <li style="line-height:18px;margin-bottom:15px;text-align: justify;">Candidate must arrive at the examination hall 15 MINUTES before the commencement of examination.</li>
                                            <li style="line-height:18px;margin-bottom:15px;text-align: justify;">Candidate will NOT be allowed to enter the examination hall 30 MINUTES after the commencement of examination time.</li>
                                            <li style="line-height:18px;margin-bottom:15px;text-align: justify;">Candidate MUST follow the assigned seat plan in the examination hall.</li>
                                            <li style="line-height:18px;margin-bottom:15px;text-align: justify;">Any form of misconduct or incriminating activities found during or after examination shall result in the CANCELLATION of his/her entrance examination without any warning.</li>
                                            <li style="line-height:18px;margin-bottom:15px;text-align: justify;">Candidate is STRICTLY PROHIBITED to bring any kind of mobile phone, camera, programmable calculator or other electronic devices in the examination hall. The <span style="text-decoration:underline;font-weight:bold;">business/general calculator</span> is only allowed for exam purpose.</li>
                                        </ol>
                   </div>

                </div>
               <button id="printbtn" onclick="printthis();">Print</button>
         </main>
          
     </body>
     </html>


     <script>
         function printthis(){
             document.getElementById("printbtn").style.display = "none";
    
    
    window.print();
         }
     </script>