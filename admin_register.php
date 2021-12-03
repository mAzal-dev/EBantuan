<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login_guru.php");
  }
?>
<?php include('server_admin.php') ?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
.header img{
  margin-left: 100px;
}
  .input-group pre{
    position: absolute;
    margin-top: 1px;
    margin-left: 50px;
  }
.input-group input{
  width: 92%;

}



</style>
  
<head>

  <title>Pendaftaran E-Bantuan</title>
  </head>
<body>
<div class="header">
  <table>
    <th><img src="icon/hehe.png" width="100%" height="100" ></th>
    </table>
 <!-- LIST TEPI BELAH KANAN START-->
 <div class="list">
  <ul>
    
    <li><a href="1st page.php">Menu Utama</a></li>
    
  </ul>
 </div>      
 </div>          
 <hr>                             

  <div class="daftar">
    <h2>Register</h2>
  </div>
  
  <form method="post" action="admin_register.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Nama Penuh</label>
      <input type="text" name="username" value="<?php echo $username; ?>" style="border:1px solid">
    </div>
    <div class="input-group">
      <label>No IC/Kad Pengenalan</label>
      <input type="text" name="email" value="<?php echo $email; ?>" style="border:1px solid">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1" style="border:1px solid">
    </div>
    <div class="input-group">
      <label> Pastikan password</label>
      <input type="password" name="password_2" style="border:1px solid">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="register">Daftar</button>
    </div>
    <div class="input-group">
    <p>
     
      <font size="1" color="gray"><pre>Copyright Reserved 2017 © Dream Synergy</pre> </font>
    </p>
    </div>

  </form>
</body>
</html>