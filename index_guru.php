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
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
.menu li a{
  font-style: bold;
  color:black;
  font-family: sans-serif;

}
.header img{
  margin-left: 100px;
}

*{
  margin: 0;
  padding: 0;
}

html, body{
  height: 100%
}

#container{
  min-height: 100%;
}

#main {
  overflow: auto;
  padding-bottom: 100px;
}

#footer{
  background-color: #000;
  position: relative;
  height: 100px;
  margin-top: -100px;
  clear: both;
}

.sekolah img{
  margin-left: 50px;
  border: 3px solid cyan;
  margin-top: 5px;
}

.daftar{
  margin-left:350px;
}
.content{
  margin-left: 355px;
  text-transform: uppercase;
  text-align: center;

}
</style>
<head>
	<title>Home</title>

</head>
<body>
  <div class="header">
  <table>
    <th><img src="icon/hehe.png" width="100%" height="100" ></th>
    </table>
 
 <!-- LIST TEPI BELAH KANAN START-->
 <div class="list">
  <ul>
    <li><a href="#petalaman.php">Peta Laman</a></li>
    <li><a href="#peranan.php">Peranan</a></li>
    <li><a href="#FAQ.php">Soalan Lazim</a></li>
    <li><a href="index_guru.php">Utama</a></li>
    
  </ul>
 </div>       
 </div>         
 <hr>     
 <div class="menu">
  <ul> <h1>Menu</h1>
    <li><img src="icon/utama.png" width="30%"><br><a href="index_guru.php">Utama</a></li>
    <li><img src="icon/edit.png" width="30%"><br><a href="carian_guru.php">Semak Permohonan</a></li>
    <li><img src="icon/download.png" width="30%"><br><a href="laporan_all.php">Laporan</a></li>
    <li><img src="icon/signin.png" width="30%"><br><a href="index_guru.php?logout='1'">Keluar</a></li>
    

  </ul>
</div>
<div class="daftar">
  <h2>Laman Utama</h2>
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
      <p>Pengguna: <strong><i><?php echo $_SESSION['username']; ?></strong></i></p>
      
  </div>
    <?php endif ?>
  </div>
  <br><br>

<div class="sekolah" align="center">
<img src="sekolah.jpg" width="800"> <br>   
</div>  




</body>
<div id="container">
    <div id="main">

    </div>
</div>

<footer id="footer"> 
<font color="white">Copyright Reserved 2017 © Dream Synergy</font>

</footer>

</html>