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
<form name="update_pelajar" method="post" action="after_update1.php">
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
       



$ContohSQL = "SELECT * FROM student WHERE nama LIKE '".$_POST['nama']."%'";
                 $hasilQuery = mysql_query($ContohSQL);

                 if(!$hasilQuery)
                 {
                 echo "Query Failed: " . mysql_error();
                 exit;
                 }

while ($_POST = mysql_fetch_array($hasilQuery))

echo "<table border='0|0'>
<th>Sila Kemaskini</th>
</table>
<table align='left' border='1'>

  <tr>
    <th>Nama: </th>
    <td><input type='text' name='nama' size='20' value='".$_POST["nama"]."'></td>
  </tr>
  
  <tr><br>
    <th>Alamat: </th>
    <td><input type='text' name='alamat' size='20' value='".$_POST["alamat"]."'></td>
  </tr>
  <tr>
    <th>No. Kad Pengenalan</th>
    <td><input type='text' name='no_ic' size='20' value='".$_POST["no_ic"]."'></td>
  </tr>
  <tr>
    <th>Darjah</th>
    <td><input type='text' name='darjah' size='20' value='".$_POST["darjah"]."'></td>
  </tr>
  <tr>
    <th>Jantina</th>
    <td><input type='text' name='jantina' size='20' value='".$_POST["jantina"]."'></td>
  </tr>
  
</table>";
echo "<table border='0' align='right'>";
echo "<tr>";
echo "<br><br><br><br><br><br><br><br><br>";

echo "</table>";
echo "<br><br><br>";  
echo "<form action='after_update.php'><th><input type='submit' value='Update' style='float: center;'></th></form>";
                  mysql_free_result($hasilQuery);

?>
</body>
</html>