<?php include("../common/topscript.php");
   include '../../phpqrcode/qrlib.php';
     $memberID = $_POST["customer_id"];

      $selectedCustomer = $database->getSingleCustomer($memberID);
?>
<body style="padding:18px; width: 8.5in;">
      <button class="btn-primary" id="printbtn" onclick="printthis();">Print</button>
      <div class="card" style="padding:18px;" style="line-height: 0px;">
        <h2 style="text-align: center"><strong>श्री हिमचुली बहुउद्येशीय सहकारी संस्था लिमिटेड</strong> </h2>
        <h6 style="text-align: center">मिक्लाजुङ ९ मधुमल्ला बजार मोरङ प्रदेश नं १</h6>
        <h6 style="text-align: center">ग्राहक बिबरण </h6>
        <hr/>
        <div class="container">
          <div class="row">


              <div style="width: 80%;"> 
                    <table class="table table-responsive table-borderless" style="line-height: 0px;">
                         <tr> <td>ग्राहक नं: </td> <td> <?php echo $selectedCustomer["c_number"];?> </td> </tr>
                        <tr> <td>उपभोक्ताको नाम: </td> <td> <?php echo $selectedCustomer["c_name"];?> </td> </tr>
                        <tr> <td>ठेगाना: </td> <td> <?php echo $selectedCustomer["c_house_vdc"];?> <?php echo $selectedCustomer["c_house_ward"];?> <?php echo $selectedCustomer["c_house_tole"];?>  </td> </tr>
                         <tr> <td>क्षमता: </td> <td><?php echo $selectedCustomer["c_electricity_capacity"];?> </td> </tr>
                     </table>
              </div>
              <div style="width:20%;">
                <?php 
                $filepath = '../../qr/'.$selectedCustomer["c_number"].'.png';
                QRcode::png($selectedCustomer["c_number"], $filepath, 'L', '5', '5');

                

                ?>
               <img src="<?php echo $filepath;?>" class="img-responsive img-center img-thumbnail" style="width:120px;" /> <br/>
               

               <p class="center"> QR Code <br/></p>

            </div>
        </div>
      </div>
       <p style="text-align: center; font-family: monospace;">WEBBASED EL BY EASTERN HAWK SOLUTIONS </p>

    </body>
  </div>
    <script>
       function printthis(){
   document.getElementById("printbtn").style.display = "none";
    
    
    window.print();
  }
    </script>