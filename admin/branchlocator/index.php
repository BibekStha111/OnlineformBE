<?php include("../common/topscript.php");
   
?>
<html lang="en">
    <head>
        <?php include('../common/content.php');?>
       <link rel="text/javascript" href="//cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js">
       <link rel="text/js" href="//cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css" >
    </head>
    <body class="sb-nav-fixed">
         <?php include("../common/navbar.php");?>
          

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php include("../common/sidebar.php");?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Students</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="../Dashboard/">Dashboard</a></li>
                            <li class="breadcrumb-item active">Branch Locator</li>
                            
                               
                            </li>
                        </ol>
                        <?php include('add.php');?>

                       
                        <div class="card mb-4">

                           
                            <div class="card-body">
                                <div class="table-responsive">
                                   
                                   
                                   
                                   
                                   
<form>
    
<select name="users" onchange="showUser(this.value)">
  <option value="">Select a Branch:</option>
  <option value="0">Individual Form</option>
  <option value="1">Head Office</option>
  <option value="2">Bahuprabhidik Shikshyalaya</option>
  <option value="3">School of Agriculture</option>
  <option value="4">School of Nursing</option>
  </select>
</form>
<br>
<div id="txtHint"><b>Courses info will be listed here...</b></div>

                                </div>
                            </div>
                        </div>
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
    <script>
        $(document).ready(function() {
    $('#example').DataTable( {
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
    } );
} );
    </script>
    <script>
function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","getcustomers.php?q="+str,true);
    xmlhttp.send();
  }
}
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
   
</html>
