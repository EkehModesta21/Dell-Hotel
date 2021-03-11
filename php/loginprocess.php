<?php require_once('connection.php'); ?>
<?php 
$success = array();
$error = array();

if (isset($_POST['login']) && ($_SERVER['REQUEST_METHOD']=='POST')) {
	$uname = isset($_POST['uname']) ? trim($_POST['uname']) : '';
	$password = isset($_POST['password']) ? trim($_POST['password']) : '';

	if (empty($uname) || empty($password)) {
		$error[] = urlencode('Error!!! All Fields are Required');
	}

	if (!empty($error)) {
		header('location: ../login.php?error=' . join($error, urlencode('<br>')));
	}else{
		$sql = "SELECT * FROM user WHERE uname = '$uname' AND password = '$password'";
		$query = mysqli_query($connection, $sql);
		$num = mysqli_num_rows($query);

		if ($query) {
			if ($num == 1) {
				session_start();
				while ($row = mysqli_fetch_assoc($query)) {
					$_SESSION['currentuser'] = $row;

				}

				$success[] = urlencode('Log In Successful');
				header('location: ../booking.php?success=' . join($success, urlencode('<br>')));
			} else {

				$error[] = urlencode('Username or Password is incorrect ! ');
				header('location: ../login.php?error=' . join($error, urlencode('<br>')));

			}

		}else{
			
			$err = mysqli_error($connection);
			$error[] = urlencode('A Technical Error Occurred. Please Contact The Admin '. $err);
			
			header('location: ../contact.php?error=' . join($error, urlencode('<br>')));
		}
	}
















}





 ?>