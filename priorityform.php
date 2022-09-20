<?php include("common/topscript.php");?>

<html lang="en">
    <head>
        
       
    </head>
    <body style="background-color: #ddd">
         <?php include("common/navbar.php");?>
          

        
            
            <main>
                <div class="container-fluid card" style="width: 80%; margin-left: 10%; padding: 18px;">
                   <p><i>Fields marked with * are compulsary.</i> </p>
                    
                
        <!-- Form -->
              <form method='post' action='function/submitprfunction.php' enctype="multipart/form-data" id="upload_form" name="onlineprform">
<table><tr><td width="80%"><a href="#" target="new">Details Finder</a></td><td>
<a href="sampleform.jpg" target="new"> Sample Form</a></td></tr></table>
                       
                     

                     

                       <div class="form-group">
                        <label>Symbol No*</label>
                        <input type="text" name="pr_sno" class="form-control" required="true" />

                      </div>

                      <div class="form-group">
                        <label>Rank*</label>
                        <input type="text" name="pr_rank" class="form-control" required="true" />

                      </div>
  <div class="form-group">
                        <label>Name*</label>
                        <input type="text" name="pr_name" class="form-control" required="true" />
                         </div>
                      <div class="form-group">
                        <label>Contact No*</label>
                        <input type="text" name="pr_contact" class="form-control" required="true" />

                      </div>

                      <div class="form-group">
                        <label>School Name*</label>
                        <input type="text" name="pr_school" class="form-control" required="true" />

                      </div>
                       <div class="form-group">
                        <label>Student's Citizenship Number</label>
                        <input type="text" name="pr_ct" class="form-control"  />

                      </div>

                      <div class="form-group">
                        <label>Program Selection Priority*  </label>
                        
                        <div class="row">
                          <div class="col-md-4">
                            <label>First </label>
                            <select name="f_priority" class="form-control" required="true" >
                              <option value="BE_civil">B.E. Civil </option>
                              <option value="BE_computer">B.E. Computer </option>
                              <option value="B_arch">B.Architecture</option>

                            </select>
                          </div>
                          <div class="col-md-4">
                            <label>Second </label>
                            <select name="s_priority" class="form-control" required="true" >
                            <option value="BE_civil">B.E. Civil </option>
                              <option value="BE_civil">B.E. Civil </option>
                              <option value="BE_computer">B.E. Computer </option>
                              <option value="B_arch">B.Architecture</option>
                            </select>
                          </div>
                          <div class="col-md-4">
                            <label>Third </label>
                            <select name="t_priority" class="form-control" required="true" >
                         <option value="BE_civil">B.E. Civil </option>
                              <option value="BE_computer">B.E. Computer </option>
                              <option value="B_arch">B.Architecture</option>
                            </select>
                          </div>
                          
                          

                        </div>

                      </div>
                      
                      

                      <div class="row">

                        <div class="col-md-12">
                         <div class="form-group">
                          <label for="exampleInputPassword1"> Upload Priority Form*  <a href="priority-form-mbman.pdf" target="_blank" >Download Priority Form Fill and Upload it.  </a> </label>
                          <input type="file" class="form-control" id="slider_caption_tf" name="pr_document" required="true"/>
                         </div>
                       </div>
                          
                     
                     

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
    </body>
   
</html>
<script>
  function hello()
  {
      document.onlineprform.pr_sno.value=a;
      <?php 
      ?>
      alert("Please fill up the real form");
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


