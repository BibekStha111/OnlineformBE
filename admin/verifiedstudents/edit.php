<?php require_once "../Database/database.php"; 
      $database = new Database();
  $code = $_GET["code"];
  $selectedStudent = $database->getStudentByCode($code);
include("../common/topscript.php");?>
<html lang="en">
    <head>
        
       
    </head>
    <body style="background-color: #ddd">
         <?php include("../../common/navbar.php");?>
          

        
            
            <main>
                <div class="container-fluid card" style="width: 80%; margin-left: 10%; padding: 18px;">
                 
                    
                
        <!-- Form -->
              <form method='post' action='editprocess.php' enctype="multipart/form-data" id="upload_form">

                       <input type="hidden" name="st_code" value="<?php echo $code;?>"/>
                       
                        <div class="form-group">
                          <label for="exampleInputPassword1">Email Address*</label>
                          <input type="text" class="form-control" id="slider_caption_tf" name="st_email" required="true" value="<?php echo $selectedStudent["st_email"];?>"  />
                         </div>
                        
                         <div class="form-group">
                          <label for="exampleInputPassword1">Student's Full Name* </label>
                          <input type="text" class="form-control" id="slider_caption_tf" name="st_name" required="true" value="<?php echo $selectedStudent["st_name"];?>"/>
                         </div>


                         <div class="form-group">
                          <label for="exampleInputPassword1">Date of Birth* </label>
                          <input type="date" class="form-control" id="slider_caption_tf" name="st_dob" required="true" value="<?php echo $selectedStudent["st_dob"];?>"/>
                         </div>

                          <div class="form-group">
                          <label for="exampleInputPassword1">Academic Qualifications*</label> <br/>

                            <input type="radio" checked="true" id="data_rb" name="st_qualification" value="<?php echo $selectedStudent["st_qualification"]; ?>" required="true" onchange="validateOtherCourse(this);">
                                <label for="yes"><?php echo $selectedStudent["st_qualification"]; ?></label> <br/>

                          
                                <input type="radio" id="plus_2_sci" name="st_qualification" value="+2_Science" required="true" onchange="validateOtherCourse(this);">
                                <label for="yes">10+2 Science</label> <br/>
                                <input type="radio" id="be_civil" name="st_qualification" value="diploma_eng" required="true" onchange="validateOtherCourse(this);">
                                <label for="yes">Diploma Engineering</label><br/>
                                <input type="radio" id="others" name="st_qualification" value="others" required="true" onchange="validateOtherCourse(this);">
                                <label for="yes">Others</label><br/>

                              <input type="text" class="form-control" name="others_et" id="otherset" />
                               
                         </div>
                      

                      
                       
                         <div class="form-group">
                          <label for="exampleInputPassword1">Students Mobile Number*</label>
                          <input type="text" class="form-control" id="slider_caption_tf" name="st_mobno" required="true"  value="<?php echo $selectedStudent["st_mobno"];?>"/>
                         </div>
                         <div class="form-group">
                          <label for="exampleInputPassword1">Parents' Name*</label>
                          <input type="text" class="form-control" id="slider_caption_tf" name="st_parents" required="true"  value="<?php echo $selectedStudent["st_parents"];?>"/>
                        </div>
                         <div class="form-group">
                          <label for="exampleInputPassword1">Parent's Mobile Number</label>
                          <input type="text" class="form-control" id="slider_caption_tf" name="st_parentsmob" value="<?php echo $selectedStudent["st_parentsmob"];?>" />
                         </div>
                         <div class="form-group">
                          <label for="exampleInputPassword1">Address*</label>
                          <input type="text" class="form-control" id="slider_caption_tf" name="st_address" value="<?php echo $selectedStudent["st_address"];?>"  />
                         </div>

                         <div class="form-group">
                          <label for="exampleInputPassword1">Interested Course*</label> <br/>
                              <?php echo $selectedStudent["st_course"];?> <br/>
                                <input type="radio" id="be_computer" name="st_course" value="BE_Computer" required="true">
                                <label for="yes">BE Computer (48 Seats)</label> <br/>
                                <input type="radio" id="be_civil" name="st_course" value="BE_civil" required="true">
                                <label for="yes">BE Civil (96 Seats)</label><br/>
                                <input type="radio" id="be_architect" name="st_course" value="BE_Architect" required="true">
                                <label for="yes">BE Architect (48 Seats)</label><br/>
                               
                         </div>
                          <div class="form-group">
                          <label for="exampleInputPassword1">Name of School/College (+2/Diploma)*</label>
                          <input type="text" class="form-control" id="slider_caption_tf" name="st_college" required="true"  value="<?php echo $selectedStudent["st_college"];?>"/>
                         </div>

                         <input type="submit" value="Submit" class="btn btn-primary"/>
                        
        </form>
        </div>
            </main>
            <?php include("common/footer.php");?>
           
        
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
   
  

    function validateOtherCourse(){
      if (document.getElementById('others').checked) {
      document.getElementById("otherset").required=true;
}
else{
   document.getElementById("otherset").required=false;
}
    }



</script>


