<?php
 $host = 'localhost';
    $database = 'mbmanorg_ctevt'; 

    $user = 'mbmanorg_it';
    $password = 'Mbman@123';
    $connection  = mysqli_connect($host, $user, $password, $database); 



      $sql='SELECT std_id, std_name (std_id)
FROM tbl_students
GROUP BY std_name
HAVING COUNT(std_name)>1';
      //echo $sql;
      $result =$this->executeSQL($sql);
      if(mysqli_num_rows($result)>0){
        while ($row=mysqli_fetch_assoc($result)) {
          array_push($students,$row);
          }
      }
      else{
      return false;
      }
    ?>
    <html>
        <head>
            <title>Search</title>
            
        </head>
        <body>
            <?php $row["std_name"] ?>
        </body>
    </html>