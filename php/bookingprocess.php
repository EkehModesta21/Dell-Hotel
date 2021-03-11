<?php require_once('connection.php'); ?>
<?php 
$success = array();
$error = array();
// session_start();
$totalprice = '';

if (isset($_POST['book']) && ($_SERVER['REQUEST_METHOD'] == 'POST')) {
	$checkin = isset($_POST['checkin']) ? trim($_POST['checkin']) : '';
	$days = isset($_POST['days']) ? trim($_POST['days']) : '';
	$checkout = isset($_POST['checkout']) ? trim($_POST['checkout']) : '';
	$roomtype = isset($_POST['roomtype']) ? trim($_POST['roomtype']) : '';
	$roomname = isset($_POST['roomname']) ? trim($_POST['roomname']) : '';
	$payment = isset($_POST['payment']) ? trim($_POST['payment']) : '';
	$cardname = isset($_POST['cardtype']) ? trim($_POST['cardtype']) : '';
	$cardno = isset($_POST['cardno']) ? trim($_POST['cardno']) : '';

	if (empty($checkin) || empty($days) || empty($cardno) || empty($cardname)) {
		$error[] = urlencode('Error!!! All Fields are Required');
	}

	if (!empty($error)) {
		header('location: ../booking.php?error=' . join($error, urlencode('<br>')));
	}else{
		$sql_price = "SELECT price FROM room WHERE id = '$roomname' AND availability > '0'";
		$query_price = mysqli_query($connection, $sql_price);
		$num_price = mysqli_num_rows($query_price);

		if ($query_price) {

			if ($num_price == 1) {
				while ($row_price = mysqli_fetch_assoc($query_price)) {
					$price = $row_price['price'];
				}

				$totalprice = intval($price) * intval($days);

				$uid = $_SESSION['currentuser']['id'];

				$sql = "INSERT INTO booking(rid, uid, totalprice, checkin, nights, checkout, payment, cardtype, cardno) VALUES('$roomname', '$uid', '$totalprice', '$checkin', '$days', '$checkout', '$payment', '$cardname', '$cardno') ";
				$query = mysqli_query($connection, $sql);

				if ($query) {
					$sql_update_room = "UPDATE room SET availability = '0' WHERE id = '$roomname'";
					$query_update_room = mysqli_query($connection, $sql_update_room);

					$success[] = urlencode('Booking Successful');
					header('location: ../booking.php?success=' . join($success, urlencode('<br>')));
				}else{
					$err = mysqli_error($connection);

					$error[] = urlencode('Booking Failed ');
					header('location: ../signup.php?error=' . join($error, urlencode('<br>')));
				}

			} else {
				$error[] = urlencode('Room Unavailable, Please try a different room ');
				header('location: ../booking.php?error=' . join($error, urlencode('<br>')));
			}
		} else {
			$error[] = urlencode('An error occured while getting price list ');
			header('location: ../booking.php?error=' . join($error, urlencode('<br>')));
		}
	}


}


 ?>