<?php 
require_once('php/connection.php');
require_once ('php/roomprocess.php');
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Dell Hotel-Rooms</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="short icon" href="img/logo3.png">
	<link rel="stylesheet" type="text/css" href="css/header.css" >
	<link rel="stylesheet" type="text/css" href="css/rooms.css" >
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
					<a href="rooms.php" id="about">ROOMS</a>
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
				<div class="hamlinks" id="hamlinks8">
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
				<h1 id="bigtitle">OUR ROOMS</h1>
			</div>
		</div>

		<div class="imgcontainer" style="margin: 0;">
			<div class="slider">
				<img src="img/bgimg3.jpg" class="images">
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
				<div class="sectionimages">
					<a href="allrooms/room1.php"><img src="img/deluxe1.jpg"></a>
						<h1>STANDARD ROOM WITH OCEAN VIEW</h1>
						<div id="icons">
							<div>
								<span class="fa fa-bed"></span>
								<p>2ROOMS</p>
							</div>
							<div>
								<span class="fa fa-user"></span>
								<p>4PERSONS</p>
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
					<p>Guests will find themselves surrounded by modern luxuries and creature comforts even as they get to live and breathe the splendour and intricacies of our splendid presidential rooms. So enticing!!!</p>
					<p id="price"><b>$40 </b> per Night</p>					
					<form method="POST">
						<input type="hidden" name="room1" value="1">
						<button class="buttons" type="submit" name="button1">BOOK NOW<span class="fa fa-angle-double-right"></span></button>
					</form>
				</div>
				<div class="sectionimages">
					<a href="allrooms/room2.php"><img src="img/deluxe2.jpg"></a>
					<h1>REGULAR ROOM WITH OCEAN VIEW</h1>
					<div id="icons">
							<div>
								<span class="fa fa-bed"></span>
								<p>2ROOMS</p>
							</div>
							<div>
								<span class="fa fa-user"></span>
								<p>4PERSONS</p>
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
					<p>Guests will find themselves surrounded by modern luxuries and creature comforts even as they get to live and breathe the splendour and intricacies of our splendid presidential rooms. So enticing!!!</p>	
					<p id="price"><b>$30 </b> per Night</p>					
					<form method="POST">
						<input type="hidden" name="room2" value="2">
						<button class="buttons" name="button2">BOOK NOW<span class="fa fa-angle-double-right"></span></button>
					</form>
				</div>
				<div class="sectionimages">
					<a href="allrooms/room3.php"><img src="img/deluxe3.jpg"></a>
					<h1>PRESIDENTIAL ROOM </h1>
					<div id="icons">
							<div>
								<span class="fa fa-bed"></span>
								<p>1ROOM</p>
							</div>
							<div>
								<span class="fa fa-user"></span>
								<p>2PERSONS</p>
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
					<p>Guests will find themselves surrounded by modern luxuries and creature comforts even as they get to live and breathe the splendour and intricacies of our splendid presidential rooms. So enticing!!!</p>
					<p id="price"><b>$50 </b> per Night</p>					
					<form method="POST">
						<input type="hidden" name="room3" value="3">
						<button class="buttons" name="button3">BOOK NOW<span class="fa fa-angle-double-right"></span></button>
					</form>
				</div>
				<div class="sectionimages">
					<a href="allrooms/room4.php"><img src="img/deluxe12.jpg"></a>
					<h1>STANDARD ROOM WITH OCEAN VIEW</h1>
					<div id="icons">
							<div>
								<span class="fa fa-bed"></span>
								<p>1ROOM</p>
							</div>
							<div>
								<span class="fa fa-user"></span>
								<p>4PERSONS</p>
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
					<p>Guests will find themselves surrounded by modern luxuries and creature comforts even as they get to live and breathe the splendour and intricacies of our splendid presidential rooms. So enticing!!!</p>
					<p id="price"><b>$40 </b> per Night</p>					
					<form method="POST">
						<input type="hidden" name="room4" value="4">
						<button class="buttons" name="button4">BOOK NOW<span class="fa fa-angle-double-right"></span></button>
					</form>
				</div>
				<div class="sectionimages">
					<a href="allrooms/room5.php"><img src="img/deluxe5.jpg"></a>
					<h1>LUXURY ROOM WITH MINI-BAR</h1>
					<div id="icons">
							<div>
								<span class="fa fa-bed"></span>
								<p>2ROOMS</p>
							</div>
							<div>
								<span class="fa fa-user"></span>
								<p>4PERSONS</p>
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
					<p>Guests will find themselves surrounded by modern luxuries and creature comforts even as they get to live and breathe the splendour and intricacies of our splendid presidential rooms. So enticing!!!</p>
					<p id="price"><b>$45 </b> per Night</p>					
					<form method="POST">
						<input type="hidden" name="room5" value="5">
						<button class="buttons" name="button5">BOOK NOW<span class="fa fa-angle-double-right"></span></button>
					</form>
				</div>
				<div class="sectionimages">
					<a href="allrooms/room6.php"><img src="img/deluxe6.jpg"></a>
					<h1>PRESIDENTIAL ROOM</h1>
					<div id="icons">
							<div>
								<span class="fa fa-bed"></span>
								<p>2ROOMS</p>
							</div>
							<div>
								<span class="fa fa-user"></span>
								<p>4PERSONS</p>
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
					<p>Guests will find themselves surrounded by modern luxuries and creature comforts even as they get to live and breathe the splendour and intricacies of our splendid presidential rooms. So enticing!!!</p>
					<p id="price"><b>$50 </b> per Night</p>					
					<form method="POST">
						<input type="hidden" name="room6" value="6">
						<button class="buttons" name="button6">BOOK NOW<span class="fa fa-angle-double-right"></span></button>
					</form>
				</div>
				<div class="sectionimages">
					<a href="allrooms/room7.php"><img src="img/deluxe7.jpg"></a>
					<h1>JUNIOR SUITE- ONE SINGLE BED</h1>
					<div id="icons">
							<div>
								<span class="fa fa-bed"></span>
								<p>1ROOM</p>
							</div>
							<div>
								<span class="fa fa-user"></span>
								<p>2PERSONS</p>
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
					<p>Guests will find themselves surrounded by modern luxuries and creature comforts even as they get to live and breathe the splendour and intricacies of our splendid presidential rooms. So enticing!!!</p>
					<p id="price"><b>$25 </b> per Night</p>					
					<form method="POST">
						<input type="hidden" name="room7" value="7">
						<button class="buttons" name="button7">BOOK NOW<span class="fa fa-angle-double-right"></span></button>
					</form>
				</div>	
				<div class="sectionimages">	
					<a href="allrooms/room8.php"><img src="img/deluxe8.jpg"></a>
					<h1>LUXURY ROOM WITH OCEAN VIEW</h1>
					<div id="icons">
							<div>
								<span class="fa fa-bed"></span>
								<p>2ROOMS</p>
							</div>
							<div>
								<span class="fa fa-user"></span>
								<p>4PERSONS</p>
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
					<p>Guests will find themselves surrounded by modern luxuries and creature comforts even as they get to live and breathe the splendour and intricacies of our splendid presidential rooms. So enticing!!!</p>
					<p id="price"><b>$45 </b> per Night</p>					
					<form method="POST">
						<input type="hidden" name="room8" value="8">
						<button class="buttons" name="button8">BOOK NOW<span class="fa fa-angle-double-right"></span></button>
					</form>
				</div>
				<div class="sectionimages">
					<a href="allrooms/room9.php"><img src="img/deluxe9.jpg"></a>
					<h1>PRESIDENTIAL ROOM WITH OCEAN VIEW</h1>
					<div id="icons">
							<div>
								<span class="fa fa-bed"></span>
								<p>2ROOMS</p>
							</div>
							<div>
								<span class="fa fa-user"></span>
								<p>4PERSONS</p>
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
					<p>Guests will find themselves surrounded by modern luxuries and creature comforts even as they get to live and breathe the splendour and intricacies of our splendid presidential rooms. So enticing!!!</p>
					<p id="price"><b>$50 </b> per Night</p>					
					<form method="POST">
						<input type="hidden" name="room9" value="9">
						<button class="buttons" name="button9">BOOK NOW<span class="fa fa-angle-double-right"></span></button>
					</form>
				</div>
				<div class="sectionimages">
					<a href="allrooms/room10.php"><img src="img/deluxe10.jpg"></a>
					<h1>REGULAR ROOM WITH OCEAN VIEW</h1>
					<div id="icons">
							<div>
								<span class="fa fa-bed"></span>
								<p>2ROOMS</p>
							</div>
							<div>
								<span class="fa fa-user"></span>
								<p>4PERSONS</p>
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
					<p>Guests will find themselves surrounded by modern luxuries and creature comforts even as they get to live and breathe the splendour and intricacies of our splendid presidential rooms. So enticing!!!</p>
					<p id="price"><b>$30 </b> per Night</p>					
					<form method="POST">
						<input type="hidden" name="room10" value="10">
						<button class="buttons" name="button10">BOOK NOW<span class="fa fa-angle-double-right"></span></button>
					</form>
				</div>
				<div class="sectionimages">
					<a href="allrooms/room11.php"><img src="img/deluxe11.jpg"></a>
					<h1>STANDARD ROOM WITH OCEAN VIEW</h1>
					<div id="icons">
							<div>
								<span class="fa fa-bed"></span>
								<p>2ROOMS</p>
							</div>
							<div>
								<span class="fa fa-user"></span>
								<p>4PERSONS</p>
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
					<p>Guests will find themselves surrounded by modern luxuries and creature comforts even as they get to live and breathe the splendour and intricacies of our splendid presidential rooms. So enticing!!!</p>
					<p id="price"><b>$40 </b> per Night</p>					
					<form method="POST">
						<input type="hidden" name="room11" value="11">
						<button class="buttons" name="button11">BOOK NOW<span class="fa fa-angle-double-right"></span></button>
					</form>
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