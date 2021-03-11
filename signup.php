<?php
session_start();

$error = '';
 if(isset($_GET['error'])){
 	$error = urldecode($_GET['error']);
 }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Dell Hotel-Rooms</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="short icon" href="img/logo3.png">
	<link rel="stylesheet" type="text/css" href="css/.css" >
	<link rel="stylesheet" type="text/css" href="css/signup.css" >
	<link rel="stylesheet" type="text/css" href="fontawesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
</head>
<style type="text/css">
	#sign{
		color: #159e7e;
	}
</style>
<body>
<main>
<header>
	<div id="allheader">
		<header id="header">
				<div id="header1">
					<a href="signup.php" id="sign">Sign Up<span class="fa fa-user"></span></a>
					<a href="blog.php">Our Blog<span class="fa fa-book"></span></a>
					<a href="contact.php">Contact<span class="fa fa-phone"></span></a>
					<form action="" id="buttoncontainer">
						<button id="button"><span class="fa fa-search"></span></button>
					</form>
				</div>
			</header>
			<div id="slidertitle">
				<div id="slidertalk">
					<h1 id="bigtitle">SIGN UP</h1>
					<div id="signupcontainer">
					<form id="signup" action="php/registration.php" method="POST">
						<h4 class="error"><?php echo $error;?></h4>
						<label for="fname">First Name</label>
						<input type="text" name="fname" id="fname" required pattern="[A-Za-z ]*" title="Please Enter a Proper Name without Symbols"><br>
						<label>Last Name</label>
						<input type="text" name="lname" required pattern="[A-Za-z ]*" title="Please Enter a Proper Name without Symbols"><br>
						<label>Username</label>
						<input type="text" name="uname" required pattern="[A-Za-z0-9 ]*" title="Please Enter a Proper Name without Symbols"><br>
						<label>Email</label>
						<input type="email" name="email" required pattern="[A-Za-z0-9_\-]+@[A-Za-z_]+\.[A-Za-z0-9]{2,4}" title="Please Enter a Valid Email Address"><br>
						<label>Password</label>
						<input type="password" name="password" minlength="4" maxlength="20"><br>
						<label>Confirm Password</label>
						<input type="password" name="cpassword" minlength="4" maxlength="20"><br>
						<button class="buttons" type="submit" name="register">CREATE<span> AN ACCOUNT</span></button>
						<div id="login">
							<p>Already have an Account?</p><a href="login.php">Log In<span class="fa fa-sign-in"></span></a>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>

			<div class="imgcontainer" style="margin: 0;">
				<div class="slider">
					<img src="img/booking1.jpg" class="images">
				</div>
				
			</div>

			
</header>

<!--***************************************************************************************************-->
					<!-- THIS IS THE SECTION -->
<!--***************************************************************************************************-->
		


</main>
</body>
</html>

<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.waypoint.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>

<script type="text/javascript">
	 var a = 0;
        sliders();
               
        function sliders(){
        var x;
        var m = document.getElementsByClassName('slider');
        for(x = 0; x < m.length; x++){
            m[x].style.display = "none";
        }
        a++;
        if(a > m.length){a = 1}
        m[a-1].style.display = "block";
        setTimeout(sliders,10000);
       }

    
</script>