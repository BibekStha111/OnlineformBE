<div id="addvouchermodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       
        <h4 class="modal-title">मीटर रिडर विवरण थप्नुहोस</h4>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <!-- Form -->
                  <form method='post' action='addprocess.php' enctype="multipart/form-data" id="upload_form">
                        <div class="form-group">
                          <label for="exampleInputPassword1">नाम</label>
                          <input type="text" class="form-control" id="slider_caption_tf" placeholder="Name" name="name" required="true" />
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Login</label>
                          <input type="text" class="form-control" id="slider_caption_tf" placeholder="Login" name="login" required="true" />
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">पास्वोर्ड</label>
                          <input type="password" class="form-control" id="slider_caption_tf" placeholder="Password" name="password" required="true" />
                        </div>
                          
                    <input type='submit' class='btn btn-info' value='Save' id='btn_save' onclick="Save"/>
                  </form>

        <!-- Preview-->
        
      </div>
 
    </div>

  </div>
</div>

