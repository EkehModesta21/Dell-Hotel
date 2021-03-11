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
	<title>Dell Hotel-Contact</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="short icon" href="img/logo3.png">
	<link rel="stylesheet" type="text/css" href="css/header.css" >
	<link rel="stylesheet" type="text/css" href="css/contact.css" >
	<link rel="stylesheet" type="text/css" href="fontawesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
</head>
<style type="text/css">
	body{
	margin: 0;
	padding: 0;
}
</style>
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
					<a href="contact.php" id="about">CONTACT</a>
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
				<div class="hamlinks" id="hamlinks8">
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
				<h1 id="bigtitle">Contact</h1>
			</div>
		</div>

		<div class="imgcontainer" style="margin: 0;">
			<div class="slider">
				<img src="img/booking1.jpg" class="images">
			</div>
			<div class="slider">
				<img src="img/booking2.jpg" class="images">
			</div>
			<div class="slider">
				<img src="img/luxury10.jpg" class="images">
			</div>
		</div>
	</div>
</header>

	<!--******************************************************************************-->
					<!--THIS IS THE SECTION-->
	<!--******************************************************************************-->
	<section>
		<div id="allcontact">
			<div id="contactform">
				<div id="cheader">
					<h1>Please fill the form below.</h1>
				</div>
				<form action="" method="POST">
					<div id="name" class="contact">
						<p>Your Name</p>
						<input type="text" name="">
					</div>
					<div id="email" class="contact">
						<p>Your Email</p>
						<input type="text" name="">
					</div>
					<div id="subject" class="contact">
						<p>Subject</p>
						<input type="text" name="">
					</div>
					<div id="message" class="contact">
						<p>Your Message</p>
						<input type="textarea" name="" placeholder="Your Message.....">
					</div>
					<div id="cbutton">
						<button class="buttons">SEND</button>
					</div>
				</form>
			</div>

			<div id="contactdetails">
				<div id="information">
					<div id="iheader">
						<h1>CONTACT INFORMATION</h1>
					</div>
					<div id="texts">
						<span class="fa fa-map-marker"></span> <p>No 5 Chief Oloko Street, Afam Road, Oyigbo, R.S.</p><br>
						<span class="fa fa-phone"></span> <p>08101010458</p><br>
						<span class="fa fa-envelope"></span> <p>macdelclizy@gmail.com</p>
					</div>
				</div>
				<div id="media">
					<div id="iheader">
						<h1>SOCIAL MEDIA</h1>
					</div>
					<div id="msocials">
						<a href=""><span class="fa fa-facebook facebook" id="facebook"></span></a>
						<a href=""><span class="fa fa-instagram instagram" id="instagram"></span></a>
						<a href=""><span class="fa fa-whatsapp whatsapp" id="whatsapp"></span></a>
						<a href=""><span class="fa fa-twitter twitter" id="twitter"></span></a>
						<a href=""><span class="fa fa-google-plus gmail" id="gmail"></span></a>
					</div>
				</div>
			</div>
		</div>
	</section>

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