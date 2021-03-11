<?php 
session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Dell Hotel-Blog</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="short icon" href="img/logo3.png">
	<link rel="stylesheet" type="text/css" href="css/header.css" >
	<link rel="stylesheet" type="text/css" href="css/about.css" >
	<link rel="stylesheet" type="text/css" href="fontawesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
</head>
<body>
<main>
<header>
	<div id="allheader">
		<header id="header">
			<div id="header1">
					<?php
						if (isset($_SESSION['currentuser']) && !empty($_SESSION['currentuser'])) { ?>
							<a><?php echo $_SESSION['currentuser']['uname']?><span class="fa fa-user"></span></a>
							<a href="login.php">Log out<span class="fa fa-user"></span></a>
						<?php } else { ?>
							<a href="login.php">Log In<span class="fa fa-user"></span></a>

					<?php } ?>
				<a href="blog.php" id="hamlinks8" style="color: #159e7e;">Our Blog<span class="fa fa-book"></span></a>
				<a href="contact.php">Contact<span class="fa fa-phone"></span></a>
				<form action="" id="buttoncontainer">
					<button id="button"><span class="fa fa-search"></span></button>
				</form>
			</div>
			<div id="header2">
				<div id="logocontainer">
					<img src="img/logo3.png" id="img"><h1><i>D</i>ELL <i>H</i>OTEL</h1>
				</div>
				<label id="label" for="hamburg">&#9776;</label>
				<div id="nav">
					<a href="index.php">HOME</a>
					<a href="rooms.php">ROOMS</a>
					<a href="booking.php">BOOKING</a>
					<a href="contact.php">CONTACT</a>
					<a href="about.php">ABOUT ME</a>
				</div>

	<!--**********************************************************************************************************************-->
							<!--THIS IS THE CHECKBOX-->
	<!--**********************************************************************************************************************-->
				<input id="hamburg" type="checkbox" name="checkbox">
				<div id="hamdropdwn-content">
				<a href=""><span class="fa fa-remove" id="fa-remove"></span></a><br>

	<!--**********************************************************************************************************************-->
						<!--THESE ARE THE LINKS AND THEIR DROPDOWN MENU-->
	<!--**********************************************************************************************************************-->
			<div id="allhamlinks">
				<h1>Our Menu</h1>
						
				<div class="hamlinks" id="hamlinks5">
					<a href="index.php">Home</a>
				</div>
				<div class="hamlinks" id="hamlinks6">
					<a href="rooms.php">Rooms</a>
				</div>
				<div class="hamlinks" id="hamlinks7">
					<a href="booking.php">Booking</a> 
				</div>
				<div class="hamlinks" id="hamlinks7">
					<a href="contact.php">Contact</a> 
				</div>
				<div class="hamlinks" id="hamlinks7">
					<a href="about.php">About Us</a> 
				</div>
			</div>
		</div>
			</div>
		</header>
		<div id="slidertitle">
			<div id="slidertalk">
				<h1 id="bigtitle">BLOG</h1>
			</div>
		</div>

		<div class="imgcontainer" style="margin: 0;">
			<div class="slider">
				<img src="img/aboutbg.jpg" class="images">
			</div>
			<div class="slider">
				<img src="img/bgimg6.jpg" class="images">
			</div>
			<div class="slider">
				<img src="img/presidential8.jpg" class="images">
			</div>
		</div>
	</div>
</header>

<!--***************************************************************************************************-->
					<!-- THIS IS THE SECTION -->
<!--***************************************************************************************************-->
		<div id="section">

			<div class="sectiongrid">
				<div class="others">
					<h1>Our Daily News</h1>
				</div>
				<div class="othersgrid">
					<div class="inner">
						<img class = "exe" src = "img/deluxe2.jpg" alt = "Owner" title = "Owner">
						<div class = "spann">
						<p class = "p4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip excomm.</p> 
						</div>
					</div>
					<div class="inner">
						<img class = "exe" src = "img/deluxe4.jpg" alt = "Manager" title = "Manager">
						<div class = "spann">
							<p class = "p4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip excomm.</p> 
						</div>
					</div>
					<div class="inner">
						<img class = "exe" src = "img/deluxe5.jpg" alt = "cordinator" title = "Staff Co-ordinator">
						<div class = "spann">
						 <p class = "p4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip excomm.</p> 
						</div>
					</div>
					<div class="inner">
						<img class = "exe" src = "img/deluxe6.jpg" alt = "Owner" title = "Owner">
						<div class = "spann">
						 <p class = "p4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip excomm.</p> 
						</div>
					</div>
					<div class="inner">
						<img class = "exe" src = "img/deluxe7.jpg" alt = "Manager" title = "Manager">
						<div class = "spann">
							<p class = "p4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip excomm.</p> 
						</div>
					</div>
					<div class="inner">
						<img class = "exe" src = "img/building1.jpg" alt = "cordinator" title = "Staff Co-ordinator">
						<div class = "spann">
						<p class = "p4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip excomm.</p> 
						</div>
					</div>
					<div class="inner">
						<img class = "exe" src = "img/building2.jpg" alt = "Owner" title = "Owner">
						<div class = "spann">
						<p class = "p4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip excomm.</p> 
						</div>
					</div>
					<div class="inner">
						<img class = "exe" src = "img/building3.jpg" alt = "Manager" title = "Manager">
						<div class = "spann">
							<p class = "p4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip excomm.</p> 
						</div>
					</div>
					<div class="inner">
						<img class = "exe" src = "img/deluxe12.jpg" alt = "cordinator" title = "Staff Co-ordinator">
						<div class = "spann">
						 <p class = "p4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip excomm.</p> 
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php require_once('footer.php');?>

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