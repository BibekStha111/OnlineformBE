<?php include("../common/topscript.php");
   
?>
<html lang="en">
    <head>
        <?php include('../common/content.php');
            $mobileNumbersArray = array();
            foreach ($verifiedNumbers as $row) {
                # code...
                array_push($mobileNumbersArray, $row["st_mobno"]);
            }
            //print_r($mobileNumbersArray);
            $mobileNumbersString = implode(",", $mobileNumbersArray);
            //echo $mobileNumbersString;
            



        ?>
       
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
                            <li class="breadcrumb-item active">Students</li>
                            <li class="breadcrumb-item"><a href="printverifiedadmitcards.php">Admit Cards</a></li>
                             <li class="breadcrumb-item active">
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
                                                <th>Code</th>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th> Mobile No </th>
                                                  <th>Course</th>
                                               
                                                <th>Edit</th>

                                                <th>Verify</th>
                                                 <th>View</th>
                                                 <th>DELETE</th>
                                                 <th>Send Email </th>
                                              
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            
                                            <?php
                                             if(empty($verifiedStudents[0]["st_id"])){
                                                echo "No Data";
                                              }else{
                                            foreach($verifiedStudents as $row) {
                                                $deleteBtnId = "deletebtn".$row["st_id"];
                                                $verified = $row["st_status"];
                                                # code...
                                                echo '<tr>
                                                
                                                <td>'.$row["st_id"].'</td>
                                                 <td>'.$row["st_code"].'</td>
                                                <td>'.$row["st_name"].'</td>
                                                <td>'.$row["st_address"].'</td>
                                                 <td>'.$row["st_mobno"].'</td>
                                                 <td>'.$row["st_course"].'</td>
                                                
                                                <td> 
                                                <a href="edit.php?code='.$row["st_code"].'" class="btn btn-success">Edit </a>';
                                                       //include("edit.php");
                                                    echo '</td>

                                                <td>';
                                                if($verified=="New"){
                                                    echo '<button class="btn btn-primary" data-toggle="modal" data-target="#verifymodal'.$row["st_id"].'">Verify</button>';
                                                    
                                                        include("verify.php");
                                                }
                                                else{
                                                    echo $row["st_symbolno"];

                                                } 

                                                    
                                                    


                                                echo '</td>


                                                <td>
                                                     <a href="viewdetail.php?code='.$row["st_code"].'" class="btn btn-success">View </a>';
                                                      
                                                     include("delete.php");
                                               echo '</td>

                                               <td>
                                                     <button class="btn btn-danger" data-toggle="modal" data-target="#deletemetermodal'.$row["st_id"].'">Delete</button>';
                                                      
                                                     include("delete.php");
                                               echo '</td>
                                               <td>
                                                    <a target="_blank" href="testmail.php?userid='; echo $row["st_email"]; echo '&username='; echo $row["st_fname"]; echo'">Send Mail</a></td>
                                                      
                                                                                                     

                                               </td>
                                               
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
