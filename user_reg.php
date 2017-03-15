<?php
include("header.php");

?>
<form action="upload.php" method="post" enctype="multipart/form-data">
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
    <td><input type='text' name='email' value='<?php echo htmlspecialchars($email);?>'></td>
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
	<td><span class="error">* <?php echo $locerror;?></span></td>
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
	<td><span class="error">* <?php echo $ziperror;?></span></td>
</tr>
</tr>
<tr>
    <td align='center'>Key Skills:</td>
    <td><textarea name='key'></textarea></td>
	<td><span class="error">* <?php echo $keyerror;?></span></td>
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
	<td><span class="error"> <?php echo $favorerror;?></span></td>
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
	<td><span class="error"><?php echo $faverror;?></span></td>
	</select>
	</td>
</tr>
<tr>
    <td align='center'>Attach Resume:</td>
    <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
	<td><span class="error"><?php echo $fileerror;?></span></td>
    
	
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