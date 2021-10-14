<?php include "header2.html"; ?>
<?php include "init.php"; ?>
<?php if(!isset($_SESSION['id'])): ?>
    <?php header("location:login.php"); ?>
    <?php endif; ?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>read from heart | Profile</title>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="css/profile_pic.css">
</head>
<body style="background-color:rgba(0, 0, 0, 0.2);">
<div class="text-center" >
<div class="p-3 mb-2 bg-success text-white">  
<?php if(isset($_SESSION['login_success'])) ?>
     <div class="success">
          <h1><?php echo $_SESSION['login_success']; ?></h1>
     </div>
</div>      
</div>    
<h2 class="text-center" style="color:brown;">Welcome to the your profile </h2>

<div class="contain">
     <h5 class="text-center" style="color:dodgerblue;"><?php echo $_SESSION['em']; ?></h5>
     <h5 class="text-center" style="color:dodgerblue;"><?php echo $_SESSION['name']; ?></h5>   
</div>
</div>
<h1 class="float-right"><button class="btn btn primary"><a href="update_profile.php"> Update account </a></button></h1>
<h1 class="float-right"><button class="btn btn primary"><a href="delete_profile.php"> Delete account </a></button></h1>
<?php include "pp.php" ?>
</body>
</html>

<?php include "cookie.php"; ?>
<?php include "footer.html"; ?>
