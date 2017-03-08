<?php
include("header.php");
?>
<?php
$link = mysqli_connect("localhost", "root","", "jobportal");
?>
<?php
if(isset($_POST["submit"]))
{
		$email=$_REQUEST['email'];
		$pass=md5($_REQUEST['pass']);
		$con=md5($_REQUEST['con']);
		$name=$_REQUEST['name'];
		$loc=$_REQUEST['loc'];
		$no=$_REQUEST['no'];
		$zip=$_REQUEST['zip'];
		$key=$_REQUEST['key'];
		$resume=$_REQUEST['resume'];
		$current=$_REQUEST['current'];
		$favor=$_REQUEST['favor'];
		$favorites=$_REQUEST['favorites'];
		$fileupload=$_REQUEST['fileupload'];

 $in=$link->query("INSERT INTO user_register(email,password,con_password,name,curr_loc,mob_no,total_exp,key_skills,res_head,curr_ind,fun_area,basic_grad,attach_res)
    VALUES ('$email','$pass','$con','$name','$loc','$no','$zip','$key','$resume','$current','$favor','$favorites','$fileupload')");

     if($in>0){
echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $in . "<br>" .$link->query ."');</script>";
}

$link->close();
}
?>
<?php
$emailError ="";
$passError="";
$nameError="";


if(isset($_POST['submit'])){
if (empty($_POST["email"])) {
$emailError = "Email is required";
} 
else{
$email = test_input($_POST["email"]);
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
$emailError = "Invalid email format";
}
}
if (empty($_POST["pass"])) {
 $passError="Password is required";
}
else {
$pass = test_input($_POST["pass"]);
}
if (empty($_POST["nam"])) {
$nameError = "Name is required";
} 
else {
$nam = test_input($_POST["nam"]);
if (!preg_match("/^[a-zA-Z ]*$/",$nam)) {
$nameError = "Only letters and white space allowed";
}
}
}
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>
<form action="" method="post">
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
	<td><span class="error">* <?php echo $emailError;?></span></td>
</tr>
<tr>
    <td align='center'>Password:</td>
    <td><input type='password' name='pass'></td>
	<td><span class="error">* <?php echo $passError;?></span></td>
</tr>
<tr>
    <td align='center'>Confirm Password:</td>
    <td><input type='password' name='con'></td>
</tr>
<tr>
    <td align='center'>Name:</td>
    <td><input type='text' name='name'></td>
	<td><span class="error">* <?php echo $nameError;?></span></td>
</tr>
<tr>
    <td align='center'>Current Location:</td>
    <td><input type='text' name='loc'></td>
</tr>
<tr>
    <td align='center'>Mobile NO:</td>
    <td><input type='text' name='no'></td>
</tr>
<tr>
    <td align='center'>Total Experience:</td>
    <td><input type='text' name='zip'></td>
</tr>
<tr>
    <td align='center'>Key Skills:</td>
    <td><textarea name='key'></textarea></td>
</tr>
<tr>
    <td align='center'>Resume Headline:</td>
    <td><input type='text' name='resume'></td>
</tr>
<tr>
    <td align='center'>Current Industry:</td>
    <td><input type='text' name='current'></td>
</tr>
<tr>
    <td align='center'>Functional Area:</td>
    <td><select name="favor"> 
	<option value="select">---SELECT---</option>
	<option value="web designer">Web Designer</option> 
	<option value="Developer">Developer</option> 
	<option value="Software Engineer">Software Engineer</option>
	<option value="Project Manager">Project Manager</option> </td>
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
	</select>
	</td>
</tr>
<tr>
    <td align='center'>Attach Resume:</td>
    <td><input type="file" name="fileupload" value="fileupload" id="fileupload"></td>
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
 