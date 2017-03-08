<?php
$link = mysqli_connect("localhost", "root","", "jobportal");
include("header.php");
?>
<?php
$error="";
if (isset($_POST['login'])) {
if (empty($_POST['name']) || empty($_POST['password']))
	{
$error = "*Username or Password is invalid";
}
}

$sql="SELECT email,password FROM user_register ";

if ($result=mysqli_query($link,$sql))
  {
  while ($row=mysqli_fetch_row($result))
    {
    printf ($row[0],$row[1]);
    }
  mysqli_free_result($result);
}

mysqli_close($link);
?>

?>

<form action="" method="post">
<table border='0' width='480px' align='center'>
<tr>
  <td><h1>LOGIN HERE</h1></td>
</tr>
<table border='0' width='480px' align='center'>
<tr>
    <td align='center'>Email Id:</td>
    <td><input type='text' name='name'></td>
</tr>
<tr>
    <td align='center'>Password:</td>
    <td><input type='password' name='password'></td>
</tr>

<tr>
<td>&nbsp;</td>
</tr>
<table border='0' width='480px' align='center'>
<tr>
    <td align='center'><input type='submit' name='login' value="LOGIN"></td>
</tr>
<tr>
<td align="center"><span class="error"><?php echo $error; ?></span><td>
</tr>
</table>
</table>
</table>
<?php
include("footer.php");
?>