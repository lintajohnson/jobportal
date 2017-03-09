<?php
include("header.php");
include("connect.php");
?>
<?php
$email= $pass= $confirm= $comp= $Company_Type= $favorites= $add= $count= $state= $city= $pin= $contact= $person="";
$emailError = $passError= $conerror=$nameError= $noError= $faverror= $adderror=$counterror=$stateerror=$cityerror=$pinerror=$contacterror= $personError="";

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
if (empty($_POST["pass"])) {
 $passerror="Password is required";
}
else {
$confirm = test_input($_POST["pass"]);
}
if (empty($_POST["confirm"])) {
 $conerror="";
}
else {
$pass = test_input($_POST["confirm"]);
}

if (empty($_POST["comp"])) {
$nameerror = "Name is required";
} 
else {
$comp = test_input($_POST["comp"]);
if (!preg_match("/^[a-zA-Z ]*$/",$comp)) {
$nameerror = "Only letters and white space allowed";
}
}
if (empty($_POST["company_type"])) {
$noerror = "Type is required";
} 
else {
$company_type = test_input($_POST["company_type"]);
}
if (empty($_POST["favorites"])) {
 $faverror="";
}
else {
$favorites= test_input($_POST["favorites"]);
}
if (empty($_POST["add"])) {
 $adderror="";
}
else {
$add= test_input($_POST["add"]);
}
if (empty($_POST["count"])) {
 $counterror="";
}
else {
$count= test_input($_POST["count"]);
}
if (empty($_POST["state"])) {
 $stateerror="";
}
else {
$state = test_input($_POST["state"]);
}
if (empty($_POST["city"])) {
 $cityerror="";
}
else {
$city = test_input($_POST["city"]);
}
if (empty($_POST["pin"])) {
 $pinerror="";
}
else {
$pin = test_input($_POST["pin"]);
}
if(empty($_POST["contact"])){
	$contacterror="no: is required";
}
else{
	$contact=test_input($_POST["contact"]);
}
if(empty($_POST["person"])){
	$personerror="name is required";
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
<?php

if(isset($_POST["regist"]))
	{
		$em=$_POST['email'];
		$pa=md5($_POST['pass']);
		$con=md5($_POST['confirm']);
		$cmy=$_POST['comp'];
		$co=$_POST['Company Type'];
		$fav=$_POST['favorites'];
		$ad=$_POST['add'];
		$nt=$_POST['count'];
		$st=$_POST['state'];
		$ci=$_POST['city'];
		$pi=$_POST['pin'];
		$tact=$_POST['contact'];
		$per=$_POST['person'];
	
		$in=$link->query("insert into employer_register(email,password,con_password,comp_name,comp_type,industry_type,address,country,state,city,pin_code,contact_no,contact_person) values('$em','$pa','$con','$cmy','$co','$fav','$ad','$nt','$st','$ci','$pi','$tact','$per')");
		if($in>0)
		{
			echo"inserted sucessfully";
		}
		else
			echo"failed";
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
	<td><span class="error">* <?php echo $emailerror;?></span></td>
</tr>
<tr>
    <td align='center'>Password:</td>
    <td><input type="password" name="pass"></td>
	<td><span class="error">* <?php echo $passerror;?></span></td>
</tr>
<tr>
    <td align='center'>Confirm Password:</td>
    <td><input type="password" name="confirm"></td>
	<td><span class="error">* <?php echo $nconerror;?></span></td>
</tr>
<tr>
    <td align='center'>Company Name:</td>
    <td><input type="text" name="comp"></td>
	<td><span class="error">* <?php echo $nameerror;?></span></td>
	
</tr>
<tr>
    <td align='center'>Company Type:</td>
    <td><input type="radio" name="chooseone" value="company"><label for="company">Company</label>
	<input type="radio" name="chooseone" value="consltant"><label for="consltant">Consltant</label>
	</td>
	<td><span class="error">* <?php echo $noerror;?></span></td>
</tr>
<tr>
    <td align='center'>Industry Type:</td>
    <td><select name="favorites"> 
	<option value="select">---SELECT---</option>
	<option value="Software">Software</option>
	<option value="Hardware">Hardware</option>
	<option value="Networking">Networking</option>
	<td><span class="error">* <?php echo $faverror;?></span></td>
	</select>
	</td>
</tr>
<tr>
    <td align='center'>Address:</td>
    <td><input type="text" name="add"></td>
	<td><span class="error">* <?php echo $adderror;?></span></td>
</tr>
<tr>
    <td align='center'>Country:</td>
    <td><input type="text" name="count"></td>
	<td><span class="error">* <?php echo $counterror;?></span></td>
</tr>
<tr>
    <td align='center'>State:</td>
    <td><input type="text" name="state"></td>
	<td><span class="error">* <?php echo $stateerror;?></span></td>
</tr>
<tr>
    <td align='center'>City:</td>
    <td><input type="text" name="city"></td>
	<td><span class="error">* <?php echo $cityerror;?></span></td>
</tr>
<tr>
    <td align='center'>Pincode:</td>
    <td><input type="text" name="pin"></td>
	<td><span class="error">* <?php echo $pinerror;?></span></td>
</tr>
<tr>
    <td align='center'>Contact No:</td>
    <td><input type="text" name="contact"></td>
	<td><span class="error">* <?php echo $contacterror;?></span></td>

</tr>
<tr>
    <td align='center'>Contact Person:</td>
    <td><input type="text" name="person"></td>
	<td><span class="error">* <?php echo $personerror;?></span></td>
	
	
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