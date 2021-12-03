<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login_guru.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login_guru.php");
  }
?>



<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<style>

.header img{
  margin-left: 100px;
}


.login-guru{
 
  width: 100%;

   
}
.login-guru h2 {
  width: 30%;
  margin: 15px auto 0px;
  color: black;
  background: red;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 5px 5px 5px 5px;
  padding: 1px;
  box-shadow: 3px 5px 3px 3px white;
}

.input-group input{
  width: 92%;
  border-radius: 3px;
  
}


  
   
  

</style>
<div class="daftar">
  <h2>Admin</h2>
</div>
<div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

  <div class="table">

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <p>Guru Didaftar: <strong><i><?php echo $_SESSION['username']; ?></strong></i></p>
            
      <a href="admin.php" style="color:blue;">Continue As Admin</a>       |  
      <a href="index.php?logout='1'" style="color:red;">logout As Admin</a>
      
  </div>
    <?php endif ?>
  </div>
