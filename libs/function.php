<?php 
	class Install {
		function sitename($x) {
			include 'dbconn.php';
			$query	= "SELECT * FROM `option` WHERE `pengaturan` LIKE 'nama_situs'";
			$result	= $conn->query($query);
			if ($result->num_rows > 0) {
				$query	= "UPDATE `option` SET `jawaban` = '$x' WHERE `pengaturan` LIKE `nama_situs`";
				$result	= $conn->query($query);
				if ($result === FALSE) {
					echo "Terjadi Galat!" .$conn->error;
				}
			}
			else {
				$query	= "INSERT INTO `option`  (`jawaban`,`pengaturan`) VALUES ('$x' , 'nama_situs')";
				$result	= $conn->query($query);
				if ($result === FALSE) {
					echo "Terjadi Galat!" .$conn->error;
				}
			}
		}
		function author($y) {
			include 'dbconn.php';
			$query	= "SELECT * FROM `option` WHERE `pengaturan` LIKE 'author'";
			$result	= $conn->query($query);
			if ($result->num_rows > 0) {
				$query	= "UPDATE `option` SET `jawaban` = '$y' WHERE `pengaturan` LIKE 'author'";
				$result	= $conn->query($query);
				if ($result === FALSE) {
					echo "Terjadi Galat!" .$conn->error;
				}
			}
			else {
				$query	= "INSERT INTO `option`  (`jawaban`,`pengaturan`) VALUES ('$y' , 'author')";
				$result	= $conn->query($query);
				if ($result === FALSE) {
					echo "Terjadi Galat!" .$conn->error;
				}
			}
		}
	}