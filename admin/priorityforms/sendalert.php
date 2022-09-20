<?php 
  $message = $smsSetup[0]["sms_message"];
  $finalMessage = str_replace("<symbolno>", $row["st_symbolno"], $message);

  $toSendMessage = str_replace("<code>", $row["st_code"], $finalMessage);
  
?>

<div id="sendalertmodal<?php echo $row["st_id"];?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       
        <h4 class="modal-title">Send Alert?</h4>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <!-- Form -->
        <form method='post' action='sendsmstostudentprocess.php' enctype="multipart/form-data">
          <input type="hidden" name="st_id" value="<?php echo $row["st_id"];?>"/>
            <h6> Send  alert to <?php echo $row["st_name"];?>?</h6>
            <div class="form-group">
              <label>Message:</label>
              <p> <?php echo $toSendMessage;?></p>
            </div>
           
           <input type="hidden" name="ssm_message" value="<?php echo $toSendMessage;?>"/>
            <input type="hidden" name="ssm_number" value="<?php echo $row["st_mobno"];?>"/>
        
          <input type='submit' class='btn btn-success' value='Send' id='btn_save' />
        </form>

        <!-- Preview-->
        
      </div>
 
    </div>

  </div>
</div>


