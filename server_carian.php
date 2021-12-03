<?php

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'daftar');

if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['ic_no']);
  $password = mysqli_real_escape_string($db, $_POST['id_mohon']);

  if (empty($username)) {
    array_push($errors, "No. Mykid Diperlukan");
  }
  if (empty($password)) {
    array_push($errors, "Mohon ID Diperlukan");
  }

  if (count($errors) == 0) {
    $password = ($password);
    $query = "SELECT * FROM student WHERE no_ic='$username' AND mohon_id='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
     
      header('location: result.php');
    }else {
      array_push($errors, "Salah username/password ");
    }
  }
}

?>