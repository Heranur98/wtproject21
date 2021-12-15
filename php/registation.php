 
<!DOCTYPE html>
<html>
<head>
<title>SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="../assets/css/registation.css" rel="stylesheet" type="text/css" media="all" />
	
<script defer src='.\assets\js\main.js'></script>
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->

</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1> SignUp Form</h1>

		<div class="main-agileinfo">
			<div class="agileits-top">
			<h2><a href="login.php">Back</a> </h2><br>
					<form action="registrationValidation.php" method="post">
			
				
				
					<input class="text" type="text" name="Name" placeholder="Name" required="">
					<input class="text email" type="text" name="Username" placeholder="Username" required="">
					<span>Date of Birth:</span>
					<input class="text email" type="date" name="Date" placeholder="Date of Birth " required="">
					<input class="text email" type="text" name="Gender" placeholder="Gender" required="">
					<input class="text email" type="text" name="Phone" placeholder="Phone Number" required="">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="confirmPassword" placeholder="Confirm Password" required="">
		
					<input type="submit" value="SIGNUP">
				</form>
				<p>have an Account? <a href="login.php"> Login Now!</a></p>
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>Copyright ©Smart Health Consulting Center 2021 All right reserved</p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>