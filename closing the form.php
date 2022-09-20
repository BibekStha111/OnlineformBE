<?php include("common/topscript.php");?>
<html lang="en">
    <head>
        
       
    </head>
    <body style="background-color: #ddd">
         <?php include("common/navbar.php");?>
          

        
            
            <main>
                <div class="container-fluid card" style="width: 80%; margin-left: 10%; padding: 18px;">
                  <p class="text-center">Online Application Closed. Thank you for visiting.</p>
                    
                
        <!-- Form -->
             
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

</script>


