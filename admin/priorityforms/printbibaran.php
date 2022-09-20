<?php include("../common/topscript.php");?>
<html lang="en">
    <head>
        <?php include('../common/content.php');
        $code = $_GET['code'];
        $selectedStudent = $database->getStudentByCode($code);
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
                 
                          
                          

                          <table class="table table-responsive table-borderless"> 
                            <tr> 
                              <td>Students' Name </td>
                              <td><p><?php echo $selectedStudent["st_name"];?> </p> </td>
                            </tr>
                             <tr> 
                              <td>Email </td>
                              <td><p><?php echo $selectedStudent["st_email"];?> </p> </td>
                            </tr>
                             <tr> 
                              <td>Mobile Number</td>
                              <td><p><?php echo $selectedStudent["st_mobno"];?> </p> </td>
                            </tr>
                             <tr> 
                              <td>Parents' Name </td>
                              <td><p><?php echo $selectedStudent["st_parents"];?> </p> </td>
                            </tr>
                             <tr> 
                              <td>Address </td>
                              <td><p><?php echo $selectedStudent["st_parentsmob"];?> </p> </td>
                            </tr>
                             <tr> 
                              <td>College </td>
                              <td><p><?php echo $selectedStudent["st_college"];?> </p> </td>
                            </tr>
                             <tr> 
                              <td>Applied Course </td>
                              <td><p><?php echo $selectedStudent["st_course"];?> </p> </td>
                            </tr>
                             <tr> 
                              <td>Qualification</td>
                              <td><p><?php echo $selectedStudent["st_qualification"];?> </p> </td>
                            </tr>
                          </table>


                          
                         
                        
                         
                         
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






      