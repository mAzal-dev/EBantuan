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
    font-family: arial, sans-serif;
    border-collapse: collapse;
   
}

td, th {

    text-align: left;
    padding: 8px;
    border: 1px solid black;
}

.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
}

</style>
</head>
<body>
<form name="update_ibubapa" method="post" action="after_update.php">
<?php
$LinkPangkalanData = mysql_connect("localhost", "root","");

                 if(!$LinkPangkalanData)
		 {
                 echo "Failed to detect database: " .
mysql_error();
                 exit;
                 }
 
                 $selectDB = mysql_select_db("daftar");
                 if(!$selectDB)
                 {
                 echo "Failed to select database: " .
mysql_error();
                 exit;
                 }
       



$ContohSQL = "SELECT * FROM parent WHERE nama_bapa LIKE '".$_POST['nama_bapa']."%'";
                 $hasilQuery = mysql_query($ContohSQL);

                 if(!$hasilQuery)
                 {
                 echo "Query Failed: " . mysql_error();
                 exit;
                 }

while ($_POST = mysql_fetch_array($hasilQuery))

echo "<table border='0|0'>
<th>Sila Kemaskini Maklumat</th>
</table>
<table align='left' border='1'>
  <tr>
    <th>Nama: </th>
    <td><input type='text' name='nama' size='20' value='".$_POST["nama_bapa"]."'></td>
  </tr>
  
  <tr><br>
    <th>Pekerjaan</th>
    <td><input type='text' name='pekerjaan' size='20' value='".$_POST["pekerjaan"]."'></td>
  </tr>
  <tr>
    <th>No. Kad Pengenalan</th>
    <td><input type='text' name='no_ic1' size='20' value='".$_POST["no_ic1"]."'></td>
  </tr>
  <tr>
    <th>Status</th>
    <td><input type='text' name='status' size='20' value='".$_POST["status"]."'></td>
  </tr>
  <tr>
    <th>Pendapatan</th>
    <td><input type='text' name='pendapatan' size='20' value='".$_POST["pendapatan"]."'></td>
  </tr>
  <tr>
    <th>Alamat Majikan Bapa</th>
    <td><input type='text' name='alamat_bapa' size='20' value='".$_POST["alamat_bapa"]."'></td>
  </tr>
  <tr>
    <th>Tanggungan</th>
    <td><input type='text' name='tang' size='20' value='".$_POST["tang"]."'></td>
  </tr>
</table>";
echo "<table border='0' align='right'>";
echo "<tr>";
echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";

echo "</table>";
echo "<br><br><br>";
echo "<form action='after_update.php'><th><input type='submit' value='Update' style='float: center;'></th></form>";
                  mysql_free_result($hasilQuery);

?>
</body>
</html>