<!DOCTYPE html>
<html>
<head>
	<title>Dell Hotel-Rooms</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="short icon" href="../img/logo3.png">
	<link rel="stylesheet" type="text/css" href="../css/header.css" >
	<link rel="stylesheet" type="text/css" href="../css/footer.css" >
	<link rel="stylesheet" type="text/css" href="../css/allrooms.css" >
	<link rel="stylesheet" type="text/css" href="../fontawesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../css/animate.css">
</head>
<body>
<main>

<!--***************************************************************************************************-->
					<!-- THIS IS THE HEADER -->
<!--***************************************************************************************************-->
<header>
	<div id="allheader">

			<div class="imgcontainer" style="margin: 0;">
				<div class="slider">
					<img src="../img/bgimg3.jpg" class="images">
				</div>
				<div class="slider">
					<img src="../img/bgimg6.jpg" class="images">
				</div>
				<div class="slider">
					<img src="../img/presidential8.jpg" class="images">
				</div>
			</div>

			<header id="header">
				<div id="header1">
					<a href="..signup.php">Sign Up<span class="fa fa-user"></span></a>
					<a href="../blog.php">Our Blog<span class="fa fa-newspaper-o"></span></a>
					<a href="../contact.php">Contact<span class="fa fa-phone"></span></a>
					<form action="" id="buttoncontainer">
						<button id="button"><span class="fa fa-search"></span></button>
					</form>
				</div>
				<div id="header2">
					<div id="logocontainer">
						<img src="../img/logo3.png" id="img"><h1><i>D</i>ELL <i>H</i>OTEL</h1>
					</div>
					<div id="nav">
						<a href="../index.php">HOME</a>
						<a href="../rooms.php">ROOMS</a>
						<a href="../booking.php">BOOKING</a>
						<a href="../contact.php">CONTACT</a>
						<a href="../about.php">ABOUT ME</a>
					</div>
				</div>
			</header>
			<div id="slidertitle">
				<div id="slidertalk">
					<h1 id="bigtitle">STANDARD ROOM WITH OCEAN VIEW</h1>
				</div>
			</div>
		</div>
</header>

<!--***************************************************************************************************-->
					<!-- THIS IS THE SECTION -->
<!--***************************************************************************************************-->
		<div id="section">
			<div id="room">
				<div id="roomdetails">
					<div id="image">
						<img src="../img/deluxe1.jpg">
						<div id="imgtext">
							<h4>STANDARD ROOM WITH OCEAN VIEW</h4>
							<p><i>PRICE: </i>$30.00 / Night</p>
						</div>
						<div id="icons">
							<div>
								<span class="fa fa-bed"></span>
								<p>2 BEDROOMS</p>
							</div>
							<div>
								<span class="fa fa-user"></span>
								<p>4 PERSONS MAX</p>
							</div>
							<div>
								<span class="fa fa-eye"></span>
								<p>SEA VIEW</p>
							</div>
							<div>
								<span class="fa fa-wifi"></span>
								<p>FREE WIFI</p>
							</div>
						</div>
						<div id="details">
							<h2>Room Details</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>

					<div id="buttoncontainer2">
						<form action="../booking.php">
							<button class="buttons">BOOK NOW</button>
						</form>
					</div>
				</div>


				<div id="gallery">
					<h2>PHOTOS</h2>
					<div id="gallerygrid">
						<div>
							<img src="../img/luxury2.jpg">
						</div>
						<div>
							<img src="../img/luxury9.jpg">
						</div>
						<div>
							<img src="../img/presidential9.jpg">
						</div>
						<div>
							<img src="../img/luxury5.jpg">
						</div>
						<div>
							<img src="../img/homepage.jpg">
						</div>
					</div>		
				</div>
			</div>
		</div>

<!--***************************************************************************************************-->
					<!-- THIS IS THE FOOTER -->
<!--***************************************************************************************************-->
		<?php require_once('../footer.php');?>

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