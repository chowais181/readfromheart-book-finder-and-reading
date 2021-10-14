<?php
include "init.php"; 
if(isset($_SESSION['id'])){
  include "header2.html"; 
}else{
  include "header.html" ;
}
?>

<!DOCTYPE html "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<!-- JavaScript Bundle with Popper -->

    <title>ReadFromHeart | read book mode</title>
    
    <script type="text/javascript" src="https://www.google.com/books/jsapi.js"></script>
    <script type="text/javascript">
      google.books.load();
      function initialize() {
        document.getElementById("msgg").style.display="none";
        var viewer = new google.books.DefaultViewer(document.getElementById('viewerCanvas'));
        var index = document.URL.indexOf('?');
        if (index > 0) {
            var bookIsbn = document.URL.substring(index, document.URL.length).split("=")[1]
            console.log(bookIsbn);
        }
        //viewer.load('ISBN:0738531367'); //for test purpose
        viewer.load('ISBN:'+bookIsbn);
      }
      google.books.setOnLoadCallback(initialize);
    </script>    
  </head>
  <body>
    <br><br><br><br>
    <div id="msgg" class="text-center">
    <h3 for="file">Book is opening please wait</h3>
    <progress id="file" value="32" max="100"> 32% </progress>
    </div>
    <!-- <h1 id="msgg">Book is opening please wait<h1> -->
    <div class="container">
      <div class="text-center" id="viewerCanvas" style="width: 1200px; height: 700px"></div>
    </div>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    -->
  </body>
</html>

<?php include "cookie.php" ; ?>
<?php include "footer.html" ; ?>