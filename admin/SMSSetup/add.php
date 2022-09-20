<div id="addsetupmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       
        <h4 class="modal-title">Add SMS Setup</h4>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <!-- Form -->
                  <form method='post' action='addprocess.php' enctype="multipart/form-data" id="upload_form">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Provider</label>
                          <input type="text" class="form-control" id="slider_caption_tf" placeholder="Name" name="sms_provider" required="true" />
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Sender API</label>
                          <input type="text" class="form-control" id="slider_caption_tf" placeholder="API" name="sms_api" required="true" />
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">SMS (use $code for Code) </label>

                          <textarea class="form-control" name="sms_message"></textarea>
                        </div>

                         <div class="form-group">
                          <label for="exampleInputPassword1"> API Key</label>
                          <input type="text" class="form-control" id="slider_caption_tf" placeholder="API Key" name="sms_apikey" required="true" />
                        </div>

                         <div class="form-group">
                          <label for="exampleInputPassword1">Email Message</label>
                          <textarea class="form-control" name="sms_emailmsg"></textarea>
                        </div>
                          
                    <input type='submit' class='btn btn-info' value='Save' id='btn_save' onclick="Save"/>
                  </form>

        <!-- Preview-->
        
      </div>
 
    </div>

  </div>
</div>

