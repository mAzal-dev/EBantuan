<html>
<head>
<title>

Input Form

</title>
</head>
<body>

<?php

$LinkPangkalanData = mysql_connect("localhost", "root", "");

                 if(!$LinkPangkalanData)
                 {

                 echo "Masalah Network: " .
mysql_error();
                 exit;
                 }

                 $selectDB = mysql_select_db("daftar"); 
                 if(!$selectDB)
                 {
                 
                 echo "Failed to select database: " . mysql_error();
                 exit;
                 }

//Arahan SQL (Structure Query Language)
$ContohSQL = "SELECT * FROM pelajar WHERE nama = '".$_GET['nama']."'";
//studid dari url parameter
//Dapatkan hasil pencarian 
$hasilQuery = mysql_query($ContohSQL);

//Mengesahkan query
if(!$hasilQuery)
{

//Amaran jika query gagal echo "Query Gagal: " . mysql_error();
exit;
}

//Cipta form

echo "<form method='POST' action='after_update.php?studid=".$_GET['nama']."'>";

//Cipta table
echo "<table>";

//Looping menggunakan while 
while ($_POST = mysql_fetch_array ($hasilQuery))
{

//Senaraikan hasil pencarian untuk dikemaskini
echo "<tr><td>Nama Pelajar</td><td><input type='text' name='nama' size='20' value='".$_POST ["nama"]."'></td></tr>";

echo "<tr><td>No. Kad Pengenalan</td><td><input type='text' name='no_ic' size='20' value='".$_POST ["no_ic"]."'></td></tr>";


echo "<tr><td colspan='2'><input type='submit' name='cmdSubmit' value='update'></td></tr>"; 
echo "<tr><td colspan='2'><input type='submit' name='cmdSubmit' value='delete'></td></tr>";
echo "<tr><td><a href='#a'>Back to My Profile</a></td></tr>";
}

echo "</table>";
echo "</form>";

//Free memory
mysql_free_result($hasilQuery);
?>

<input type ="submit" name="button" value="test">

</form>

</body>
</html>