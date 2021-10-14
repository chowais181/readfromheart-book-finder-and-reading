<?php include "init.php";
include "header.html"; ?>
<?php if(isset($_SESSION['id'])): ?>
  <?php header("location:admin_panel.php"); ?>
  <?php endif; ?>

<?php 

if(isset($_POST['login'])){

   $data = [
    'email'           => $_POST['email'],
    'password'       => $_POST['password'],
    'email_error'    => '',
    'password_error' => ''
];

$emaill= $data['email'];
$pass=$data['password'];

if(empty($data['email'])){
$data['email_error'] = "Email is required";
}

if(empty($data['password'])){
$data['password_error'] = "Password is required";
}

 /*
     * Submit the login form
 */ 
if(empty($data['email_error']) && empty($data['password_error'])){
  if($source->Query("SELECT * FROM admin WHERE email = ?", [$data['email']])){
    if($source->CountRows() > 0){
     $row = $source->Single();
     $id = $row->id;
     $email=$row->email;
     $db_password = $row->password;
     if($data['password']== $db_password){
      //  to set cookies
      if(isset($_POST['remember'])){
        setcookie("email",$emaill,time()+60*60*60*7);
        setcookie("password",$pass,time()+60*60*60*7);
      }    
      $_SESSION['login_success'] = "Hi You are successfully login";
      $_SESSION['id'] = $id;
      $_SESSION['em'] = $email;
      header("location:admin_panel.php");
     }
      else {
      $data['password_error'] = "Please enter correct password";
     }
    }
     else {
      $data['email_error'] = "Please enter correct email";
    }
  }
 }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Singup Form</title>
 <link rel="stylesheet" href="css/login_style.css">
 <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400" rel="stylesheet"> 
</head>
<body>
 
 <div class="container">
  <div class="form">
   <div class="form-section">
    <form action="" method="POST">
      <div class="group">
        <?php 
        
        if(isset($_SESSION['account_created'])):?>
          <div class="success">
            <?php echo $_SESSION['account_created']; ?>
          </div>
        <?php endif; ?>
        <?php unset($_SESSION['account_created']); ?>

         
      </div>
     <div class="group">
      <h3 class="heading">Admin Login</h3>
     </div>
     <div class="group">
      <input type="email" name="email" id="email"     class="control" placeholder="Enter Email.." value="<?php if(!empty($data['email'])): echo $data['email']; endif;?>">
      <div class="error">
        <?php if(!empty($data['email_error'])): ?>
          <?php echo $data['email_error']; ?>
        <?php endif; ?>
      </div>
     </div>
     <div class="group">
      <input type="password" name="password" id="pass" class="control" placeholder="Enter Password..." value="<?php if(!empty($data['password'])): echo $data['password']; endif;?>">

      <div class="error">
        <?php if(!empty($data['password_error'])): ?>
          <?php echo $data['password_error']; ?>
        <?php endif; ?>
      </div>
      <br><br><input type="checkbox" name="remember" >Remember me
     </div>
 
     <div class="group m20">
      <input type="submit" name="login" class="btn" value="Login &rarr;" >
     </div>
    
     <div class="group m20">
      <a href="login.php" class="link"  style="color:blue">user Login</a>
     </div>
    </form>
   </div>
  </div>
 </div>

<?php 

if(isset($_COOKIE['email']) && isset($_COOKIE['password'])){
    $email=$_COOKIE['email'];
    $pass=$_COOKIE['password'];
    echo "<script>
    document.getElementById('email').value='$email';
    document.getElementById('pass').value='$pass';
    </script>";
 }

?>
<!-- <script>
document.getElementById('email').value.inner.html;
</script> -->



</body>
</html>
<?php include "footer.html";?>