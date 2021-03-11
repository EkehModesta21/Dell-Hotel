<?php
require_once('php/connection.php');
$success = array();
$error = array();


// if (isset($_POST['button1'])){
// 		$room_id = htmlentities($_POST['room1']);

// 		// getting price
// 		$sql_price = "SELECT * FROM room WHERE id = '$room_id'";
// 		$query_price = mysqli_query($connection, $sql_price);
// 		while ($row_price = mysqli_fetch_assoc($query_price)) {

// 		if (!$query_price) {
// 			$errors[] = ("An unknown error occurred, try again !");
// 		} else {
// 			if ($row_price['availability'] != 1) {
// 				$errors[] = ("Room Booked !");
// 				header("location: rooms.php?errors=". join($errors, urlencode('<br>')));
// 			} else {
// 					$_SESSION['price'] = $row_price['price'];
// 					$_SESSION['rname'] = $row_price['rname'];
// 					$_SESSION['rno'] = $row_price['rno'];
// 					$_SESSION['availability'] = $row_price['availability'];
// 				}
// 			}
// 		}
// 	}
if (isset($_POST['button1'])){
		$room_id = htmlentities($_POST['room1']);

		// getting price
		$sql_price = "SELECT * FROM room WHERE id = '$room_id'";
		$query_price = mysqli_query($connection, $sql_price);
		while ($row_price = mysqli_fetch_assoc($query_price)) {

		if (!$query_price) {
			$errors[] = ("An unknown error occurred, try again !");
		} else {
			if ($row_price['availability'] != 1) {
				$errors[] = ("Room Booked !");
				print '<p style="text-align:center; margin: 0; color:white; background-color:red;" >room booked</p>';
			} else {
					$_SESSION['price'] = $row_price['price'];
					$_SESSION['rname'] = $row_price['rname'];
					$_SESSION['rno'] = $row_price['rno'];
					$_SESSION['availability'] = $row_price['availability'];
					header('location: booking.php');
				}
			}
		}
	}

if (isset($_POST['button2'])){
		$room_id2 = htmlentities($_POST['room2']);

		// getting price
		$sql_price2 = "SELECT * FROM room WHERE id = '$room_id2'";
		$query_price2 = mysqli_query($connection, $sql_price2);
		while ($row_price2 = mysqli_fetch_assoc($query_price2)) {

		if (!$query_price2) {
			$errors[] = ("An unknown error occurred, try again !");
		} else {
			if ($row_price2['availability'] != 1) {
				$errors[] = ("Room Booked !");
				print '<p style="text-align:center; margin: 0; color:white; background-color:red;" >room booked</p>';
			} else {
					$_SESSION['price'] = $row_price2['price'];
					$_SESSION['rname'] = $row_price2['rname'];
					$_SESSION['rno'] = $row_price2['rno'];
					$_SESSION['availability'] = $row_price2['availability'];
					header('location: booking.php');
				}
			}
		}
	}

if (isset($_POST['button3'])){
		$room_id3 = htmlentities($_POST['room3']);

		// getting price
		$sql_price3 = "SELECT * FROM room WHERE id = '$room_id3'";
		$query_price3 = mysqli_query($connection, $sql_price3);
		while ($row_price3 = mysqli_fetch_assoc($query_price3)) {

		if (!$query_price3) {
			$errors[] = ("An unknown error occurred, try again !");
		} else {
			if ($row_price3['availability'] != 1) {
				$errors[] = ("Room Booked !");
				print '<p style="text-align:center; margin: 0; color:white; background-color:red;" >room booked</p>';
			} else {
					$_SESSION['price'] = $row_price3['price'];
					$_SESSION['rname'] = $row_price3['rname'];
					$_SESSION['rno'] = $row_price3['rno'];
					$_SESSION['availability'] = $row_price3['availability'];
					header('location: booking.php');
				}
			}
		}
	}

if (isset($_POST['button4'])){
		$room_id4 = htmlentities($_POST['room4']);

		// getting price
		$sql_price4 = "SELECT * FROM room WHERE id = '$room_id4'";
		$query_price4 = mysqli_query($connection, $sql_price4);
		while ($row_price4 = mysqli_fetch_assoc($query_price4)) {

		if (!$query_price4) {
			$errors[] = ("An unknown error occurred, try again !");
		} else {
			if ($row_price4['availability'] != 1) {
				$errors[] = ("Room Booked !");
				print '<p style="text-align:center; margin: 0; color:white; background-color:red;" >room booked</p>';
			} else {
					$_SESSION['price'] = $row_price4['price'];
					$_SESSION['rname'] = $row_price4['rname'];
					$_SESSION['rno'] = $row_price4['rno'];
					$_SESSION['availability'] = $row_price4['availability'];
					header('location: booking.php');
				}
			}
		}
	}

if (isset($_POST['button5'])){
		$room_id5 = htmlentities($_POST['room5']);

		// getting price
		$sql_price5 = "SELECT * FROM room WHERE id = '$room_id5'";
		$query_price5 = mysqli_query($connection, $sql_price5);
		while ($row_price5 = mysqli_fetch_assoc($query_price5)) {

		if (!$query_price5) {
			$errors[] = ("An unknown error occurred, try again !");
		} else {
			if ($row_price5['availability'] != 1) {
				$errors[] = ("Room Booked !");
				print '<p style="text-align:center; margin: 0; color:white; background-color:red;" >room booked</p>';
			} else {
					$_SESSION['price'] = $row_price5['price'];
					$_SESSION['rname'] = $row_price5['rname'];
					$_SESSION['rno'] = $row_price5['rno'];
					$_SESSION['availability'] = $row_price5['availability'];
					header('location: booking.php');
				}
			}
		}
	}

