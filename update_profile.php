<?php 
include "header2.html";
include "init.php";

?>
<!-- update in account     -->
<?php 
if(isset($_POST['update'])){
   
     $data = [
         'name'             => $_POST['full_name'],
         'password'         => $_POST['password'],
         'confirm_password' => $_POST['confirm'],
         'name_error'       => '',
         'password_error'   => '',
         'confirm_error'    => ''
     ];
     
     $n=$data['name'];
     $p= $data['password'];
     
  
     /*
          * Name validation
     */ 
     if(empty($data['name'])){
      $data['name_error'] = "Name is required";
     } else{
      if(strlen($data['name']) >= 255 || !preg_match("/^[a-zA-Z-'\s]+$/", $data['name'])) {
        $data['name_error'] = "Please enter a valid name";}
     }
     
  
    
  
     /*
          * Password validations
     */ 
  
     if(empty($data['password'])){
        $data['password_error'] = "Password is required";
     } 
     else{
          if($source->Query("SELECT * FROM users WHERE password = ?", [$data['password']])){
              if($source->CountRows() > 0 ){
              $data['password_error'] = "Sorry this password  is not available";
              }
          }
          if(strlen($data['password']) < 5){
          $data['password_error'] = "Password is too short";
          }
     }
  
     /*
         * Confirm password validations
     */ 
  
     if(empty($data['confirm_password'])){
  
      $data['confirm_error'] = "Confirm password is required";
  
     } else if($data['password'] != $data['confirm_password']){
      $data['confirm_error'] = "Confirm password is not matched";
     }
  
     /*
          * Submit the form
     */ 
    $e=$_SESSION['em'];

     if(empty($data['password_error']) && empty($data['confirm_error'])){
       $p = password_hash($data['password'], PASSWORD_DEFAULT);
       if($source->Query("UPDATE users SET  password='$p' WHERE email ='$e'" )){
       echo "your data is updated";
       header("location:logout.php");
       }
     }else if(empty($data['name_error'])) {
        if($source->Query("UPDATE users SET name ='$n' WHERE email ='$e'" )){
            echo "your name is updated";
            header("location:logout.php");
        }
     }else{
        header("location:profile.php");
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
      <h3 class="heading">Update account</h3>
     </div>
     <div class="group">

      <input type="text" name="full_name" class="control" placeholder="Update Name..." value="<?php if(!empty($data['name'])): echo $data['name']; endif;?>">
      <div class="error">
        <?php if(!empty($data['name_error'])): ?>
          <?php echo $data['name_error']; ?>
        <?php endif; ?>
      </div>
     </div>
    
     <div class="group">
      <input type="password" name="password" class="control" placeholder="Update Password..." value="<?php if(!empty($data['password'])): echo $data['password']; endif; ?>">
      <div class="error">
        <?php if(!empty($data['password_error'])): ?>
          <?php echo $data['password_error']; ?>
        <?php endif; ?>
      </div>
     </div>
     <div class="group">
      <input type="password" name="confirm" class="control" placeholder="Confirm Password..." value="<?php if(!empty($data['confirm_password'])): echo $data['confirm_password']; endif; ?>">
      <div class="error">
        <?php if(!empty($data['confirm_error'])): ?>
          <?php echo $data['confirm_error']; ?>
        <?php endif; ?>
      </div>
     </div>

     <div class="group m20">
      <input type="submit" name="update" class="btn" value="Update account &rarr;">
     </div>

    </form>
   </div>
  </div>
 </div>
 
</body>
</html>