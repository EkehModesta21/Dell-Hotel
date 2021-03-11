<?php 
session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Dell Hotel-About Us</title>
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
				<a href="blog.php">Our Blog<span class="fa fa-book"></span></a>
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
					<a href="about.php" id="about">ABOUT ME</a>
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
				<div class="hamlinks" id="hamlinks8">
					<a href="about.php">About Us</a> 
				</div>
			</div>
		</div>
			</div>
		</header>
		<div id="slidertitle">
			<div id="slidertalk">
				<h1 id="bigtitle">About Us</h1>
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
			<div id="ourcompany">
				<h1>Our Company</h1>
				<div id="ourcompanygrid">
					<div>
						<img src="img/aboutbg.jpg">
					</div>
					<div>
						<div>
							<p> Dell Hotels is a labour of love. The owner, an aficionado of Nigerian culture and heritage, painstakingly put together conservation houses to create hotels that are grand tributes to Nigeria’s glorious and colourful past.<br/><br/> Dell Hotel houses 60 guest rooms, of which no two are the same. Each room at brings its own adventure and story; one just has to take a minute to savour the beauty and history in the details.<br/><br/> Faithfully preserved and recreated from traditional shophouses, Dell hotel retain many beautiful architectural features that are mindblowing, luxurious and classic. The tall columns, wide arcs, and beautiful full-length shuttered windows – all these architectural features have been lovingly restored for our hotel guests to truly experience the charm.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="sectiongrid">
				<div class="others">
					<h1>Our Executives</h1>
				</div>
				<div class="othersgrid">
					<div class="inner" id="inner">
						<img class = "exe" src = "img/team2.jpg" alt = "Owner" title = "Owner">
						<div class = "spann">
							<h3>Modesta Ekeh</h3>
							<p class = "p2">Owner</p>
							<p class = "p4"> A Computer Science graduate at Imo State University, Ph.D holder Nad a Computer Science. She is the sole owner of this prestigious hostel brand spanning all over Africa and beyond it.</p> 
						</div>
					</div>
					<div class="inner">
						<img class = "exe" src = "img/executive2.jpg" alt = "Manager" title = "Manager">
						<div class = "spann">
							<h3>Chris Standworth</h3>
							<p class = "p2">Manager</p>
							<p class = "p4"> An E-commerce erudite from Gardena, California. His efforts keeps the brand going way forward. He is the longest serving staff with a lot of qualities in his pockets. One would say he is completely good. Just good!</p> 
						</div>
					</div>
					<div class="inner">
						<img class = "exe" src = "img/executive3.jpg" alt = "cordinator" title = "Staff Co-ordinator">
						<div class = "spann">
							<h3>Rob McDonald</h3>
							<p class = "p2">Co-ordinator</p>
							<p class = "p4"> A graduate from one of the best renowned Universities in the world, Havard. Rob is a devoted Carterer with lots of charisma. He is also good as his job as Dell Hotel' general Co-ordinator.</p> 
						</div>
					</div>
				</div>
			</div>

			<div class="sectiongrid">
				<div class="others">
					<h1>Our Branches</h1>
				</div>
				<div class="othersgrid" id="othersgrid1">
					<div class="inner">
						<img class = "build" src = "img/building1.jpg" alt = "Branch 1" title = "Nigerian Branch">
						<div class = "spann">
							<h3>Nigeria</h3>
							<p class = "p6"> 20-25, GRA, PortHarcourt.</p>
							<p class = "p7"> Dell Hotel, Nigeria, houses 70 guest rooms, of which no two are the same. Each room at brings its own adventure and story; one just has to take a minute to savour the beauty and history in the details.</p> 
						</div>
					</div>
					<div class="inner">
						<img class = "build" src = "img/building2.jpg" alt = "usabranch" title = "US Branch">
						<div class = "spann">
							<h3>Gardena</h3>
							<p class = "p6">Lane 50, Brad Street, California</p>
							<p class = "p7"> Dell Hotel, Gardena, houses 80 guest rooms, of which no two are the same. Each room at brings its own adventure and story; one just has to take a minute to savour the beauty and history in the details.</p> 
						</div>
					</div>
					<div class="inner">
						<img class = "build" src = "img/building3.jpg" alt = "ukbranch" title = "UK branch">
						<div class = "spann">
							<h3>Manchester</h3>
							<p class = "p6">70 Bobby Charlton Street, Manchester</p>
							<p class = "p7"> Dell Hotel, Manchester, houses 100 guest rooms, of which no two are the same. Each room at brings its own adventure and story; one just has to take a minute to savour the beauty and history in the details.</p> 
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