if (isset($_POST['button6'])){
		$room_id6 = htmlentities($_POST['room6']);

		// getting price
		$sql_price6 = "SELECT * FROM room WHERE id = '$room_id6'";
		$query_price6 = mysqli_query($connection, $sql_price6);
		while ($row_price6 = mysqli_fetch_assoc($query_price6)) {

		if (!$query_price6) {
			$errors[] = ("An unknown error occurred, try again !");
		} else {
			if ($row_price6['availability'] != 1) {
				$errors[] = ("Room Booked !");
				print '<p style="text-align:center; margin: 0; color:white; background-color:red;" >room booked</p>';
			} else {
					$_SESSION['price'] = $row_price6['price'];
					$_SESSION['rname'] = $row_price6['rname'];
					$_SESSION['rno'] = $row_price6['rno'];
					$_SESSION['availability'] = $row_price6['availability'];
					header('location: booking.php');
				}
			}
		}
	}

if (isset($_POST['button7'])){
		$room_id7 = htmlentities($_POST['room7']);

		// getting price
		$sql_price7 = "SELECT * FROM room WHERE id = '$room_id7'";
		$query_price7 = mysqli_query($connection, $sql_price7);
		while ($row_price7 = mysqli_fetch_assoc($query_price7)) {

		if (!$query_price7) {
			$errors[] = ("An unknown error occurred, try again !");
		} else {
			if ($row_price7['availability'] != 1) {
				$errors[] = ("Room Booked !");
				print '<p style="text-align:center; margin: 0; color:white; background-color:red;" >room booked</p>';
			} else {
					$_SESSION['price'] = $row_price7['price'];
					$_SESSION['rname'] = $row_price7['rname'];
					$_SESSION['rno'] = $row_price7['rno'];
					$_SESSION['availability'] = $row_price7['availability'];
					header('location: booking.php');
				}
			}
		}
	}

if (isset($_POST['button8'])){
		$room_id8 = htmlentities($_POST['room8']);

		// getting price
		$sql_price8 = "SELECT * FROM room WHERE id = '$room_id8'";
		$query_price8 = mysqli_query($connection, $sql_price8);
		while ($row_price8 = mysqli_fetch_assoc($query_price8)) {

		if (!$query_price8) {
			$errors[] = ("An unknown error occurred, try again !");
		} else {
			if ($row_price8['availability'] != 1) {
				$errors[] = ("Room Booked !");
				print '<p style="text-align:center; margin: 0; color:white; background-color:red;" >room booked</p>';
			} else {
					$_SESSION['price'] = $row_price8['price'];
					$_SESSION['rname'] = $row_price8['rname'];
					$_SESSION['rno'] = $row_price8['rno'];
					$_SESSION['availability'] = $row_price8['availability'];
					header('location: booking.php');
				}
			}
		}
	}

if (isset($_POST['button9'])){
		$room_id9 = htmlentities($_POST['room9']);

		// getting price
		$sql_price9 = "SELECT * FROM room WHERE id = '$room_id9'";
		$query_price9 = mysqli_query($connection, $sql_price9);
		while ($row_price9 = mysqli_fetch_assoc($query_price9)) {

		if (!$query_price9) {
			$errors[] = ("An unknown error occurred, try again !");
		} else {
			if ($row_price9['availability'] != 1) {
				$errors[] = ("Room Booked !");
				print '<p style="text-align:center; margin: 0; color:white; background-color:red;" >room booked</p>';
			} else {
					$_SESSION['price'] = $row_price9['price'];
					$_SESSION['rname'] = $row_price9['rname'];
					$_SESSION['rno'] = $row_price9['rno'];
					$_SESSION['availability'] = $row_price9['availability'];
					header('location: booking.php');
				}
			}
		}
	}

if (isset($_POST['button10'])){
		$room_id10 = htmlentities($_POST['room10']);

		// getting price
		$sql_price10 = "SELECT * FROM room WHERE id = '$room_id10'";
		$query_price10 = mysqli_query($connection, $sql_price10);
		while ($row_price10 = mysqli_fetch_assoc($query_price10)) {

		if (!$query_price10) {
			$errors[] = ("An unknown error occurred, try again !");
		} else {
			if ($row_price10['availability'] != 1) {
				$errors[] = ("Room Booked !");
				print '<p style="text-align:center; margin: 0; color:white; background-color:red;" >room booked</p>';
			} else {
					$_SESSION['price'] = $row_price10['price'];
					$_SESSION['rname'] = $row_price10['rname'];
					$_SESSION['rno'] = $row_price10['rno'];
					$_SESSION['availability'] = $row_price10['availability'];
					header('location: booking.php');
				}
			}
		}
	}

if (isset($_POST['button11'])){
		$room_id11 = htmlentities($_POST['room11']);

		// getting price
		$sql_price11 = "SELECT * FROM room WHERE id = '$room_id11'";
		$query_price11 = mysqli_query($connection, $sql_price11);
		while ($row_price11 = mysqli_fetch_assoc($query_price11)) {

		if (!$query_price11) {
			$errors[] = ("An unknown error occurred, try again !");
		} else {
			if ($row_price11['availability'] != 1) {
				$errors[] = ("Room Booked !");
				print '<p style="text-align:center; margin: 0; color:white; background-color:red;" >room booked</p>';
			} else {
					$_SESSION['price'] = $row_price11['price'];
					$_SESSION['rname'] = $row_price11['rname'];
					$_SESSION['rno'] = $row_price11['rno'];
					$_SESSION['availability'] = $row_price11['availability'];
					header('location: booking.php');
				}
			}
		}
	}


?>