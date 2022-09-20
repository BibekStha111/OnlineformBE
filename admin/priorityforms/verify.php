

<div id="verifymodal<?php echo $row["st_id"];?>" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <?php $selectedstudent = $database->getStudentById($row["st_id"]);
    $symbolNo = $row["st_id"]+7277000;

    ?>
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       
        <h4 class="modal-title">Verify <?php echo $selectedstudent["st_name"];?></h4>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <!-- Form -->
        <form method='post' action='verifyprocess.php' enctype="multipart/form-data" id="upload_form">
          <input type="hidden" name="student_id" value="<?php echo $row["st_id"];?>"/>
          <input type="text" name="verify_symbolno" class="form-control" value="<?php echo $symbolNo;?>"/>

            


            <br/>
            <br/>
          
          <input type='submit' class='btn btn-success' value='Verify' id='btn_save' />
        </form>

        <!-- Preview-->
        
      </div>
 
    </div>

  </div>
</div>


