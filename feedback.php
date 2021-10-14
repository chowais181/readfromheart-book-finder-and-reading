<?php
include "init.php"; 
if(isset($_SESSION['id'])){
  include "header2.html"; 
}else{
  include "header.html" ;
}
?>
<?php 
$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "login";

try {
  $dsn = "mysql:host=" . $dbHost . ";dbname=" . $dbName;
  $pdo = new PDO($dsn, $dbUser, $dbPassword);
} catch(PDOException $e) {
  echo "DB Connection Failed: " . $e->getMessage();
}


// <!-- feedback validation -->
$status = "";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  if(empty($name) || empty($email) || empty($message)) {
    $status = "All fields are compulsory.";
  } else {
    if(strlen($name) >= 255 || !preg_match("/^[a-zA-Z-'\s]+$/", $name)) {
      $status = "Please enter a valid name";
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $status = "Please enter a valid email";
    } else {

      $sql = "INSERT INTO contactinfo (name, email, message) VALUES (:name, :email, :message)";
      $stmt = $pdo->prepare($sql);
      $stmt->execute(['name' => $name, 'email' => $email, 'message' => $message]);

      $status = "Your feedback is successfully submitted!";
      $name = "";
      $email = "";
      $message = "";
    }
  }
}

?>


<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html lang="en">
<br><br><br><br><br><br><br><br><br><br><br><br>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ReadFromHeart | feedback</title>
  <link rel="stylesheet" href="css/feedback_style.css">

</head>
<body>
  <div class="wrapper">
    <form action="" class="form" method="POST">
      <div class="pageTitle title">Feedback </div>
      <!-- <div class="secondaryTitle title">Please fill this form to sign up.</div> -->
      <input type="text" class="name formEntry" style="color:black" placeholder="Name" name="name" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $name ?>" />
      <input type="text" class="email formEntry" placeholder="Email" name="email" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $email ?>"/>
      <textarea class="message formEntry" placeholder="Message" name="message"  class="gt-input gt-text"><?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $message ?></textarea>
      <button class="submit formEntry" onclick="thanks()">Submit</button>
      <div class="form-status" style="text-align:center;color:red;font-size:25px">
      <?php echo $status ?>
      </div>
    </form>
  </div>
<!-- partial -->
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <br><br><br><br><br><br><br><br><br><br>
</body>
</html>
<?php include "cookie.php" ?>
<?php include "footer.html";?>