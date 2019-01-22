<?php

$Id=($_GET['ID']);

?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Modal Load -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<!-- The Modal -->
<div class="modal fade" id="myModal">
              <div class="modal-dialog modal-sm">
              <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
              <h4 class="modal-title">¡Warning!</h4>
              
              </div>

              <!-- Modal body -->
              <div class="modal-body">
              <p>¿Sure you want to delete the user?</p>
              
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
              <a href='tableUser.php'><button type="button" class="btn btn-secondary">Close</button></a>
              <a href='../backend/delete.php?ID=<?php echo $Id;?>'><button type="button" class="btn btn-danger">Sure</button>
             </div>
        
      </div>
    </div>
  </div>

 
<script>
$('#myModal').modal({
    backdrop: 'static',
    keyboard: false, // to prevent closing with Esc button and click.
    show: true
})
</script>