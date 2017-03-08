<!DOCTYPE html>
<html>
    <head>
        <title>
        </title>
            <style>
				#img{
					width:110px;
					float:left;
					}
			    #img1{
					width: 100%;
                    height: auto;
	               	}
			    #samp{
					float:right;
					}
				#foot{
                    padding: 10px;
                    color: white;
                    background-color: black;
                    }
                #content{
                    margin: 5px;
                    padding: 10px;
                    background-color: gray;
					}
                .article{
                    margin: 5px;
                    padding: 10px;
                    background-color:gray;
                     }
                #menu ul{
				    list-style-type:none;
	                background-color:blue;
	                margin:0;padding:0;
	                overflow:hidden;
					}
                #menu ul li{
	                float:left;
					margin-left:20px;
				    }
				ul{
					list-style-type:none;
					background-color:gray;
					margin:0;padding:0;
					overflow:hidden;
					}
				li{
					float:left;
					margin-left:100PX;
					}
				li a, .dropdownbutton{
	                text-decoration:none;
					color:white;padding:16px;
					display:block;
					}
				li a:hover{
				    background-color:blue;
					}
				.dropdowncontent{
					display:none;
					position:absolute;
					background-color:white;
					min-width:90px;
					}
				.dropdowncontent a{
					color:black;padding:12px 16px;
					text-decoration:none;
					display:block;
					text-align:left;
					}
				.dropdown:hover .dropdowncontent{
					display:block;
				    }
			    .footy{
					padding-top:12px;
					color:black;
					font-size:16px;
					padding-left: 15px;
					 padding-right: 15px;
					 background-color:gray;
				}
				.col{
					position: relative;
                    min-height: 1px;
                    padding-left: 15px;
					background-color:gray;
					padding:5px;
			
                    
				}
				.footer_title{
					padding-bottom: 12px;
                    margin-bottom: 22px;
                    color:blue;
                    font-size: 21px;
                    display: block;
				}
			</style>
				
	</head>
			<body>
					<header>
				<ul>
					<li><img id="img" src="F:\cinema\Download\portal.jpg"/></li>
					<li><a href="">HOME</a></li>
					<li><a href="user_search.php">JOB SEARCH</a></li>
					<li class="dropdown"><a href="register" class="dropdownbutton">JOB SEEKERS</a>
						<div class="dropdowncontent">
							<a href="user_login.php">LOGIN</a>
							<a href="user.php">REGISTER</a>
							<a href="">JOB ALERTS</a>
							
						</div>
					</li>
						<li class="dropdown"><a href="register"class="dropdownbutton">EMPLOYER</a>
						    <div class="dropdowncontent">
								<a href="emp_reg.php">REGISTER</a>
								<a href="emp_login.php">LOGIN</a>
								<a href="post_jobs.php">POST JOBS</a>
								<a href="emp_search.php">RESUME SEARCH</a>
			                </div>
						</li>
						<li><a style="text-decoration:underline;" href="logout.php">log out</a></li>
                </ul>
				</header>
	                <div >
	                    <img id="img1"src="F:\cinema\Download\banner.jpg"/>
	                </div>
                        <div style="clear:both;">
						</div>
		                    <div id="content">
		                        <ul id="samp">
								    <li><input type="text" placeholder="Job Title Keywords"/><li>
		                            <li><input type="text" placeholder="Locations" /><li>
		                            <li><input type="button" value="FIND JOBS"/>
								</ul>
		   
		                <div class="article">
		                </div>
		   
		                    </div>
		   
		   <div class="footy">
		   <span class="footer_title">ABOUT US</span>
		   <p style="text-align:justify"> Today, Job Portal is changing the landscape of hiring, by integrating personal and social networks of candidates for 
		   enhancing the recruitment process – making it the world’s first job Portal site to do so. Shine.com now enables a recruiter 
		   to reach out to the personal network of employees and their connections, thus, giving them access to a vast network of good 
		   quality candidates. 
		   </p>
            <p>
			It also offers better relevance of job search results through its database of candidates delivered through its unique 
			2-way matching technology, which helps candidates to get the jobs they deserve and help recruiters to hire faster.
			</p>
		   </div>
		   <div class="col">
		   <span class="footer_title">CONTACT US</span>
		   <p>0024-4345251</p>
           <p>contactus@portal.com</p>
           </div>
		   <footer>
		   <div id="foot">
		   <p>Contact information: <a href="collegetvm@gmail.com">
               someone@example.com</a></p>
		   </div>
		   </footer>
    </body>
</html>
