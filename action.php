<?php
include "init.php";
$idd=$_SESSION['id'];
//action.php
if(isset($_POST["action"]))
{
 $connect = mysqli_connect("localhost", "root", "", "login");
 if($_POST["action"] == "fetch")
 {
  $query = "SELECT * FROM tbl_images where idd ='$idd'";
  $result = mysqli_query($connect, $query);
  $output = '
   <table class="table table-dark">  
    <tr>
    
    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '

    <tr>
     
     <td>
      <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="500" width="500" class="img-thumbnail" /><br>
      <button type="button" name="update" class="btn btn-warning bt-xs update" id="'.$row["id"].'">Change</button>
      <button type="button" name="delete" class="btn btn-danger bt-xs delete" id="'.$row["id"].'">Remove</button>
     </td>
    
    </tr>
   ';
  }
  $output .= '</table>';
  echo $output;
 }

 if($_POST["action"] == "insert")
 {
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  $query = "INSERT INTO tbl_images(name,idd) VALUES ('$file','$idd') ";
  if(mysqli_query($connect, $query))
  {
   echo 'Image Inserted into Database';
  }
 }
 if($_POST["action"] == "update")
 {
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  $query = "UPDATE tbl_images SET name = '$file' WHERE id = '".$_POST["image_id"]."'";
  if(mysqli_query($connect, $query))
  {
   echo 'Image Updated into Database';
  }
 }
 if($_POST["action"] == "delete")
 {
  $query = "DELETE FROM tbl_images WHERE id = '".$_POST["image_id"]."'";
  if(mysqli_query($connect, $query))
  {
   echo 'Image Deleted from Database';
  }
 }
}
?>