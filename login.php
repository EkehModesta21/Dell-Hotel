<?php
session_start();
$success = '';
if (isset($_SESSION['currentuser']) && !empty($_SESSION['currentuser'])) { 
	unset($_SESSION['currentuser']);
	$success = 'Logout Successful'; 
}

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
			</div>
	
		</header>
			<div id="slidertitle">
				<div id="slidertalk">
					<h1 id="bigtitle">LOG IN</h1>
					<h4 class="error"><?php echo $error;?></h4>
					<h4 class="success"><?php echo $success;?></h4>
					<div id="signupcontainer">
					<form id="signup" action="php/loginprocess.php" method="POST">
						<label>Username</label>
						<input type="text" name="uname" required pattern="[A-Za-z0-9 ]*" title="Please Enter a Proper Name without Symbols"><br>
						<label>Password</label>
						<input type="password" name="password" minlength="4" maxlength="20"><br>
						<button class="buttons" id="lbutton" type="submit" name="login">LOG IN</button>
						<div id="login">
							<p>Haven't Registered?</p><a href="signup.php">Sign Up<span class="fa fa-sign-in"></span></a>
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