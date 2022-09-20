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
              <form method='post' action='uploadpriority.php' enctype="multipart/form-data" id="upload_form" name="onlineprform">

                       
                     

                     

                       <div class="form-group">
                        <label>Symbol No*</label>
                        <input type="text" name="pr_sno" class="form-control" required="true" />

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
       <?php include("../common/footerscript.php");?>
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


