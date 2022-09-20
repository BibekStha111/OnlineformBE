<?php include("../common/topscript.php");?>
<html lang="en">
    <head>
        <?php include('../common/content.php');
        $id = $_GET['id'];
        $selectedCustomer = $database->getSingleCustomer($id);
        $selectedConnection = $database->getConnectionByCostumer($id);
        //print_r($selectedConnection);
        //die();
        ?>
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
                        <a href="bibaranprint.php?id=<?php echo $id;?>"> बिबरण प्रिन्ट गर्नुहोस ।  </a>
                    </div>
                    <div class="row">
                        <div class="col">
                        <!-- Form -->
                        <form method='post' action='addprocess.php' enctype="multipart/form-data" id="upload_form">
                        <br>
                        <div class="row">
                            <div class="col-md-8">
                                <h1>ग्राहक जानकारी</h1>
                            </div>
                            <div class="col-md-4">
                                <label><img src="../uploads/<?php echo $selectedCustomer["c_photo"];?>" style="width:150px;"/></label>
                            </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                          <label for="exampleInputPassword1">आवेदकको नाम</label>
                          <p><?php echo $selectedCustomer["c_name"];?></p>
                         </div>
                         <div class="form-group col-md-6">
                          <label for="exampleInputPassword1">पेसा / किसिम</label>
                          <p><?php echo $selectedCustomer["c_occupation"];?></p>
                         </div>
                        </div>
                        <div class="row">
                         <div class="form-group col-md-4">
                          <label for="exampleInputPassword1">बाबु वा पतिको नाम</label>
                          <p><?php echo $selectedCustomer["c_father_name"];?></p>
                         </div>
                         <div class="form-group col-md-4">
                          <label for="exampleInputPassword1">बाजे वा ससुराको नाम</label>
                          <p><?php echo $selectedCustomer["c_grandfather_name"];?></p>
                        </div>
                         <div class="form-group col-md-4">
                          <label for="exampleInputPassword1">घरधनीको नाम</label>
                          <p><?php echo $selectedCustomer["c_houseowner_name"];?></p>
                         </div>
                        </div>
                        <div class="row">
                         <div class="form-group col-md-12">
                          <label for="exampleInputPassword1">बिजुली जोड्ने पुरा ठेगाना</label>
                          <div class="row">
                            <div class="form-group col-md-3">
                                <label>घर न.</label>
                                <p><?php echo $selectedCustomer["c_house_no"];?></p>
                            </div>
                            <div class="form-group col-md-3">
                                <label>टोल</label>
                                <p><?php echo $selectedCustomer["c_house_tole"];?></p>
                            </div>
                            <div class="form-group col-md-3">
                                <label>वडा न.</label>
                                <p><?php echo $selectedCustomer["c_house_ward"];?></p>
                            </div>
                            <div class="form-group col-md-3">
                                <label>गा.वि.स /न.पा</label>
                                <p><?php echo $selectedCustomer["c_house_vdc"];?></p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="form-group col-md-4">
                                    <label>जिल्ला</label>
                                    <p><?php echo $selectedCustomer["c_house_district"];?></p>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>फोन न.</label>
                                    <p><?php echo $selectedCustomer["c_house_phone"];?></p>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>बनावट</label><br>
                                    <p><?php echo $selectedCustomer['c_house_type'];?></p>
                                </div>
                          </div>
                         </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">बिजुली जडान हुने संस्थाको विवरण</label>
                                <p><?php echo $selectedCustomer['c_place_detail'];?></p>
                          </div>
                          <div class="form-group col-md-6">
                                <label>तला</label>
                                <p><?php echo $selectedCustomer["c_place_storey"];?></p>
                          </div>
                         </div>
                        
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">घरको बनावट</label>
                                <p><?php echo $selectedCustomer['c_house_structure'];?></p>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">जम्मा कोठा(किचेन बाथरूम बाहेक)</label>
                                <p><?php echo $selectedCustomer["c_house_totalroom"];?></p>
                            </div>
                        </div>
                        <div class="row">
                         <div class="form-group col-md-12">
                          <label for="exampleInputPassword1">वायारिंग गर्ने ठेकेदारको नाम र ठेगाना</label>
                        
                          <p><?php echo $selectedCustomer["c_contractor_name"];?></p>
                         
                         </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label>पहिले बत्ति भए विवरण</label>
                            </div>
                            <div class="form-group col-md-2">
                                <label>ग्राहक न.</label>
                                <p><?php echo $selectedCustomer["c_old_customerno"];?></p>
                            </div>
                            <div class="form-group col-md-2">
                                <label>साल</label>
                                <p><?php echo $selectedCustomer["c_old_year"];?></p>
                            </div>
                            <div class="form-group col-md-2">
                                <label>ग्राहकको नाम</label>
                                <p><?php echo $selectedCustomer["c_old_customer_name"];?></p>
                            </div>
                            <div class="form-group col-md-3">
                                <label>बाबु वा पतिको नाम</label>
                                <p><?php echo $selectedCustomer["c_old_customer_fname"];?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label>माग गरेको बत्तिको उपयोग</label>
                                <p><?php echo $selectedCustomer['c_electricity_use'];?></p>
                            </div>
                            <div class="form-group col-md-4">
                                <label>किसिम</label>
                                <p><?php echo $selectedCustomer['c_line_type'];?></p>
                            </div>
                            <div class="form-group col-md-4">
                                <label>आवेदन दिएको नाममा पुरानो बक्यौता</label>
                                <p><?php echo $selectedCustomer['c_deposited'];?></p>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-2">
                            <label>(छ भने)</label>
                        </div>
                          <div class="form-group col-md-2">
                                <label>ग्राहक न.</label>
                                <p><?php echo $selectedCustomer["c_deposited_customerno"];?></p>
                          </div>
                          <div class="form-group col-md-3">
                                <label>ग्राहकको नाम</label>
                                <p><?php echo $selectedCustomer["c_deposited_customer_name"];?></p>
                          </div>
                          <div class="form-group col-md-3">
                                <label>बक्यौता रकम</label>
                                <p><?php echo $selectedCustomer["c_deposited_amount"];?></p>
                          </div>
                          <div class="form-group col-md-2">
                                <label>ठेगाना</label>
                                <p><?php echo $selectedCustomer["c_deposited_customer_address"];?></p>
                          </div>
                          </div>
                          <div class="row">
                          <div class="form-group col-md-4">
                                <label>ग्राहक न.</label>
                                <p><?php echo $selectedCustomer["c_number"];?></p>
                          </div>
                          <div class="form-group col-md-4">
                                <label>कम्प्युटर प्रणाली कोड</label>
                                <p><?php echo $selectedCustomer["c_code"];?></p>
                          </div>
                          <div class="form-group col-md-4">
                                <label>स्वीकृत क्षमता</label>
                                <p><?php echo $selectedCustomer["c_electricity_capacity"];?></p>
                          </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <label>सामग्री विवरण</label>
                              </div>
                          </div>


                        </form>
                        </div>
                       
                    </div>
                    <div class="row">
                        
                                <h3>जडान विवरण</h3>
                                <?php
                                
                                    include("../connection/connectiondetail.php");
                                    //echo '<a href="../fmember/add.php?id='.$selectedMale['mm_id'].'" class="btn btn-primary">थप्नुहोस</a>';
                                
                                ?>
                    
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


