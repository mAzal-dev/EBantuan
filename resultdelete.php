<html>
<head>
<style>
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
<form name='buang_delete_form' method='post' action='after_delete.php'>
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
       


$ContohSQL = "SELECT * FROM ibubapa WHERE nama_bapa LIKE '".$_POST['nama_bapa']."%'";

                 $hasilQuery = mysql_query($ContohSQL);

                 if(!$hasilQuery)
                 {
                 echo "Query Failed: " . mysql_error();
                 exit;
                 }

while ($_POST = mysql_fetch_array($hasilQuery))

echo "<table border='0|0'>
<th>Maklumat Ibubapa/penjaga </th>
</table>
<table align='left' border='1'>
<tr>
    <th>ID Ibubapa: </th>
    <td><input type='text' name='id_ibubapa' size='20' value='".$_POST["ibubapa_id"]."'></td>
  </tr>
  <tr>
    <th>Nama: </th>
    <td><input type='text' name='nama_bapa' size='20' value='".$_POST["nama_bapa"]."'></td>
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
    <td><input type='text' name='tanggungan' size='20' value='".$_POST["tanggungan"]."'></td>
  </tr>
</table>";
echo "<table border='0' align='right'>";
echo "<tr>";
echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";

echo "</table>";
echo "<br><br>";
echo "<form action='after_delete.php'><th><input type='submit' value='Delete' style='float: left;'></th></form>";
                  mysql_free_result($hasilQuery);

?>
</body>
</html>