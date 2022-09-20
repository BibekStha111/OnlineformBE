function savecustomer(){
	var xhttp;
   //var txt=document.getElementById("savedonationbtn").value;
   xhttp = new XMLHttpRequest();
   var customerName = document.getElementById("customer_name_tf").value;
	var customerAddress = document.getElementById("customer_address_tf").value;
    var sendString =  "customer_name="+customerName+"&customer_address="+customerAddress;

   
   
  xhttp.open("GET", "../core/addcustomer.php?"+sendString, true);
  xhttp.send();
  //window.location.reload();
  xhttp.confirm();
}

function deleteACustomer(customerID){
  var del = confirm("Are you sure, you want to delete this customer?");
  if(del==true){
    var params = "customer_id="+customerID;
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET","../core/deletecustomer.php?"+params,true);
    xhttp.send()
    window.location.reload();
    xhttp.confirm();
  }
}

function saveScheme(){
  
   //var txt=document.getElementById("savedonationbtn").value;

   var xhttp = new XMLHttpRequest();
   var schemeName = document.getElementById("scheme_name_tf").value;
  var schemeRate = document.getElementById("scheme_rate_tf").value;
  
  var schemePeriod = document.getElementById("scheme_period").value;
  
    var sendString =  "scheme_name="+schemeName+"&scheme_rate="+schemeRate+"&scheme_period="+schemePeriod;

   
   
  xhttp.open("GET", "../core/addscheme.php?"+sendString, true);
  xhttp.send();
  window.location.reload();
  xhttp.confirm();
}

function deleteAScheme(schemeID){
  var del = confirm("Are you sure, you want to delete this Scheme?");
  if(del==true){
    var params = "scheme_id="+schemeID;
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET","../core/deletescheme.php?"+params,true);
    xhttp.send()
    window.location.reload();
    xhttp.confirm();
  }
}

function uploadImage(){
  <script>
    $(document).ready(function(){
  $('#btn_upload').click(function(){

    var fd = new FormData();
    var files = $('#file')[0].files[0];
    fd.append('file',files);

    // AJAX request
    $.ajax({
      url: '../Util/uploadfile.php',
      type: 'post',
      data: fd,
      contentType: false,
      processData: false,
      success: function(response){
        if(response != 0){
          // Show image preview
          $('#preview').append("<img src='"+response+"' width='100' height='100' style='display: inline-block;'>");
        }else{
          alert('file not uploaded');
        }
      }
    });
  });
});

</script>
}