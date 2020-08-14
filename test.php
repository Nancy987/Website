<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $file_name=$_FILES['image']['name'];
  $file_current_location=$_FILES['image']['tmp_name'];
  $file_type=$_FILES['image']['type'];
  $file_size=$_FILES['image']['size'];
  $file_destination_location="uploads\\".$file_name;
  echo 'Uploaded Image Details<br>';
  echo "Name : ".$file_name."<br>";
  echo "Type : ".$file_type."<br>";
  echo "Size : ".$file_size."<br>";
  if(move_uploaded_file($file_current_location,$file_destination_location))
   echo "Image Successfully Uploaded";
  else
   echo "Failed to Upload";    
}
?>
<?php
echo'<form action="test.php" method="POST"  enctype="multipart/form-data">
          <label for="image">Upload Image</label>
          <input type="file" name="image" value="image" accept="image/*">
          <input type="submit" name="upload" value="upload">
     </form>';
	 // <a class="btn btn-secondary btn-lg" href="login.php" role="button">Login</a>
?>

