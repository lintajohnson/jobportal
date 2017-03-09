<?php
include("header.php");
include("connect.php");
?>
<?php
 $email = $pass = $con= $name = $location = $number = $experience = $skills = $resume= $current= $favour = $favorites= $fileupload="";
 $emailerror = $passerror = $conerror= $nameerror = $locationerror= $noerror= $experror= $skillserror= $resumeerror= $currerror= $faverror=$favorerror= $fileerror="";
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
	}
	if(empty($_POST["con"])) {
		$conerror="";
	}
	else{
    $con = test_input($_POST["con"]);
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
		$locationerror="location is required";
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
		$experror="experience is required";
	}
	else{
  $experience = test_input($_POST["zip"]);
	}
	if(empty($_POST["key"])) {
		$skillserror="skills is required";
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
	if(empty($_POST["favour"])) {
		$faverror="";
	}
	else{
    $favor = test_input($_POST["favor"]);
	}
	if(empty($_POST["favorites"])) {
		$favorerror="";
	}
	else{
    $favorites = test_input($_POST["favorites"]);
	}
	if(empty($_POST["fileupload"])) {
		$filerror="";
	}
	else{
    $fileupload = test_input($_POST["fileupload"]);
	}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<?php
if(isset($_POST["submit"]))
{
		$email=$_POST['email'];
		$pass=md5($_POST['pass']);
		$con=md5($_POST['con']);
		$name=$_POST['name'];
		$loc=$_POST['loc'];
		$no=$_POST['no'];
		$zip=$_POST['zip'];
		$key=$_POST['key'];
		$resume=$_POST['resume'];
		$current=$_POST['current'];
		$favor=$_POST['favor'];
		$favorites=$_POST['favorites'];
		$fileupload=$_POST['fileupload'];

 $in=$link->query("INSERT INTO user_register(email,password,con_password,name,curr_loc,mob_no,total_exp,key_skills,res_head,curr_ind,fun_area,basic_grad,attach_res)
    VALUES ('$email','$pass','$con','$name','$loc','$no','$zip','$key','$resume','$current','$favor','$favorites','$fileupload')");

     if($in>0){
echo "inserted successfully";
} else {
echo "failed";
}

$link->close();
}
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<table border='0' width='480px'align='center'>
<tr>
   <td><h1>CREATE YOUR ACCOUNT</h1></td>
</tr>
 <tr>
   <td><span class="error">* required field.</span></td>
</tr>
<table border='0' width='480px' align='center'>
<tr>
    <td align='center'>Email ID:</td>
    <td><input type='text' name='email'></td>
	<td><span class="error">* <?php echo $emailerror;?></span></td>
</tr>
<tr>
    <td align='center'>Password:</td>
    <td><input type='password' name='pass'></td>
	<td><span class="error">* <?php echo $passerror;?></span></td>
</tr>
<tr>
    <td align='center'>Confirm Password:</td>
    <td><input type='password' name='con'></td>
	<td><span class="error"><?php echo $conerror;?></span></td>
</tr>
<tr>
    <td align='center'>Name:</td>
    <td><input type='text' name='name'></td>
	<td><span class="error">* <?php echo $nameerror;?></span></td>
</tr>
<tr>
    <td align='center'>Current Location:</td>
    <td><input type='text' name='loc'></td>
	<td><span class="error">* <?php echo $locationerror;?></span></td>
</tr>
</tr>
<tr>
    <td align='center'>Mobile NO:</td>
    <td><input type='text' name='no'></td>
	<td><span class="error"><?php echo $noerror;?></span></td>
</tr>
<tr>
    <td align='center'>Total Experience:</td>
    <td><input type='text' name='zip'></td>
	<td><span class="error">* <?php echo $experror;?></span></td>
</tr>
</tr>
<tr>
    <td align='center'>Key Skills:</td>
    <td><textarea name='key'></textarea></td>
	<td><span class="error">* <?php echo $skillserror;?></span></td>
</tr>
</tr>
<tr>
    <td align='center'>Resume Headline:</td>
    <td><input type='text' name='resume'></td>
	<td><span class="error"> <?php echo $resumeerror;?></span></td>
</tr>
<tr>
    <td align='center'>Current Industry:</td>
    <td><input type='text' name='current'></td>
	<td><span class="error"><?php echo $currerror;?></span></td>
</tr>
<tr>
    <td align='center'>Functional Area:</td>
    <td><select name="favor"> 
	<option value="select">---SELECT---</option>
	<option value="web designer">Web Designer</option> 
	<option value="Developer">Developer</option> 
	<option value="Software Engineer">Software Engineer</option>
	<option value="Project Manager">Project Manager</option> </td>
	<td><span class="error"> <?php echo $faverror;?></span></td>
</tr>
<tr>
    <td align='center'>Basic Graduation:</td>
	<td>
	<select name="favorites"> 
	<option value="select">---SELECT---</option>
	<option value="bca">BCA</option> 
	<option value="mca">MCA</option> 
	<option value="btech">Btech</option>
	<option value="mtech">Mtech</option> 
	<td><span class="error"><?php echo $favorerror;?></span></td>
	</select>
	</td>
</tr>
<tr>
    <td align='center'>Attach Resume:</td>
    <td><input type="file" name="fileupload" value="fileupload" id="fileupload"></td>
	<td><span class="error"> <?php echo $fileerror;?></span></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<table border='0' width='480px' align='center'>
<tr>
    <td align='center'><input type='submit' name='submit' value="CREATE ACCOUNT"></td>
</tr>
</table>
</table>
</table>
</form>
<?php
include("footer.php");
?>
 