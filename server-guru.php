<?php
session_start();

// variable declaration
$username = "";
$email    = "";
$errors = array(); 
$_SESSION['success'] = "";

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'guru');
// if the register button is clicked
if (isset($_POST['reg_admin'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled
  if (empty($username)) { array_push($errors, "Username Diperlukan"); }
  if (empty($email)) { array_push($errors, "No IC/Kad Pengenalan Diperlukan"); }
  if (empty($password_1)) { array_push($errors, "Password Diperlukan"); }
  if ($password_1 != $password_2) {
  array_push($errors, "Passwords Tidak sama");
  }
  // register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = ($password_1);//encrypt the password before saving in the database
    $query = "INSERT INTO users (username, email, password) 
          VALUES('$username', '$email', '$password')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "Penambahan ID GURU Berjaya";
    header('location: admin_success.php'); //redirect to homepage 
  }

}



// ... 

// ... 

// LOG USER IN FORM LOGIN PAGE
if (isset($_POST['login'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password_1']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = ($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "Selamat Datang ke E-BANTUAN";
      header('location: index_guru.php');
    }else {
      array_push($errors, "Salah username/password ");
    }
  }
}


 
?> 
  
