<?php include "init.php"; ?>
<!-- update in account     -->
<?php 
$ee=$_SESSION['em'];
$connect = mysqli_connect("localhost", "root", "", "login");
$query = "DELETE FROM users where email ='$ee'";  
if(mysqli_query($connect, $query)){
echo "<script> alert('your account is deleted')</script>";
}

 header("location:login.php");
?>
