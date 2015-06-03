<?php 
class Info {
		function sitename() {
			include 'dbconn.php';
			$query	= "SELECT * FROM `option` WHERE `pengaturan` LIKE 'nama_situs'";
			$result	= $conn->query($query);
			if ($result->num_rows > 0) {
				$row	= $result->fetch_array(MYSQLI_ASSOC);
				$data	= $row['jawaban'];
			}
			else {
				$data	= "Not Defined";
			}
			return $data;
			}
		function author() {
			include 'dbconn.php';
			$query	= "SELECT * FROM `option` WHERE `pengaturan` LIKE 'author'";
			$result	= $conn->query($query);
			if ($result->num_rows > 0) {
				$row	= $result->fetch_array(MYSQLI_ASSOC);
				$data	= $row['jawaban'];
			}
			else {
				$data	= "Not Defined";
			}
			return $data;
			}
	}
	?>