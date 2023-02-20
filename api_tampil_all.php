<?php
	require_once('koneksi.php');
	$myArray = array();
	if ($result = mysqlI_query($conn, "SELECT * FROM kelas ORDER BY id ASC")) {
		while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
			$myArray = $row;
		}
		mysqli_close($conn);
		echo json_encode($myArray);
	}
?>