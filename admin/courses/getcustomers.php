<?php include("../common/topscript.php");
   
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
  <?php include('../common/content.php');?>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>
 <?php include("../common/navbar.php");?>   
 <?php include('add.php');?>
<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','mbmanorg_usronline','(k8OT7Fo.4Y^','mbmanorg_onlinereg');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
echo $q;
if($q==0)
{
    $q="BE Civil";
}
else if($q==1)
{
    $q="BE Computer";
}
else if($q==2)
{
    $q="B Architecture";
}

echo $q;
mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM tbl_students WHERE st_course = '".$q."'";
$result = mysqli_query($con,$sql);

echo '<div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="example" width="100%" data-page-size="50" cellspacing="0">
                                         
                                        <thead>
<tr>
<th>SN</th>
<th>Name of Student</th>
<th>Student Course</th>
<th>Date Of Birth</th>
<th>Submit Date</th>
<th>Information Submitted By:</th>
</tr>';
$a=1;
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>".$a++."</td>";
  echo "<td>" . $row['st_name'] . "</td>";
  echo "<td>" . $row['st_course'] . "</td>";
  echo "<td>" . $row['st_dob'] . "</td>";
  echo "<td>" . $row['st_submitdate'] . "</td>";
  echo "<td>" . $row['st_info'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
</html>