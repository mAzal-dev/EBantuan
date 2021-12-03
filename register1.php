<?php
	session_start(); 

	//connect to database 
	$db = mysqli_connect("localhost", "root","", "authentication" );

	if (isset($_POST['register_btn'])) {
		session_start();
		$username = mysql_real_escape_string($_POST['username']);
		$email = mysql_real_escape_string($_POST['email']);
		$password = mysql_real_escape_string($_POST['password']);
		$password2 = mysql_real_escape_string($_POST['password2']);

		if ($password == $password2) {
			//create user
			$password = md5($password); //hash password before storing for security purposes 
			$sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', 'password')";
			mysqli_query($db, $sql);
			$_SESSION ['message'] = "Anda Berjaya Logged in";
			$_SESSION ['username'] = $username; 
			header ("location: index.php"); //link to index.php
		} else {
			$_SESSION ['message'] = "Password Anda Tidak Sama";
		}
	}



?>








<!DOCTYPE html>
<html>
<head>
	<title> Daftar Guru </title>
</head>
<style>

body {
	padding: 0px;
	margin: 0px;
}

.header{
	background-color: #1A3333;
	color: white;
	text-align: center;
	top: 0px;
	width: 100%;
	padding: 5px; 
}
form{

	width: 40%;
	padding: 30px;
	border:1px solid #cbcbcb;
	margin: 5px auto;
}

.textinput{
	margin-top: 2px;
	height: 28px;
	border: 1px solid #5E6E66;
	font-size: 16px;
	padding: 1px;
	width: 100%;
}

#error_msg{
	width: 50%;
	margin: 5px auto;
	height: 30px;
	border: 1px solid #FF0000;
	background: #FFB9B8;
	color: #FF0000;
	text-align: center;
	padding-top: 10px;
}

td {
	text-align: right;
}
</style>
<body>
	<div class ="header">
		<h1>Daftar Akaun Guru</h1>
	</div>
	<form method="post" action="register1.php">
		<table>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username" class="textinput"></td>
			</tr>
			<tr>
				<td>Email :</td>
				<td><input type="email" name="email" class="textinput"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password" class="textinput"></td>
			</tr>
			<tr>
				<td>Re-Password:</td>
				<td><input type="password2" name="password2" class="textinput"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="register_btn" value="Register"></td>
			</tr>


		</table>

	</form>











</body>
</html>