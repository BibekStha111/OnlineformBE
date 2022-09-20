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
    <body style="padding:28px;">
      <button class="btn-primary" id="printbtn" onclick="printthis();">Print</button>
        <h2 style="text-align: center"><strong>श्री हिमचुली बहुउद्येशीय सहकारी संस्था लिमिटेड</strong> </p>
        <h6 style="text-align: center">ग्राहक बिबरण </h6>
        <hr/>
        <div class="container">
          <div class="row">


              <div style="width: 80%;">
                 
                          <span><strong> ब्यक्तिगत बिबरण </strong></span>
                          
                         <table class="table table-borderless">
                          <tr> <td>ग्राहक नं: <?php echo $selectedCustomer["c_number"];?> </td> </tr>
                           <tr> 
                                <td> नाम: <?php echo $selectedCustomer["c_name"];?> </td>
                                <td>पेशा वा किसिम: <?php echo $selectedCustomer["c_occupation"];?> </td>
                                
                           </tr>
                           <tr> 
                                <td> बाबु वा पतिको नाम: <?php echo $selectedCustomer["c_father_name"];?> </td>
                                <td>बाजे वा ससुराको नाम: <?php echo $selectedCustomer["c_grandfather_name"];?> </td>
                                
                           </tr>
                            <tr> 
                                <td> घरधनीको नाम: <?php echo $selectedCustomer["c_houseowner_name"];?> </td>
                                
                                
                           </tr>


                         </table>
                        
                         
                         
              </div>
              <div style="width: 20%;">
                <img src="../uploads/<?php echo $selectedCustomer["c_photo"];?>" style="width:%;"  class="img-thumbnail" /> 
              </div>
              
          </div>
          <div class="row">
            <div style="width: 100%"> 
              <span><strong>बिजुली जोड्ने पुरा ठेगाना</strong></span>
                 <table class="table table-borderless"> 
                    <tr> 
                                <td>घर न: <?php echo $selectedCustomer["c_house_no"];?> </td>
                                <td>टोल: <?php echo $selectedCustomer["c_house_tole"];?> </td>
                                <td>वडा न: <?php echo $selectedCustomer["c_house_ward"];?> </td>
                                <td>गा.पा वा न.पा: <?php echo $selectedCustomer["c_house_vdc"];?> </td>
                                
                           </tr>
                            <tr> 
                                <td>जिल्ला: <?php echo $selectedCustomer["c_house_district"];?> </td>
                                <td>सम्पर्क नं: <?php echo $selectedCustomer["c_house_phone"];?> </td>
                                <td>घरको बनावट: <?php echo $selectedCustomer["c_house_type"];?> </td>
                               
                                
                           </tr>
                 </table>
            </div>

          </div>

           <div class="row">
            <div style="width: 100%;"> 
              <span><strong>बिजुली जोड्ने संस्थाको बिबरण</strong></span>
                 <table class="table table-borderless"> 
                    <tr> 
                                <td>संस्थाको बिबरण <?php echo $selectedCustomer["c_place_detail"];?> </td>
                                <td>तला: <?php echo $selectedCustomer["c_place_storey"];?> </td>
                                <td>बनावट: <?php echo $selectedCustomer["c_house_structure"];?> </td>
                                <td>कोठा: <?php echo $selectedCustomer["c_house_totalroom"];?> </td>
                                
                           </tr>
                            
                 </table>
            </div>

            <div style="width: 100%"> 
              <table class="table table-borderless"> 
                <tr> 
                  <td>वाईरिङ गर्ने ठेकेदारको नाम: <?php echo $selectedCustomer["c_contractor_name"];?> </td>
               </tr>
               </table>
            </div>

            <div style="width: 100%"> 
              <table class="table table-borderless"> 
                <tr> 
                  <td> प्रणाली कोड: <?php echo $selectedCustomer["c_code"];?> </td>
                  <td> <span><strong> ग्राहक नं: <?php echo $selectedCustomer["c_number"];?> </span></strong> </td>
                  <td> <span><strong>क्षमता: <?php echo $selectedCustomer["c_electricity_capacity"];?></strong></span> </td>
               </tr>
               </table>
            </div>

          </div>
          <div style="width: 100%"> 
            <span><strong>बिद्युत सामाग्री बिबरण:</strong></span>
            <?php include("../connection/connectionreport.php");?>
          </div>

        </div>
        <hr/>
         

        <p style="text-align: center; font-family: monospace;">HIMCHULI MULTIPURPOSE CO-OPERATIVE LTD. MIKLAJUNG 9 MADHUMALLA MORANG SYSTEM BY: EASTERN HAWK SOLUTIONS, URLABARI </p>

        <div style="text-align: center;"></div>
          

        

       
    </body>
   
</html>

<script>
  function printthis(){
   document.getElementById("printbtn").style.display = "none";
    
    
    window.print();
  }
</script>






      