<?php include("../common/topscript.php");?>
<html lang="en">
    <head>
        <?php include('../common/content.php');
       
        $allVouchers = $database->getPriorityForms();
        //print_r($selectedConnection);
        //die();
        ?>
    </head>
    <body style="padding:28px; width: 8.5in;">
      <button class="btn-primary" id="printbtn" onclick="printthis();">Print</button>
       <?php include("../common/reportheader.php");?>
        <hr/>


        <div class="container">
          <div class="row">


              <div style="width: 80%;">
                <?php  
                  foreach ($allVouchers as $row) {
                    # code...
                    echo '<img src ="../../uploads/'.$row["pr_prform"].'.png" style="width:8.5in;"/> ';
                    echo '<p style="page-break-before: always"/>';

                  }
                ?>
                 
                          
                          

                         


                          
                         
                        
                         
                         
              </div>
              <div style="width: 20%;">
                <img src="../../uploads/<?php echo $selectedStudent["st_photo"];?>.png" style="width:%;"  class="img-thumbnail" /> 
              </div>
              
          </div>
          
          

           

           

          </div>
         

       
        <hr/>
         

       

       
          

        

       
    </body>
   
</html>

<script>
  function printthis(){
   document.getElementById("printbtn").style.display = "none";
    
    
    window.print();
  }
</script>






      