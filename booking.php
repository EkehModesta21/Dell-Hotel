<?php
require_once('php/connection.php');
require_once('php/bookingprocess.php');


if (!isset($_SESSION['currentuser']) || empty($_SESSION['currentuser'])) {

	$error[] = urlencode('Please login to continue ');

	header('location: ./login.php?error=' . join($error, urlencode('<br>')));

}

$error = '';
$success = '';
 if(isset($_GET['success'])){
 	$success = urldecode($_GET['success']);
 }elseif (isset($_GET['error'])) {
 	$error = urldecode($_GET['error']);
 }

?>


<!-- <?php 

$errors = array();
if (isset($_SESSION['id'])) {

	$id = $_SESSION['id'];
	$name = $_SESSION['name'];
}
	?>

	<?php 

	$sql_cart_all = "SELECT rname, rno, price FROM room WHERE id = '$id'";

	$query_cart_all = mysqli_query($connection, $sql_cart_all);
	$num_cart_all = mysqli_num_rows($query_cart_all);

	if (!$query_cart_all) {
		$errors[] = ("An unknown error occurred !");
	}


	?>
 -->
<!DOCTYPE html>
<html>
<head>
	<title>Dell Hotel-Booking</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="short icon" href="img/logo3.png">
	<link rel="stylesheet" type="text/css" href="css/header.css" >
	<link rel="stylesheet" type="text/css" href="css/booking.css" >
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
					<a href="index.php">HOME</a>
					<a href="rooms.php">ROOMS</a>
					<a href="booking.php" id="about">BOOKING</a>
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
				<div class="hamlinks" id="hamlinks8">
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
					<h1 id="bigtitle">BOOKING</h1>
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
		<div id="allbooking">
			<div id="reservation">
				<div id="rheader">
					<h1>Your Reservation</h1>
				</div>
				<form action="php/bookingprocess.php" method="POST" id="bform">
					<h4 class="success"><?php echo $success;?></h4>
					<h4 class="error"><?php echo $error;?></h4>

					<div id="checkin">
						<p class="ptags">Check In</p>
						<input type="date" name="checkin" id="in" class="binputs" required>
					</div>
					<div id="night" class="select">
						<p class="ptags">Nights</p>
						<input type="number" name="days" id="no" class="binputs" min="1" maxlength="100" required>
					</div>
					<div id="checkout">
						<p class="ptags">Check Out</p>
						<!-- <input type="date" name="checkout" id="out" class="binputs" readonly=""> --><p name="checkout" id="out" class="binputs"></p>
						<div>
						<button type="button" onclick="getDate();">Get Check Out Date</button>
						</div>
					</div>
					<div id="checkin">
						<p class="ptags">Room Name</p>
						<input name="roomtype" value="<?php if (isset($_SESSION['rname'])){echo $_SESSION['rname'];} ?>" class="binputs" readonly >
					</div>
					<div id="checkin">
						<p class="ptags">Room No</p>
						<input type="text" name="roomname" value="<?php if (isset($_SESSION['rno'])){echo $_SESSION['rno'];} ?>" class="binputs" readonly>
					</div>
					<div id="price">
						<p class="ptags">Price</p>
						<input type="text" name="price" value="<?php if (isset($_SESSION['price'])){echo ' $'.$_SESSION['price'];} ?>" class="binputs" readonly>
					</div>+
					<div>
					<h1><?php print $totalprice; ?></h1>
		 				<h3><?php if (isset($_SESSION['price'])){echo 'Price: $'.$_SESSION['price'];}else{print 'Sorry! you have to pick a room first';} ?></h3>
		 			</div>
					<div id="paymentinfo" >
						<h3>Payment Information</h3>
						<div>
							<div id="mop" class="select">
								<p class="ptags">Means of Payment</p>
								<select class="room" name="payment" id="payment" class="binputs" required>
									<option value="ATM CARD">ATM CARD</option>
								</select>
							</div>
							<div id="mop" class="select">
								<p class="ptags">Card Type</p>
								<select class="room" name="cardtype" id="cardtype" class="binputs" required>
									<option value="VISA">VISA</option>
									<option value="VERVE">VERVE</option>
									<option value="MASTER CARD">MASTER CARD</option>
								</select>
							</div>
							<div id="mop">
								<p class="ptags">Card Number</p>
								<input type="text" name="cardno" class="binputs" required>
							</div>
						</div>
					</div>
					<div id="rbutton">
						<button class="buttons" type="submit" name="book">BOOK NOW</button>
					</div>
				</form>
			</div>
		</div>
	</section>

	<?php require_once('footer.php');?>

</main>
</body>
</html>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="js/jquery.waypoint.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/booking.js"></script>

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
function getDate(){
var currentDate = new Date()
var da = document.getElementById("no").value
var daa = parseInt(da)
var day = currentDate.getDate() + daa
var month = currentDate.getMonth() + 1
var year = currentDate.getFullYear()
var all = "<b>" + day + "/" + month + "/" + year + "</b>"
document.getElementById("out").innerHTML = all
}
    
</script>