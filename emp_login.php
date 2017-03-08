<?php
include("header.php");
?>
<?Php
$error="";
if (isset($_POST['login'])) {
if (empty($_POST['name']) || empty($_POST['pass']))
	{
$error = "*Username or Password is invalid";
}
}
?>
<form action="" method="post">
<table border='0' width='480px' align='center'>
<tr>
   <td><h1>LOGIN HERE</h1></td>
</tr>
<table border='0' width='480px' align='center'>
<tr>
    <td align='center'>Username:</td>
    <td><input type='text' name='name'></td>
</tr>
<tr>
    <td align='center'>Password:</td>
    <td><input type='password' name='pass'></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<table border='0' width='480px' align='center'>
<tr>
    <td align='center'><input type='submit' name='login' value="LOGIN"></td>
</tr>
<tr>
<td align="center"><span><?php echo $error; ?></span><td>
</tr>
</table>
</table>
</table>
</form>
<?php
include("footer.php");
?>