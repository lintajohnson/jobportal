<?php
session_start();
$error='';
if (isset($_POST['login'])) {
if (empty($_POST['name']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
$username=$_POST['name'];
$password=$_POST['password'];
$connection = mysql_connect("localhost", "root", "","jobportal");
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$db = mysql_select_db("jobportal", $connection);
$query = mysql_query("select * from employer_register where password ='$password' AND contact_person='$username'", $connection);
$rows = mysql_num_rows($query);
mysql_close($connection); 
}
}
?>
if(isset($_POST["submit"])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jobportal";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user_register (email, password,con_password,name,curr_loc,mob_no,total_exp,key_skills,res_head,curr_ind,fun_area,basic_grad,attach_res)
VALUES ('".$_POST["email"]."','".$_POST["pass"]."','".$_POST["con"]."','".$_POST["name"]."','".$_POST["loc"]."','".$_POST["no"]."','".$_POST["zip"]."','".$_POST["key"]."','".$_POST["resume"]."','".$_POST["current"]."','".$_POST["favor"]."','".$_POST["favorites"]."','".$_POST["fileupload"]."')";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();
}

where password ='$pass' AND email='$na'"