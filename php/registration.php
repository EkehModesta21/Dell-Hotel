<?php require_once('connection.php'); ?>
<?php 
$success = array();
$error = array();

if (isset($_POST['register']) && ($_SERVER['REQUEST_METHOD']=='POST')) {
	$fname = isset($_POST['fname']) ? trim($_POST['fname']) : '';
	$lname = isset($_POST['lname']) ? trim($_POST['lname']) : '';
	$uname = isset($_POST['uname']) ? trim($_POST['uname']) : '';
	$email = isset($_POST['email']) ? trim($_POST['email']) : '';
	$password = isset($_POST['password']) ? trim($_POST['password']) : '';
	$cpassword = isset($_POST['cpassword']) ? trim($_POST['cpassword']) : '';

	if (empty($fname) || empty($lname) || empty($uname) || empty($email) || empty($password) || empty($cpassword)) {
		$error[] = urlencode('Error!!! All Fields are Required');
	}

	if ($password != $cpassword) {
		$error[] = urlencode('Error!!! Passwords did not match');
	}

	if (!empty($error)) {
		header('location: ../signup.php?error=' . join($error, urlencode('<br>')));
	}else{
		$sql = "INSERT INTO user(fname, lname, uname, email, password) VALUES('$fname', '$lname', '$uname', '$email', '$password') ";
		$query = mysqli_query($connection, $sql);

		if ($query) {
			$success[] = urlencode('Reqistration Successful');
			header('location: ../booking.php?success=' . join($success, urlencode('<br>')));
		}else{
			$err = mysqli_error($connection);
			$error[] = urlencode('Registration Failed ');
			if (strpos($err, 'uname')) {
				$error[] = urlencode('Usernme Already Exists');
			}
			elseif (strpos($err, 'email')) {
				$error[] = urlencode('Email Already Exists');
			}
			
			header('location: ../signup.php?error=' . join($error, urlencode('<br>')));
		}
	}
















}





 ?>