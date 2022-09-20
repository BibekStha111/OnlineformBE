<?php include("../common/topscript.php");?>
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
                        <h1 class="mt-4">मीटर रिडिंग विवरण</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">मीटर रिडिंग विवरण</li>
                        </ol>

                       
                        <div class="card mb-4">
                           
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>त्र.श</th>
                                                <th>मिति</th>
                                                <th>ग्राहक न.</th>
                                                <th>हाल रिडिंग</th>
                                                <th>अघिल्लो रिडिंग</th>
                                                <th>रिडिंग महिना</th>
                                                <th>रिडिंग कोड</th>
                                                <th>रिडर</th>
                                              
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            
                                            <?php
                                             if(empty($reading[0]["rd_id"])){
                                                echo "No items on cart";
                                              }else{
                                            foreach($reading as $row) {
                                                $deleteBtnId = "deletebtn".$row["rd_id"];
                                                # code...
                                                echo '<tr>
                                                
                                                <td>'.$row["rd_id"].'</td>
                                                <td>'.$row["rd_date"].'</td>
                                                <td>'.$row["rd_customerno"].'</td>
                                                <td>'.$row["rd_currentreading"].'</td>
                                                <td>'.$row["rd_prevreading"].'</td>
                                                <td>'.$row["rd_readingmonth"].'</td>
                                                <td>'.$row["rd_rdcode"].'</td>
                                                <td>'.$row["rd_reader"].'</td>
                                               
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
