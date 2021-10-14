<?php
include "init.php"; 
if(isset($_SESSION['id'])){
  include "header2.html"; 
}else{
  include "header.html" ;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ReadFromHeart | find book</title>
    
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div id="title" class="center">
        <div class="row">
          <div id="input" class="input-group mx-auto col-lg-6 col-md-8 col-sm-12">
            <input id="search-box" type="search" class="form-control" placeholder="Search Books!...">
            <button id="search" class="btn btn-primary" onclick="">Search</button>
          </div>
        </div>
      </div>

      <div class="book-list" >
        <h2 class="text-center">Search Result</h2>
        <div id="list-output" class="">

          <div class="row">
            <!-- card  -->

          </div>

        </div>
      </div>
    </div>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <link rel="stylesheet" href="css/search_style.css">
    <script src="javascript/search_book_script.js"></script>
    <br><br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br>
  </body>
</html>
<?php include "cookie.php"; ?>
<?php include "footer.html" ?>