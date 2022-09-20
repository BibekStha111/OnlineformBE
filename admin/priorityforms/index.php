<?php include("../common/topscript.php");
   
?>
<html lang="en">
    <head>
        <?php include('../common/content.php');?>
       
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
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Priority Forms</li>

                            <li class="breadcrumb-item "><a href="printallapplication.php">Print all </a></li>
                          
                               
                            </li>
                        </ol>
                        <?php include('add.php');?>

                       
                        <div class="card mb-4">
                           
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="example" width="100%" data-page-size="50" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                               
                                                <th>Name</th>
                                                <th>SymbolNo</th>
                                                <th> Rank </th>
                                                  <th>Contact</th>
                                                   <th>School</th>
                                                    <th>First Priority</th>
                                                     <th>Second Priority</th>
                                                      <th>Third Priority</th>
                                               
                                               

                                                
                                                 <th>Priority Form</th>
                                                 <th>DELETE</th>
                                                
                                              
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            
                                            <?php
                                             if(empty($priorityForms[0]["pr_id"])){
                                                echo "No Data";
                                              }else{
                                            foreach($priorityForms as $row) {
                                                $deleteBtnId = "deletebtn".$row["pr_id"];
                                                # code...
                                                echo '<tr>
                                                
                                                <td>'.$row["pr_id"].'</td>
                                                 <td>'.$row["pr_name"].'</td>
                                                 <td>'.$row["pr_symbolno"].'</td>
                                                <td>'.$row["pr_rank"].'</td>
                                                <td>'.$row["pr_contact"].'</td>
                                                 <td>'.$row["pr_school"].'</td>
                                                 <td>'.$row["pr_firstp"].'</td>
                                                 <td>'.$row["pr_secondp"].'</td>
                                                 <td>'.$row["pr_thirdp"].'</td>
                                                
                                                
                                                

                                                


                                                <td>
                                                     <a href="viewdetail.php?priority_id='.$row["pr_id"].'" class="btn btn-success">View </a>';
                                                      
                                                     //include("delete.php");
                                               echo '</td>

                                               <td>
                                                     <button class="btn btn-danger" data-toggle="modal" data-target="#deletemetermodal'.$row["pr_id"].'">Delete</button>';
                                                      
                                                     include("delete.php");
                                               echo '</td>
                                              
                                               
                                            </tr>';

                                            }
                                        }?>

                                            
                                            
                                        </tbody>

                                    </table>


                                     
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
   
</html>
