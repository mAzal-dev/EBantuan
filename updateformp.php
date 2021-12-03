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
<form name="delete_form" method="post" action="resultupdate1.php">
<table border="1|0">
<th>Kemaskini Maklumat Permohonan</th>
</table>
<br><br>
<table border="2" align="left">
  <tr>
    <th>Nama Pelajar</th>
	<td><input type="text" name="nama"></td>
  </tr>
    <th>Alamat</th>
	<td><input type="text" name="alamat"></td>
  </tr>
    <th>Darjah</th>
	<td><input type="text" name="darjah"></td>
  </tr>
  <tr>
    <th>jantina</th>
	<td><input type="text" name="jantina"></td>
  </tr>
  <tr>

    <th>No. Kad Pengenalan</th>
    <td><input type="text" name="no_ic"></td>
    
    <td border="0"><input type="submit" value="Search" style="float: left;"></td>
  
  </tr>
  <br>
  <tr>
  
    
  
  

 

</table>
</table>



</body>
</html>