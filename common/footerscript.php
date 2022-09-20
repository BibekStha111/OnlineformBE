 <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../dist/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../dist/assets/demo/chart-area-demo.js"></script>
        <script src="../dist/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="../dist/assets/demo/datatables-demo.js"></script>
        <script src="../systemjs/systemjs.js">
            
            function displayImagesOnPage(successful, mesg, response) {
   if(!successful) { // On error
      console.error('Failed: ' + mesg);
      return;
   }

   if(successful && mesg != null && mesg.toLowerCase().indexOf('user cancel') >= 0) { // User canceled.
      console.info('User canceled');
      return;
   }

   var scannedImages = scanner.getScannedImage(response, true, false); // returns an array of ScannedImage
   for(var i = 0; (scannedImages instanceof Array) && i < scannedImages.length; i++) {
      var scannedImage = scannedImages[i];
      processScannedImage(scannedImage);
   }
}

/** Images scanned so far. */
var imagesScanned = [];

/** Processes a ScannedImage */
function processScannedImage(scannedImage) {
   imagesScanned.push(scannedImage);
   var elementImg = createDomElementFromModel( {
       'name': 'img',
       'attributes': {
           'class': 'scanned',
           'src': scannedImage.src
       }
   });
   document.getElementById('images').appendChild(elementImg);
}

        
</script>

