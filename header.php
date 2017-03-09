

<?php
include("connect.php");
include("libraries.php");
?>

<!DOCTYPE html>

<html>
 <head>
		<title>Job Portal</title>
		 <link rel="stylesheet" href="style.css" />
</head>

        <body>

        <header>

            <nav>
               <div>
               <img id="img" src="http://localhost/jobportal/portal.jpg"/>
	           </div>				
			   <ul>
			        <li><a href="index.php">HOME</a></li>
					<li><a href="user_search.php">JOB SEARCH</a></li>
					<li class="dropdown"><a href="register" class="dropdownbutton">JOB SEEKERS</a>
						<div class="dropdowncontent">
							<a href="user_login.php">LOGIN</a>
							<a href="user_reg.php">REGISTER</a>
							<a href="">JOB ALERTS</a>
							
						</div>
					</li>
					<li class="dropdown"><a href="register"class="dropdownbutton">EMPLOYER</a>
						<div class="dropdowncontent">
						    <a href="emp_register.php">REGISTER</a>
					        <a href="emp_login.php">LOGIN</a>
						    <a href="post_jobs.php">POST JOBS</a>
						    <a href="emp_search.php">RESUME SEARCH</a>
							<a href="emp_list.php">EMPLOYEE LIST</a>
							
			             </div>
					</li>
					<li><a style="text-decoration:underline;" href="logout.php">log out</a></li>
                </ul>
			</nav>
		</header>
	<div >
