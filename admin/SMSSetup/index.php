<?php include("../common/topscript.php");
   
?>
<html lang="en">
    <head>
        <?php include('../common/content.php');?>
       
    </head>
    <body class="sb-nav-fixed">
         <?php include("../common/navbar.php");?>
          

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php include("../common/sidebar.php");?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">SMS & Email Setup</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">SMS & Email Setup</li>
                             <li class="breadcrumb-item active">
                               <button class="btn btn-primary" data-toggle="modal" data-target="#addsetupmodal"><i class="fas fa-user-plus" style="color:#fff;"></i></button>
                            </li>
                        </ol>
                        <?php include('add.php');?>

                       
                        <div class="card mb-4">
                           
                            <div class="card-body">
                                <div class="table-responsive">
                                    
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Provider</th>
                                                <th>SMS API</th>
                                                <th>API Key</th>
                                                 <th>Message</th>
                                                 <th>Email</th>
                                                 
                                               
                                                
                                               
                                                 <th>DELETE</th>
                                              
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            
                                            <?php
                                             if(empty($smsSetup[0]["sms_id"])){
                                                echo "No items ";
                                              }else{
                                            foreach($smsSetup as $row) {
                                               
                                                
                                                # code...
                                                echo '<tr>
                                                
                                                <td>'.$row["sms_id"].'</td>
                                                 <td>'.$row["sms_provider"].'</td>
                                                <td>'.$row["sms_sender_api"].'</td>
                                                <td>'.$row["sms_apikey"].'</td>
                                                 <td>'.$row["sms_message"].'</td>
                                                <td>'.$row["sms_emailmessage"].'</td>
                                                 
                                                
                                                <td> 
                                                
                                                </td>
                                               
                                            </tr>';

                                            }
                                        }?>

                                            
                                            
                                        </tbody>

                                    </table>


                                     
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <?php include("../common/footer.php");?>
            </div>
        </div>
        <?php 
         //     function edit($customerID){
         //        $_GET["customer_id"]= $customerID;
         // include("../modals/editcustomermodal.php");
         //    }
        ?>
       <?php include("../common/footerscript.php");?>
    </body>
   
</html>
