
<?php include "init.php"; ?>
<?php if(!isset($_SESSION['id'])): ?>
    <?php header("location:admin_panel.php"); ?>
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
     <h2 class="float-right"><a href="logout.php" class="btn btn-info btn-lg">logout</a></h2>  
     <h2 class="text-center" style="color:dodgerblue;">Welcome to Admin Panel </h2>


     <div class="contain">
          <table>
               <td><h3> id </h3></td>
               <td><h5><?php echo $_SESSION['id']; ?></h5></td>
               <td><h3> email </h3></td>
               <td><h5><?php echo $_SESSION['em']; ?></h5></td>
          </table>     
     </div>
</div>


<h1> Feedbacks</h1>
<table class="table">  
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Message</th>
    </tr> 
    <?php  
    $connect = mysqli_connect("localhost", "root", "", "login");
    $query = "SELECT * FROM contactinfo ORDER BY id DESC";  
    $result = mysqli_query($connect, $query);  
    while($row = mysqli_fetch_array($result))  
    {  
        echo '  
        <tr>  
            <td>  '.$row['name'].' </td>  
            <td>  '.$row['email'].' </td> 
            <td>  '.$row['message'].' </td> 
        </tr>                     
    ';  
    }  
    ?>  
</table>  
<br><br><br><br>
<h1> users detail</h1>
<table class="table">  
    <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
  
    </tr> 
    <?php  
    $connect = mysqli_connect("localhost", "root", "", "login");
    $query = "SELECT * FROM users ORDER BY id DESC";  
    $result = mysqli_query($connect, $query);  
    while($row = mysqli_fetch_array($result))  
    {  
        echo '  
        <tr>  
            <td>  '.$row['id'].' </td>  
            <td>  '.$row['name'].' </td>  
            <td>  '.$row['email'].' </td>  
        </tr>                     
    ';  
    }  
    ?>  
</table>  

<br><br><br><br>
<h1> Books detail</h1>
<br><br>
<table class="table">  
    <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Size</th>
    <th>Downloads</th>
    </tr> 
    <?php  
    $connect = mysqli_connect("localhost", "root", "", "file-management");
    $query = "SELECT * FROM files ORDER BY id DESC";  
    $result = mysqli_query($connect, $query);  
    while($row = mysqli_fetch_array($result))  
    {  
        echo '  
        <tr>  
            <td>  '.$row['id'].' </td>  
            <td>  '.$row['name'].' </td>  
            <td>  '.$row['size'].' </td> 
            <td>  '.$row['downloads'].' </td> 
        </tr>                     
    ';  
    }  
    ?>  
</table>  


 </body>
 </html>