<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'daftar');

	// initialize variables
	$name = "nama";
	$darjah = "darjah";
	$id = 0;
	$update = false;

	if (isset($_POST['submit'])) {
		$name = $_POST['nama'];
		$darjah = $_POST['darjah'];

		mysqli_query($db, "SELECT FROM pelajar  (nama, darjah) VALUES ('$nama', '$darjah')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: index.php');
	}

// ...