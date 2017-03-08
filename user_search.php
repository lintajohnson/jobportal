<?php
include("header.php");
?>
<form action="" method="post">
<table border='0' width='480px'align='center'>
<tr>
   <td><h1>JOB SEARCH</h1></td>
</tr>

<table border='0' width='480px' align='center'>
<tr>
    <td align='center'>Experience:</td>
    <td><input type='text' name='name'></td>
</tr>
<tr>
    <td align='center'>Location:</td>
    <td><input type='text' name='name'></td>
</tr>
<tr>
    <td align='center'>Job Category:</td>
    <td><input type='text' name='name'></td>
</tr>
<tr>
    <td align='center'>Expected Salary:</td>
    <td><input type='text' name='name'></td>
</tr>
<tr>
    <td align='center'>Industry:</td>
    <td><select name="favorites"> 
	<option value="select">---SELECT---</option>
	<option value="">Software</option> 
	<option value="">Hardware</option>
	<option value="">Networking</option>
	</select></td>
</tr>
<tr>
    <td align='center'>Job Type:</td>
    <td><input type='text' name='name'></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<table border='0' width='480px' align='center'>
<tr>
    <td align='center'><input type='submit' name='search' value="SEARCH"></td>
</tr>
</table>
</table>
</table>
</form>
<?php
include("footer.php");
?>