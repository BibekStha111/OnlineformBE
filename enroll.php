<?php include("common/topscript.php");?>
<html lang="en">
    <head>
        <style>
              fieldset {
 
}

legend {
  background-color: gray;
  color: white;
  padding: 5px 10px;
}

        </style>
       
    </head>
    <body style="background-color: #ddd" onload="insdate()">
         <?php include("common/navbar.php");?>
          

        
            
            <main>
                <div class="container-fluid card" style="width: 80%; margin-left: 10%; padding: 18px;">
                   <p><i><font color="red">Fields marked with * are compulsary.
                      You will recieve an EMAIL once approved</font></i> </p>
                    
                
        <!-- Form -->
              <form method='post' action='function/submitfunction.php' enctype="multipart/form-data" name="online" id="upload_form">

                       
                     <fieldset><legend>Personal Details</legend>  
                      <div class="row">
                    
                         <div class="col-md-6">
                         <div class="form-group">
                             
                          <label for="exampleInputPassword1">Student's Full Name* </label>
                          <input type="text" class="form-control" id="slider_caption_tf" name="st_name" required="true"/>
                          </div>
                          </div>
                          <div class="col-md-6">
                         <div class="form-group">
                          <label for="exampleInputPassword1">Email Address*</label>
                          <input type="text" class="form-control" id="slider_caption_tf" name="st_email" required="true" />
                          </div>
                         </div>
                         </div>

  <div class="row">
                    <div class="col-md-6">
                         
                         <div class="form-group">
                          <label for="exampleInputPassword1">Date of Birth* </label>
                          <input type="date" class="form-control" id="slider_caption_tf" name="st_dob" required="true"/>
                         </div>
                         </div>

                         
              


                        
                    <div class="col-md-6">
                         
                         <div class="form-group">
                          <label for="exampleInputPassword1">Students Mobile Number*</label>
                          <input type="text" class="form-control" id="slider_caption_tf" name="st_mobno" required="true" />
                         </div>
                         </div>
                         </div>
                          <div class="row">
                    <div class="col-md-6">
                         <div class="form-group">
                          <label for="exampleInputPassword1">Parents' Name*</label>
                          <input type="text" class="form-control" id="slider_caption_tf" name="st_parents" required="true" />
                        </div>
                        </div>
                        <div class="col-md-6">
                         <div class="form-group">
                          <label for="exampleInputPassword1">Parent's Mobile Number</label>
                          <input type="text" class="form-control" id="slider_caption_tf" name="st_parentsmob"  />
                         </div>
                         </div>
                         </div>
                         <div class="form-group">
                          <label for="exampleInputPassword1">Address*</label>
                          <input type="text" class="form-control" id="slider_caption_tf" name="st_address"  />
                         </div>
                          <div class="form-group">
                          <label for="exampleInputPassword1">Academic Qualifications*</label> <br/>
                          
                                <input type="radio" id="plus_2_sci" name="st_qualification" value="+2_Science" required="true" onchange="validateOtherCourse();">
                                <label for="yes">10+2 Science</label> <br/>
                                <input type="radio" id="be_civil" name="st_qualification" value="diploma_eng" required="true" onchange="validateOtherCourse();">
                                <label for="yes">Overseer Engineering</label><br/>
                                <input type="radio" id="be_civil" name="st_qualification" value="+2" required="true" onchange="validateOtherCourse();">
                                <label for="yes">Overseer Engineering NEB</label><br/>
                                <input type="radio" id="others" name="st_qualification" value="others" required="true" onchange="validateOtherCourse();">
                                <label for="yes">Others</label><br/>

                              <input type="text" class="form-control" name="others_et" id="otherset" />
                               
                         </div>
</fieldset>
        <fieldset><legend>Upload</legend>

                      <div class="row">

                        <div class="col-md-3">
                         <div class="form-group">
                          <label for="exampleInputPassword1">Passport Size photo* </label>
                          <input type="file" class="form-control" id="slider_caption_tf" name="st_photo" required="true"/>
                         </div>
                       </div>
                          
                       <div class="col-md-3">
                         <div class="form-group">
                          <label for="exampleInputPassword1">Upload Bank Voucher* </label>
                          <input type="file" class="form-control" id="slider_caption_tf" name="st_voucher" required="true"/>
                         </div>
                       </div>
                    

                      <div class="col-md-3">
                         <div class="form-group">
                          <label for="exampleInputPassword1">Upload Gradesheet XI</label>
                          <input type="file" class="form-control" id="slider_caption_tf" name="st_gradesheetxi"/>
                         </div>
                       </div>

                        <div class="col-md-3">
                         <div class="form-group">
                          <label for="exampleInputPassword1">Upload Gradesheet XII</label>
                          <input type="file" class="form-control" id="slider_caption_tf" name="st_gradesheetxii"/>
                         </div>
                       </div>
                     

                     </div>
                     </fieldset>
<fieldset><legend>Interested Courses*</legend>
                         <div class="form-group">
                         
                          
                                <input type="radio" id="be_computer" name="st_course" value="BE Computer" required="true">
                                <label for="yes">BE Computer (39 Seats)</label> <br/>
                                <input type="radio" id="be_civil" name="st_course" value="BE civil" required="true">
                                <label for="yes">BE Civil (78 seats)</label><br/>
                                <input type="radio" id="be_civil" name="st_course" value="B. Architecture" required="true">
                                <label for="yes">BE Architecture (39 seats)</label><br/>
                                
                               
                         </div>
                         </fieldset><fieldset><legend>Other Details*</legend>
                         <div class="row"><div class="col-md-6">
                          <div class="form-group">
                          <label for="exampleInputPassword1">Name of School/College (+2/Diploma)*</label>
                          <input type="text" class="form-control" id="slider_caption_tf" name="st_college" required="true" />
                         </div>
                         </div>
                        <div class="col-md-6">
                         <div class="form-group">
                          <label for="exampleInputPassword1">Date of Submission</label>
                          <input type="text" class="form-control" id="slider_caption_tf" name="su_dt" required="true" />
                         </div>
                         </div>
                         </div>
</fieldset>
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
    </body>
   
</html>
<script>
  function insdate(){
   
    var a= new Date();
    var yr=a.getYear();
    var mn=a.getMonth();
    var day=a.getDay();
    document.online.su_dt.value= a;
}


    function validateOtherCourse(){
      if (document.getElementById('others').checked) {
      document.getElementById("otherset").required=true;
}
else{
   document.getElementById("otherset").required=false;
}
    }

</script>

</script>


