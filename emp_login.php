<?php
include("header.php");
session_start();
 if($_SERVER["REQUEST_METHOD"] == "POST")
 {
$username=mysqli_real_escape_string($link,$_POST['email']);
$password=md5(mysqli_real_escape_string($link,$_POST['pass']));

$selectsql="SELECT id FROM employer_register WHERE email='$username' and password='$password'";
$result=mysqli_query($link,$selectsql);
$row=mysqli_fetch_array($result);
$count=mysqli_num_rows($result);

if($count==1)
{
$_SESSION['login_user']=$username;
header("location: emp_list.php");
}
else
{
$error="Your username or Password is incorrect";
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
    <td align='center'>Email Id:</td>
    <td><input type='text' name='email'></td>
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
<td align="center"><span class="error"><?php echo $error; ?></span><td>
</tr>
</table>
</table>
</table>
</form>
<?php
include("footer.php");
?>