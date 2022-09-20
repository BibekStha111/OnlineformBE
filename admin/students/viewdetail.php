<?php include("../common/topscript.php");?>
<html lang="en">
    <head>
        <?php include('../common/content.php');
        $code = $_GET['code'];
        $selectedStudent = $database->getStudentByCode($code);
       
        //print_r($selectedConnection);
        //die();
        ?>
        <style type="text/css">
          
          div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
        </style>
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
                    <div class="row">
                        <div class="container">
                            <form method="POST" action="print.php" enctype="multipart/form-data">
                                <input type="hidden" name="customer_id" value="<?php echo $id;?>">
                                <input type="submit" value="Print">
                            </form>
                        </div>
                        <a href="bibaranprint.php?id=<?php echo $id;?>">   </a>
                    </div>
                    <div class="row">
                        <div class="col">
                        <!-- Form -->
                        <form method='post' action='addprocess.php' enctype="multipart/form-data" id="upload_form">
                        <br>
                        <div class="row">
                            <div class="col-md-8">
                                <h1>Applicants Details</h1>
                            </div>
                            <div class="col-md-4">
                                <label><img src="../../uploads/<?php echo $selectedStudent["st_photo"];?>.png" style="width:150px;"/></label>
                            </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                          <label for="exampleInputPassword1">Students' Name</label>
                          <p><?php echo $selectedStudent["st_name"];?></p>
                         </div>
                         <div class="form-group col-md-6">
                          <label for="exampleInputPassword1">Address</label>
                          <p><?php echo $selectedStudent["st_address"];?></p>
                         </div>
                        </div>
                        <div class="row">
                         <div class="form-group col-md-4">
                          <label for="exampleInputPassword1">Date of Birth</label>
                          <p><?php echo $selectedStudent["st_dob"];?></p>
                         </div>
                         <div class="form-group col-md-4">
                          <label for="exampleInputPassword1">Email</label>
                          <p><?php echo $selectedStudent["st_email"];?></p>
                        </div>
                         <div class="form-group col-md-4">
                          <label for="exampleInputPassword1">Status</label>
                          <p><?php echo $selectedStudent["st_status"];?></p>
                         </div>
                          <div class="form-group col-md-4">
                          <label for="exampleInputPassword1">Program</label>
                          <p><?php echo $selectedStudent["st_course"];?></p>
                         </div>

                        </div>
                        <div class="row">
                         
                           <div class="col-md-4">
                           	
                             <div class="gallery">
                              <a target="_blank" href="../../uploads/<?php echo $selectedStudent["st_voucher"];?>.png">
                                <img class="img img-responsive img-thumnail" src="../../uploads/<?php echo $selectedStudent["st_voucher"];?>.png"/>
                              </a>
                                <div class="desc">Voucher</div>
                            </div>
                           </div>

                           <div class="col-md-4">
                            
                             <div class="gallery">
                              <a target="_blank" href="../../uploads/<?php echo $selectedStudent["st_gradesheet"];?>.png">
                                <img class="img img-responsive img-thumnail" src="../../uploads/<?php echo $selectedStudent["st_gradesheet"];?>.png"/>
                              </a>
                                <div class="desc">Class 11 Gradesheet</div>
                            </div>
                           </div>

                            <div class="col-md-4">
                            
                             <div class="gallery">
                              <a target="_blank" href="../../uploads/<?php echo $selectedStudent["st_gradesheetxii"];?>.png">
                                <img class="img img-responsive img-thumnail" src="../../uploads/<?php echo $selectedStudent["st_gradesheetxii"];?>.png"/>
                              </a>
                                <div class="desc">Class 12 Gradesheet</div>
                            </div>
                           </div>
                          

                         

                          

                        </div>
                        

                        
                        
                        
                        
                         
                         


                        </form>
                        </div>
                       
                    </div>
                    
        </div>
        </main>
                
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


