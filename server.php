<?php
session_start();

// variable declaration
$username = "";
$email    = "";
$errors = array(); 
$_SESSION['success'] = "";

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'daftar');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $noic = mysqli_real_escape_string($db, $_POST['mykid']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled
  if (empty($username)) { array_push($errors, "Username Diperlukan"); }
  if (empty($noic)) { array_push($errors, "NoMykid Diperlukan"); }
  if (empty($password_1)) { array_push($errors, "Password Diperlukan"); }
  if ($password_1 != $password_2) {
	array_push($errors, "Password Tidak Sama");
  }

  // register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = ($password_1);//encrypt the password before saving in the database
  	$query = "INSERT INTO users (username,no_ic, password) 
  			  VALUES('$username', '$noic', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "selamat datang ke e-bantuan";
  	header('location: index.php');
  }

}

// ... 

// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username Diperlukan");
  }
  if (empty($password)) {
    array_push($errors, "Password Diperlukan");
  }

  if (count($errors) == 0) {
    $password = ($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "Selamat Datang ke E-BANTUAN";
      header('location: index.php');
    }else {
      array_push($errors, "Salah username/password ");
    }
  }
}

?>