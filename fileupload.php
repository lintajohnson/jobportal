<!DOCTYPE html>
<html>
<body>
<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file) )
  
  {
      echo "The file   has been uploaded.";
  } else {
       echo "an error uploading your file.";
    }
	

?>
<form action="" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload " name="submit">
</form>

</body>
</html>