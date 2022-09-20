<?php include("../common/topscript.php");?>
<html lang="en">
    <head>
        <?php include('../common/content.php');?>
       
    </head>
    <body class="sb-nav-fixed">
         <?php include("../common/navbar.php");?>
          

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
               
            </div>
            <div id="layoutSidenav_content">
                <main>
                <div class="container-fluid card">
                
        <!-- Form -->
              <form method='post' action='addprocess.php' enctype="multipart/form-data" id="upload_form">
                    <br>
                        <h1>Register Online</h1>
                       
                        <div class="form-group">
                          <label for="exampleInputPassword1">Email Address*</label>
                          <input type="text" class="form-control" id="slider_caption_tf" name="name" required="true" />
                         </div>
                        
                         <div class="form-group">
                          <label for="exampleInputPassword1">Student's Full Name </label>
                          <input type="text" class="form-control" id="slider_caption_tf" name="occupation"/>
                         </div>
                      

                      <div class="row">

                        <div class="col-md-4">
                         <div class="form-group">
                          <label for="exampleInputPassword1">Passport Size photo </label>
                          <input type="file" class="form-control" id="slider_caption_tf" name="student_photo"/>
                         </div>
                       </div>
                          
                       <div class="col-md-4">
                         <div class="form-group">
                          <label for="exampleInputPassword1">Upload Bank Voucher </label>
                          <input type="file" class="form-control" id="slider_caption_tf" name="student_photo"/>
                         </div>
                       </div>
                    

                      <div class="col-md-4">
                         <div class="form-group">
                          <label for="exampleInputPassword1">Upload Gradesheet </label>
                          <input type="file" class="form-control" id="slider_caption_tf" name="student_photo"/>
                         </div>
                       </div>
                     </div>
                       
                         <div class="form-group">
                          <label for="exampleInputPassword1">Students Mobile Number</label>
                          <input type="text" class="form-control" id="slider_caption_tf" name="fname" required="true" />
                         </div>
                         <div class="form-group">
                          <label for="exampleInputPassword1">Parents' Name*</label>
                          <input type="text" class="form-control" id="slider_caption_tf" name="gname" required="true" />
                        </div>
                         <div class="form-group">
                          <label for="exampleInputPassword1">Parent's Mobile Number</label>
                          <input type="text" class="form-control" id="slider_caption_tf" name="oname" required="true" />
                         </div>
                         <div class="form-group">
                          <label for="exampleInputPassword1">Address*</label>
                          <input type="text" class="form-control" id="slider_caption_tf" name="oname" required="true" />
                         </div>

                         <div class="form-group">
                          <label for="exampleInputPassword1">Interested Course</label> <br/>
                          
                                <input type="radio" id="be_computer" name="course" value="BE_Computer">
                                <label for="yes">BE Computer (48 Seats)</label> <br/>
                                <input type="radio" id="be_civil" name="course" value="BE_civil">
                                <label for="yes">BE Civil (96 Seats)</label><br/>
                                <input type="radio" id="be_architect" name="course" value="BE_Architect">
                                <label for="yes">BE Architect (48 Seats)</label><br/>
                               
                         </div>
                          <div class="form-group">
                          <label for="exampleInputPassword1">Name of School/College (+2/Diploma)*</label>
                          <input type="text" class="form-control" id="slider_caption_tf" name="oname" required="true" />
                         </div>

                         <input type="submit" value="Submit" class="btn btn-primary"/>
                        
        </form>
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
<script>
    function scanToJpg() {
                
   scanner.scan(displayImagesOnPage,
   {
      "output_settings" :
      [
         {
            "type" : "return-base64",
            "format" : "jpg"
         }
      ]
   }
   );
}
</script>


