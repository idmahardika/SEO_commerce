<?php 
class Sistem {
	function login($ua,$up) {
		session_start();
		include 'dbconn.php';
		$ua		= $conn->real_escape_string($ua);
		$up		= $conn->real_escape_string($up);
		$up		= md5($up);
		$query	= "SELECT * FROM `user` WHERE `username` LIKE '$ua' AND `password` LIKE '$up'";
		$result = $conn->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_array(MYSQLI_ASSOC);
			$_SESSION['a_id']	= $row['user_id'];
			$_SESSION['admin']	= 1;
			header('Location: index.php');
		}
		else {
			header('Location: masuk.php');
			$_SESSION['admin']	= 0;
		}
	}
}
	?>
	