<?php
include "init.php"; 

if(isset($_SESSION['id'])){
  include "header2.html"; 
}else{
  include "header.html" ;
}
?>
<!DOCTYPE html>  
<html>  
<head>  
<title>readfromheart| books </title>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</head>  
<body>  
<br/><br/>  
<div class="container" style="width:900px;">  
<h1 class="text-center" style="font-size:50px;"> Books freely available</h1>  
<br />
<div align="right">
<button type="button" name="add" id="add" class="btn btn-success">Add new book </button>
</div>
<br />
<div id="image_data">

</div>
</div>  
<div id="imageModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
  
   <div class="modal-body">
    <form id="image_form" method="post" enctype="multipart/form-data">
     <p><label>Select file</label>
     <input type="file" name="image" id="image" /></p><br />
     <input type="hidden" name="action" id="action" value="insert" />
     <input type="hidden" name="image_id" id="image_id" />
     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />
      
    </form>
   </div>
  
  </div>
 </div>
</div>
 
<script src="javascript/book_pp_script.js"> </script>
</body>  
</html>

<?php include "cookie.php" ?>
<?php include "footer.html" ?>