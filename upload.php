<?php
if(isset($_POST["submit"])){
	
	if (empty($_POST["email"])) {
    $emailerror = "email is required";
    } 
	else {
    $email= test_input($_POST["email"]);
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailerror = "Invalid email format"; 
    }
	}
  
	if(empty($_POST["pass"])) {
	$passerror="password is required";
	}
	else{
    $pass= test_input($_POST["pass"]);
    if($_POST['pass'] != $_POST['con']){ 
    $passerror = 'Passwords should be same<br>'; 
    }
	}
	if(empty($_POST["name"])) {
		$nameerror="name is required";
	}
	else{
    $name = test_input($_POST["name"]);
	if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameerror = "Only letters and white space allowed"; 
    }
	}
	if(empty($_POST["loc"])) {
		$locerror="location is required";
	}
	else{
    $location = test_input($_POST["loc"]);
	}
	if(empty($_POST["no"])) {
		$noerror="";
	}
	else{
    $number = test_input($_POST["no"]);
	}
	if(empty($_POST["zip"])) {
		$ziperror="experience is required";
	}
	else{
  $experience = test_input($_POST["zip"]);
	}
	if(empty($_POST["key"])) {
		$keyerror="skills is required";
	}
	else{
  $skills = test_input($_POST["key"]);
}
if(empty($_POST["resume"])) {
		$resumeerror="";
	}
	else{
    $resume = test_input($_POST["resume"]);
	}
	if(empty($_POST["current"])) {
		$currerror="";
	}
	else{
    $current = test_input($_POST["current"]);
	}
	if(empty($_POST["favor"])) {
		$favorerror="";
	}
	else{
    $favor = test_input($_POST["favor"]);
	}
	if(empty($_POST["favorites"])) {
		$faverror="";
	}
	else{
    $favorites = test_input($_POST["favorites"]);
	}
	if(empty($_POST["fileToUpload"])) {
		$fileerror="";
	}
	else{
    $fileupload = test_input($_POST["fileToUpload"]);
	}
	

		$email=$_POST['email'];
		$pass=md5($_POST['pass']);
		$name=$_POST['name'];
		$loc=$_POST['loc'];
		$no=$_POST['no'];
		$zip=$_POST['zip'];
		$key=$_POST['key'];
		$resume=$_POST['resume'];
		$current=$_POST['current'];
		$favor=$_POST['favor'];
		$favorites=$_POST['favorites'];
		$fileupload=$_POST['fileToUpload'];
if($emailerror != "" || $passerror != "" || $nameerror != ""  ||$locerror!="" || $noerror!="" || $ziperror!="" || $keyerror!="" || $resumeerror!="" || $currerror!="" ||$favorerror!="" ||$faverror!="" || $fileerror!="")
{
  echo'sorry registration failed';
}
else{
 $in=$link->query("INSERT INTO user_register(email,password,name,curr_loc,mob_no,total_exp,key_skills,res_head,curr_ind,fun_area,basic_grad,attach_res)
    VALUES ('$email','$pass','$name','$loc','$no','$zip','$key','$resume','$current','$favor','$favorites','$fileupload')");
	echo"Registration success";
	}
	
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if ($_FILES["fileToUpload"]["size"] > 500000) {
 echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

if($imageFileType != "doc" && $imageFileType != "pdf" && $imageFileType != "docx" ) {
    echo "Sorry, only DOC,PDF & DOCX files are allowed.";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";

} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
	}

}


?>
