<?php
//action.php
if(isset($_POST["action"]))
{
 $connect = mysqli_connect("localhost", "root", "", "file-management");
 if($_POST["action"] == "fetch")
 {
  $query = "SELECT * FROM files";
  $result = mysqli_query($connect, $query);
  $output = '
   <table class="table table-dark">  
    <tr>
    <th>Name</th>
    <th>Size</th>
    <th>Downloads</th>
    <th>Action</th>
    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '

    <tr>
     
     <td>'.$row["name"].'</td>
     <td>'.$row["size"].'</td>
     <td>'.$row["downloads"].'</td>
     <td><a href="book_action.php?file_id='.$row["id"].'">Download</a></td>
    </tr>
   ';
  }
  $output .= '</table>';
  echo $output;
 }

 if($_POST["action"] == "insert")
 {
 // name of the uploaded file
 $filename = $_FILES['image']['name'];

 // destination of the file on the server
 $destination = 'uploads/' . $filename;

 // get the file extension
 $extension = pathinfo($filename, PATHINFO_EXTENSION);

 // the physical file on a temporary uploads directory on the server
 $file = $_FILES['image']['tmp_name'];
 $size = $_FILES['image']['size'];

 if (!in_array($extension, ['pdf'])) {
     echo "Your file extension must be .pdf ";
 } elseif ($_FILES['image']['size'] > 50000000) { // file shouldn't be larger than 50 Megabyte
     echo 'file is too large';
 } else {
     // move the uploaded (temporary) file to the specified destination
     if (move_uploaded_file($file, $destination)) {
         $sql = "INSERT INTO files (name, size, downloads) VALUES ('$filename', $size, 0)";
         if (mysqli_query($connect, $sql)) {
             echo 'file uploaded successfully';
         }
     } else {
         echo 'failed to upload the file';
     }
 }

 }
 
}

 // Downloads files
 if (isset($_GET['file_id'])) {
    $connect = mysqli_connect("localhost", "root", "", "file-management");
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM files WHERE id=$id";
    $result = mysqli_query($connect, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        readfile('uploads/' . $file['name']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
        mysqli_query($connect, $updateQuery);
        exit;
    }
}

?>

