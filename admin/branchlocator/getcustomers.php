<!DOCTYPE html>
<html>
<head>
     <link rel="text/javascript" href="//cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js">
       <link rel="text/js" href="//cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css" >
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

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','mbmanorg_usronline','(k8OT7Fo.4Y^','mbmanorg_ctevtform');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
echo $q;
if($q==1)
{
    $q="ho";
}
else if($q==2)
{
    $q="sohs";
}
else if($q==3)
{
    $q="soa";
}
else if($q==4)
{
    $q="son";
}
else
{
    $q="";
}
echo $q;
mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM tbl_students WHERE st_info = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>SN</th>
<th>Name of Student</th>
<th>Student Course</th>
<th>Date Of Birth</th>
<th>Submit Date</th>
<th>Information Submitted By:</th>
</tr>";
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
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</html>