
         
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details Finder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include("common/navbar.php");?>
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-md-11">

                <div class="card mt-75">
                    <div class="card-header text-center">
                        <h4>Online Priority Form</h4>
                    </div>
                    <div class="card-body">

                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="stud_id" value="<?php if(isset($_GET['stud_id'])){echo $_GET['stud_id'];} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php 
                                 
    $host = 'localhost';
    $database = 'mbmanorg_onlinereg'; 

    $user = 'mbmanorg_usronline';
    $password = '(k8OT7Fo.4Y^';
    $con = mysqli_connect($host, $user, $password, $database); 
   
                                    if(isset($_GET['stud_id']))
                                    {
                                        $stud_id = $_GET['stud_id'];

                                        $query = "SELECT * FROM tbl_students WHERE st_symbolno='$stud_id' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?></form>
                                                  <form method='post' action='function/submitprfunction.php' enctype="multipart/form-data" id="upload_form" name="onlineprform">
                                                <div class="form-group mb-3">
                                                    <label for="">Name</label>
                                                    <input type="text" value="<?= $row['st_name']; ?>" class="form-control">
                                                </div>
                                               
                                                <div class="form-group mb-3">
                                                    <label for="">Phone No</label>
                                                    <input type="text" value="<?= $row['st_mobno']; ?>" class="form-control">
                                                </div>
                                                 <div class="form-group mb-3">
                                                    <label for="">School Name</label>
                                                    <input type="text" value="<?= $row['st_college']; ?>" class="form-control">
                                                </div>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }
                                   
                                ?>

                            </div>
                        </div>

                    
 
                </div>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>