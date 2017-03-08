<?php
include("header.php");
$link = mysqli_connect("localhost", "root","", "jobportal");
?>
<?php
if(isset($_REQUEST["regist"]))
	{
		$em=$_REQUEST['email'];
		$pa=md5($_REQUEST['pass']);
		$con=$_REQUEST['confirm'];
		$cmy=$_REQUEST['comp'];
		$co=$_REQUEST['chooseone'];
		$fav=$_REQUEST['favorites'];
		$ad=$_REQUEST['add'];
		$nt=$_REQUEST['count'];
		$st=$_REQUEST['state'];
		$ci=$_REQUEST['city'];
		$pi=$_REQUEST['pin'];
		$tact=$_REQUEST['contact'];
		$per=$_REQUEST['person'];
	
		$in=$link->query("insert into employer_register(email,password,con_password,comp_name,comp_type,industry_type,address,country,state,city,pin_code,contact_no,contact_person) values('$em','$pa','$con','$cmy','$co','$fav','$ad','$nt','$st','$ci','$pi','$tact','$per')");
		if($in>0)
		{
			echo"<script type= 'text/javascript'>alert('New record created successfully');</script>";
		}
		else
			echo"<script type= 'text/javascript'>alert('Error: " . $in . "<br>" . $link->query."');</script>";
	}
	?>

<?php
$emailError ="";
$passError="";
$nameError="";
$companyError="";
$noError="";
$personError="";

if(isset($_POST['regist'])){
if(empty($_POST["email"])){
$emailError = "Email is required";
} 
else{
$email = test_input($_POST["email"]);
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)){
$emailError = "Invalid email format";
}
}
if (empty($_POST["pass"])) {
 $passError="Password is required";
}
else {
$pass = test_input($_POST["pass"]);
}
if (empty($_POST["comp"])) {
$nameError = "Name is required";
} 
else {
$comp = test_input($_POST["comp"]);
if (!preg_match("/^[a-zA-Z ]*$/",$comp)) {
$nameError = "Only letters and white space allowed";
}
}
if (empty($_POST["chooseone"])) {
$companyError = "Type is required";
} 
else {
$chooseone = test_input($_POST["chooseone"]);
}
if(empty($_POST["contact"])){
	$noError="no: is required";
}
else{
	$contact=test_input($_POST["contact"]);
}
if(empty($_POST["person"])){
	$personError="name is required";
}
else{
	$person=test_input($_POST["person"]);
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
   <td><h1>NEW CLIENT REGISTER</h1></td>
   </tr>
   <tr>
   <td><span class="error">* required field.</span></td>
</tr>

<table border='0' width='480px' align='center'>
<tr>
    <td align='center'>Email ID:</td>
    <td><input type="text" name="email"></td>
	<td><span class="error">* <?php echo $emailError;?></span></td>
</tr>
<tr>
    <td align='center'>Password:</td>
    <td><input type="password" name="pass"></td>
	<td><span class="error">* <?php echo $passError;?></span></td>
</tr>
<tr>
    <td align='center'>Confirm Password:</td>
    <td><input type="password" name="confirm"></td>
</tr>
<tr>
    <td align='center'>Company Name:</td>
    <td><input type="text" name="comp"></td>
	<td><span class="error">* <?php echo $nameError;?></span></td>
	
</tr>
<tr>
    <td align='center'>Company Type:</td>
    <td><input type="radio" name="chooseone" value="company"><label for="company">Company</label>
	<input type="radio" name="chooseone" value="consltant"><label for="consltant">Consltant</label>
	</td>
	<td><span class="error">* <?php echo $companyError;?></span></td>
</tr>
<tr>
    <td align='center'>Industry Type:</td>
    <td><select name="favorites"> 
	<option value="select">---SELECT---</option>
	<option value="Software">Software</option>
	<option value="Hardware">Hardware</option>
	<option value="Networking">Networking</option>
	</select>
	</td>
</tr>
<tr>
    <td align='center'>Address:</td>
    <td><input type="text" name="add"></td>
</tr>
<tr>
    <td align='center'>Country:</td>
    <td><input type="text" name="count"></td>
</tr>
<tr>
    <td align='center'>State:</td>
    <td><input type="text" name="state"></td>
</tr>
<tr>
    <td align='center'>City:</td>
    <td><input type="text" name="city"></td>
</tr>
<tr>
    <td align='center'>Pincode:</td>
    <td><input type="text" name="pin"></td>
</tr>
<tr>
    <td align='center'>Contact No:</td>
    <td><input type="text" name="contact"></td>
	<td><span class="error">* <?php echo $noError;?></span></td>

</tr>
<tr>
    <td align='center'>Contact Person:</td>
    <td><input type="text" name="person"></td>
	<td><span class="error">* <?php echo $personError;?></span></td>
	
	
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<table border='0' width='480px' align='center'>
<tr>
    <td align='center'><input type="submit" name="regist" value="REGISTER NOW"></td>
</tr>
</table>
</table>
</table>
</form>
<?php
include("footer.php");
?>