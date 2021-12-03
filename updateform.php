<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }

?>
<html>
<head>
<style>
body{
  background-color: lightcyan;
}
table {
   
    border-collapse: collapse;
   
}

tr ,td, th {

    margin-right:10px;
    text-align: left;
    padding: 5px;
}




</style>
</head>
<body>
<form name="delete_form" method="post" action="resultupdate.php">
<table border="1|0">
<th>Kemaskini Maklumat Permohonan</th>
</table>
<br><br>
<table align="left">
  <tr>
    <th>Nama Ibubapa/Penjaga</th>
    <td><input type="text" name="nama_bapa"></td>
  </tr>
  <tr>
    <th>Pekerjaan</th>
    <td><input type="text" name="pekerjaan"></td>
  <tr>
    <th>No. Kad Pengenalan</th>
    <td><input type="text" name="no_ic1"></td>
  </tr>
  <tr>
    <th>Status</th>
    <td><input type="text" name="status"></td>
  </tr>
  <tr>
    <th>Pendapatan</th>
    <td><input type="text" name="pendapatan"></td> 
  </tr>
  <tr>
    <th>Alamat Majikan</th>
    <td><input type="text" name="alamat_bapa"></td>
  </tr>
  <tr>
    <th>Tanggungan</th>
    <td><input type="text" name="tanggungan"></td><td><input type="submit" value="Search"></td>
  </tr>
  <br>
  
 
  
 

</table>
</table>



</body>
</html>