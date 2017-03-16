<?php
 session_start();

if(!isset($_SESSION['login_user']))
{
header("Location: user_login.php");
}
?>