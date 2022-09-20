<?php include("../common/topscript.php");?>
<html lang="en">
    <head>
        <?php include('../common/content.php');
        $code = $_GET['priority_id'];
        $selectedPr = $database->getSinglePriorityForm($code);
       
       // print_r($selectedPr);
        //die();
        ?>
        <style type="text/css">
          
          div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
        </style>
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

                    <img src="../../uploads/<?php echo $selectedPr["pr_prform"];?>.png" class="img-responsive" style="width:8.5in;" />

                    <p><?php echo $selectedPr["pr_prform"];?> </p>
                </div>
                    
                    
        
        </main>
                
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
   
</html>


