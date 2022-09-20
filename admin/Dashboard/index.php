<?php 
include("../common/topscript.php");
include("../common/content.php");
?>

<html lang="en">
    <head>
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="../css/dashboard.css">
      <link rel="stylesheet" href="../css/dashboard2.css">
      <style>
      
      
      .button {
  position: relative;
  background-color: #4CAF50;
  border: none;
  font-size: 28px;
  color: #FFFFFF;
  padding: 20px;
  width: 200px;
  text-align: center;
  transition-duration: 0.4s;
  text-decoration: none;
  overflow: hidden;
  cursor: pointer;
}

.button:after {
  content: "";
  background: #f1f1f1;
  display: block;
  position: absolute;
  padding-top: 300%;
  padding-left: 350%;
  margin-left: -20px !important;
  margin-top: -120%;
  opacity: 0;
  transition: all 0.8s
}

.button:active:after {
  padding: 0;
  margin: 0;
  opacity: 1;
  transition: 0s
}


          .alert {
  padding: 20px;
  color: white;
  opacity: 1;
  width:100%;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}

.alert.success {background-color: #04AA6D;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
body {
  background: url(../bg.webp) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

      </style>
    </head>
    <body class="sb-nav-fixed"  class="bg">
         <?php include("../common/navbar.php");?>

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php include("../common/sidebar.php");?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"></h1>
                        
                        
                        
                                    
                    
 <div class="alert info">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>  
  <center><strong> &#x1F6C8; Hey! </strong>New Dashboard Interface. Enjoy!</center>
</div>
    
    <h1 class="w3-xxlarge w3-text-black"><b>Namaste <a href="../common/session.php"><?php echo $_SESSION["username"]; ?></a></b></h1>
                      
    <hr style="width:50px;border:5px solid yellow" class="w3-round">
 <div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
 
 
 

 
 
 
  </div>

  <!-- Content Row -->
  <div class="row" class="bg">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Admin</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

               <h4>Total Admin:<?php


$databaseHost = 'localhost';   //your db host 
$databaseName = 'onlinereg';  //your db name 
$databaseUsername = 'root';    //your db username 
$databasePassword = '';//   db password 

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
 
$sql = "SELECT * FROM tbl_user";
 
$mysqliStatus = $mysqli->query($sql);
 
$rows_count_value = mysqli_num_rows($mysqliStatus);
 
echo $rows_count_value; 

 
$mysqli->close();	
?></h4>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Submissions</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php


$databaseHost = 'localhost';   //your db host 
$databaseName = 'onlinereg';  //your db name 
$databaseUsername = 'root';    //your db username 
$databasePassword = '';//   db password 

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
 
$sql = "SELECT * FROM tbl_students";
 
$mysqliStatus = $mysqli->query($sql);
 
$rows_count_value = mysqli_num_rows($mysqliStatus);
 
echo $rows_count_value; 

 
$mysqli->close();	
?>
</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>





<!-- ................................................... -->


    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Civil Engineering</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php


$databaseHost = 'localhost';   //your db host 
$databaseName = 'onlinereg';  //your db name 
$databaseUsername = 'root';    //your db username 
$databasePassword = '';//   db password 

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
 
$sql = "SELECT * FROM tbl_students where st_course='BE Civil'";
 
$mysqliStatus = $mysqli->query($sql);
 
$rows_count_value = mysqli_num_rows($mysqliStatus);
 
echo $rows_count_value; 

 
$mysqli->close();	
?>
</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  
  
  
  
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Bachelor in Computer Engineering</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php


$databaseHost = 'localhost';   //your db host 
$databaseName = 'onlinereg';  //your db name 
$databaseUsername = 'root';    //your db username 
$databasePassword = '';//   db password 

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
 
$sql = "SELECT * FROM tbl_students where st_course='BE Computer'";
 
$mysqliStatus = $mysqli->query($sql);
 
$rows_count_value = mysqli_num_rows($mysqliStatus);
 
echo $rows_count_value; 

 
$mysqli->close();	
?>
</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>






  
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Priority Form</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php


$databaseHost = 'localhost';   //your db host 
$databaseName = 'onlinereg';  //your db name 
$databaseUsername = 'root';    //your db username 
$databasePassword = '';//   db password 

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
 
$sql = "SELECT * FROM tbl_priority";
 
$mysqliStatus = $mysqli->query($sql);
 
$rows_count_value = mysqli_num_rows($mysqliStatus);
 
echo $rows_count_value; 

 
$mysqli->close();	
?>
</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>


    
    
    
    
    
    
    
    
    
    
    
    
    
    
   <!-- ------------------------------------- --> 

  
  
<!-- -------------------------------------------------- -->


  
<!-- ................................................... -->
      
    <!-- Earnings (Monthly) Card Example -->
    

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Today's Date</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><script> var a=new Date();
              var y= a.getFullYear();
              var m=a.getMonth()+1;
              var d=a.getDate();
              var week=a.getDay()+1;
              document.write(y+'/'+m+'/'+d+'    ');
              if(week==1)
              document.write("Sun");
              else if(week==2)
              document.write("mon");
              else if(week==3)
              document.write("Tue");
              else if(week==4)
              document.write("Wed");
              else if(week==5)
              document.write("Thru");
              else if(week==6)
              document.write("Fri");
              else if(week==7)
              document.write("Sat");
              </script></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    
    
    
<!-- ----------------------------------------------------------------------- -->    
    
  
                        
                </main>
               
            </div>
        </div>
       <?php include("../common/footerscript.php");?>
    </body>
</html>
