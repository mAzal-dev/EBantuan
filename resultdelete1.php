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
<form name='buang_delete_form' method='post' action='after_delete1.php'>
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
       


$ContohSQL = "SELECT * FROM pelajar WHERE nama LIKE '".$_POST['nama']."%'";

                 $hasilQuery = mysql_query($ContohSQL);

                 if(!$hasilQuery)
                 {
                 echo "Query Failed: " . mysql_error();
                 exit;
                 }

while ($_POST = mysql_fetch_array($hasilQuery))

echo "<table border='0|0'>
<th>Menolak Permohonan Pelajar </th>
</table>
<table align='left' border='1'>

  <tr>
    <th>Nama Pelajar </th>
    <td><input type='text' name='nama' size='20' value='".$_POST["nama"]."'></td>
  </tr>
  
  <tr><br>
    <th>Alamat</th>
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
echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";

echo "</table>";
echo "<br><br";
echo "<form action='after_delete1.php'><th><input type='submit' value='Menolak' style='float: left;'></th></form>";
                  mysql_free_result($hasilQuery);

?>
</body>
</html>