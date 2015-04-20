<!DOCTYPE html>
<html lang="en">
<head>
<title>GECG Learn Center</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.5.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Molengo_400.font.js"></script>
<script type="text/javascript" src="js/Expletus_Sans_400.font.js"></script>
<script type="text/javascript" src="js/JSPfile.js"></script>

</head>

<body id="page5">
	<div class="body1">
		<div class="main">
<!-- header -->
			<header>
				<div class="wrapper">
					<nav>
						<ul id="menu">
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About Us</a></li><li><a href="dash.php">Dash board</a></li>
							<li><a href="feedback.php">Feedback</a></li>
                            
							<li><a href="login.php">Log In</a></li>
							<li><a href="register.php">Register</a></li>
							<li class="end"><a href="contact.php">Contact Us</a></li>
						</ul>
					</nav>
					
				</div>
				<div class="wrapper">
					<h1><a href="index.php" id="logo">Learn Center</a></h1>
				</div>
				<div id="slogan">
					We Will Open The World<span>of knowledge for you!</span>
				</div>

			</header>
<!-- / header -->
		</div>
	</div>
	<div class="body2">
		<div class="main">
<!-- content -->
			<section id="content">
				<div class="box1">
					<div class="wrapper">
						<article class="col1">
							<div class="pad_left1">
								<h2>Login Form</h2>
								<form id="ContactForm" method="post" action="logincode.php" onSubmit="return validateLogin()" name="myform">
									<div>
									<div  class="wrapper">
											<strong>Select:</strong>
											<div ><input type="radio" name="rb" value="Teacher">Teacher <input type="radio" name="rb" value="Student">Student
											</div>
										</div>
										<div  class="wrapper">
											<strong>Enrollment No./ID:</strong>
											<div class="bg"><input type="text" class="input" name="txten"></div>
										</div>
										<div  class="wrapper">
											</br><strong>Password:</strong>
											<div class="bg"><input type="password" class="input" name="txtpass"></div>
										</div>
										
																	
										<input type="submit" name="submit" id="submit" value="Login" />
										
										&nbsp;&nbsp;
										<input type="button" name="" id="" value="Forgot Password"  onclick="window.location.href='forgotpass.html';" />
                                        
                                        <input type="button" name="c1"  id="submit1" value="Change Password"  onclick="window.location.href='changepwd.html';" />
                                       
										
					   <script>
                       funcation fun()
                       {
                        location.href="windows.location.changepwd.html";
                       }
                       </script>
										
									</div>
								</form>
							</div>
						</article>
						
					</div>
				</div>
			</section>
<!-- content -->

			
		</div>
	</div>

</body>
</html>