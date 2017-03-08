<?php
include("header.php");
$link = mysqli_connect("localhost", "root","", "jobportal");
?>
<form action="" method="post">

<table border='0' width='480px'align='center'>
<tr>
   <td><h1>RESUME SEARCH</h1></td>
</tr>
<tr>
<td><h3>Basic Details</h3>
</td>
</tr>
<table border='0' width='480px' align='center'>
<tr>
    <td align='center'>Keywords:</td>
    <td><input type='text' name='name'></td>
</tr>
<tr>
    <td align='center'>Total Experience:</td>
    <td><input type='text' name='name'></td>
</tr>
<tr>
    <td align='center'>Location:</td>
    <td><input type='text' name='name'></td>
</tr>
<tr>
<td><h3>Employement Details</h3>
</td>
</tr>
<tr>
    <td align='center'>Functional Area:</td>
    <td><input type='text' name='name'></td>
</tr>
<tr>
    <td align='center'>Industry Type:</td>
    <td><input type='text' name='name'></td>
</tr>
<tr>
<td><h3>Educational Details</h3>
</td>
</tr>
<tr>
    <td align='center'>Qualification:</td>
    <td><input type='text' name='name'></td>
</tr>
<tr>
    <td align='center'>Year of Passing:</td>
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