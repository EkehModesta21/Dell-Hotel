<?php 
session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Hotel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="short icon" href="img/logo3.png">
	<link rel="stylesheet" type="text/css" href="css/style.css" >
	<link rel="stylesheet" type="text/css" href="css/header.css" >
	<link rel="stylesheet" type="text/css" href="css/sublinks.css">
	<link rel="stylesheet" type="text/css" href="css/responsiveness.css" media="screen and (max-width: 720px)">
	<link rel="stylesheet" type="text/css" href="css/responsiveness2.css" media="screen and (min-width: 721px) and (max-width: 1130px)">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
</head>
<body>
	<main>
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
					<a href="blog.php">Our Blog<span class="fa fa-newspaper-o"></span></a>
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
					<a href="index.php" id="about">HOME</a>
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
						
				<div class="hamlinks" id="hamlinks8">
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
			
			<div id="slidertitle2">
				<div id="slidertalk2">
					<h1 id="smalltitle2">WE ARE THE BEST IN AFRICA</h1>	
					<h1 id="bigtitle2">WE RENDER THE BEST SERVICES</h1>
				</div>
			</div>
			<div class="imgcontainer2" style="margin: 0;">
				<div class="slider">
					<img src="img/bgimg1.jpg" class="images2">
				</div>
				<div class="slider">
					<img src="img/bgimg4.jpg" class="images2">
				</div>
				<div class="slider">
					<img src="img/bgimg3.jpg" class="images2">
				</div>
			</div>
		</div>

		<section id="section">
			<div id="checkcontainer">
				<h1>CHECK AVAILABILITY</h1>
				<div id="checkgrid">
					<div class="check">
						<p>Check In</p>
						<input type="date" name="dob">
					</div>
					<div class="check">
						<p>Nights</p>
						<select id="days">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
						</select>
					</div>
					<div class="check">
						<p>Check Out</p>
						<input type="date" name="date">
					</div>
					<div class="check">
						<form action="rooms.php">
							<button class="buttons">Check Availability</button>
						</form>
					</div>
				</div>
			</div>

			<div id="apartmentcontainer" class="sliders">
				<h1>OUR APARTMENT</h1>
				<div class="apartmentslider">
					<div class="apartments">
						<img src="img/deluxe6.jpg">
					</div>
					<div class="apartmenttext">
						<p class="apartmenttitle">PENTHOUSE APARTMENT</p>
						<p>ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<span class="none">
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur.</span></p>
						<p id="price">$50 per Night</p>
						<form action="rooms.php" method="POST">
						<button class="buttons" type="submit" id="apbuttons">View More</button>
						</form>
					</div>
				</div>
				<div class="apartmentslider">
					<div class="apartments">
						<img src="img/deluxe10.jpg">
					</div>
					<div class="apartmenttext">
						<p class="apartmenttitle">PENTHOUSE APARTMENT</p>
						<p>ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<span class="none">
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur.</span></p>
						<p id="price">$40 per Night</p>
						<form action="rooms.php" method="POST">
						<button class="buttons" type="submit" id="apbuttons">View More</button>
						</form>
					</div>
				</div>
				<div class="apartmentslider">
					<div class="apartments">
						<img src="img/luxury.jpg">
					</div>
					<div class="apartmenttext">
						<p class="apartmenttitle">PENTHOUSE APARTMENT</p>
						<p>ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<span class="none">
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur.</span></p>
						<p id="price">$45 per Night</p>
						<form action="rooms.php" method="POST">
						<button class="buttons" type="submit" id="apbuttons">View More</button>
						</form>
					</div>
				</div>
			</div>
			<div id="allangles">
				<a class="left" onclick="nextSlide(-1)"><span class="fa fa-angle-left angles" id="angles"></span></a>
				<a class="right" onclick="nextSlide(1)"><span class="fa fa-angle-right angles" id="angles"></span></a>
			</div>
			
		</section>
	</main>

		<div id="subsection">
			<div id="imgcontainer2">
				
			</div>
			<div id="">
				
			</div>
		</div>
		<div id="testimonials">
			<div>
			<h1>TESTIMONIALS</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.<span class="none"> Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>
			</div>
		</div>

		<div id="gallery">
			<h2>OUR GALLERY</h2>
			<div id="gallery1">
				<div id="one">
					<img src="img/luxury2.jpg">
				</div>
				<div id="two" class="marginr">
					<img src="img/bgimg4.jpg">
				</div>
				<div id="three">
					<img src="img/bgimg12.jpg">
				</div>
				<div id="four" class="marginr">
					<img src="img/bgimg9.jpg">
				</div>
				<div id="five">
`35\6-`3\					<img src="img/luxury3.jpg">
				</div>
				<div id="six" class="marginr">
					<img src="img/luxury6.jpg">
				</div>
				<div id="seven" class="marginr">
					<img src="img/luxury9.jpg">
				</div>
				<div id="eight" class="marginr">
					<img src="img/luxury10.jpg">
				</div>
				<div id="nine">
					<img src="img/luxury12.jpg">
				</div>
			</div>
			<div id="gbuttoncontainer">
				<form action="rooms.php">
					<button class="buttons" id="gbutton">VIEW MORE<span class="fa fa-angle-double-right" id="angleright"></span></button>
				</form>
			</div>
		</div>



		<?php require_once('footer.php');?>
</body>
</html>

<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.waypoint.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/stickyheader.js"></script>

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