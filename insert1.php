<html>
<head>
<style>

body{
  background-color: lightcyan;
}
table{
	font-family: arial, sans-serif;
	
  border: 1px solid black;


}

td{
	text-align: left;
	padding: 10px;
  border: 1px solid black;
}
th{
  border: 1px solid black;
}
tr{
  background-color: white;
}

label{
  font-weight: bold;
}


}
</style>
</head>
<body>
<?php

$server = "localhost";
$database = "daftar";
$user = "root";
$password = "";

$conn1 = mysql_connect($server, $user, $password);

if (!$conn1)
        {
              die('Could not: '
.mysql_error());
        }

mysql_select_db($database, $conn1);




$nama = $_POST['nama'];
$darjah = $_POST['darjah'];
$jantina = $_POST['jantina'];
$alamat = $_POST['alamat'];
$no_ic = $_POST['no_ic'];
$warganegara = $_POST['warganegara'];
$lahir = $_POST ['lahir'];
$nama_bapa = $_POST['nama_bapa'];
$no_ic1 = $_POST['no_ic1'];
$pekerjaan = $_POST['pekerjaan'];
$status = $_POST['status'];
$pendapatan = $_POST['pendapatan'];
$alamat_bapa = $_POST['alamat_bapa'];
$no_tel = $_POST['no_tel'];
$tang = $_POST['tang'];




mysql_query ("INSERT INTO parent(nama_bapa, no_ic1, pekerjaan, status, pendapatan, alamat_bapa, no_tel, tang) 
              VALUES('$nama_bapa', '$no_ic1', '$pekerjaan', '$status', '$pendapatan', '$alamat_bapa', '$no_tel', '$tang')");

mysql_query ("INSERT INTO student(nama, darjah, jantina, alamat, no_ic, warganegara, lahir) VALUES('$nama', '$darjah', '$jantina', '$alamat', '$no_ic', '$warganegara', '$lahir')");

$sql = "INSERT INTO permohonan(no_ic, no_ic1) VALUES('$no_ic', '$no_ic1')";


echo "<table border='0|0'>


<table> 
  <tr>
    <H3> PELAJAR </H3>
  </tr>
  <tr>
    <td><label>NAMA </td>
    <td><label>WARGANEGARA </td>
    <td><label>TARIKH LAHIR </td>
    <td><label>SIJIL LAHIR </td>
    <td><label>DARJAH </td>
    <td><label>JANTINA </td>
    <td><label>ALAMAT </td>
  </tr>
  </div>
  <tr>
    <td><span class='style4'>&nbsp;".$_POST["nama"]."&nbsp;</td>
    <td><span class='style4'>&nbsp;".$_POST["warganegara"]."&nbsp;</td>     
    <td><span class='style4'>&nbsp;".$_POST["lahir"]."&nbsp;</td>  
    <td><span class='style4'>&nbsp;".$_POST["no_ic"]."&nbsp;</td>     
    <td><span class='style4'>&nbsp;".$_POST["darjah"]."&nbsp;</td>   
    <td><span class='style4'>&nbsp;".$_POST["jantina"]."&nbsp;</td>   
    <td><span class='style4'>&nbsp;".$_POST["alamat"]."&nbsp;</td>
  </tr>  
  </table>
  <br>

  <table> 

  <tr>
    <H3> IBU/BAPA </H3>
  </tr>
  <tr>
    <td><label>NAMA: </td>
    <td><span class='style4'>&nbsp;".$_POST["nama_bapa"]."&nbsp;</td> 
  </tr>
  <tr>
    <td><label>NO. KAD PENGENALAN: </td>
    <td><span class='style4'>&nbsp;".$_POST["no_ic1"]."&nbsp;</td>   
  </tr>
  <tr>
    <td><label>PEKERJAAN: </td>
    <td><span class='style4'>&nbsp;".$_POST["pekerjaan"]."&nbsp;</td>     
  </tr>
  <tr>
    <td><label>PENDAPATAN: </td>
    <td><span class='style4'>&nbsp;".$_POST["pendapatan"]."&nbsp;</td> 
  </tr>
  <tr>
    <td><label>ALAMAT: </td>
    <td><span class='style4'>&nbsp;".$_POST["alamat_bapa"]."&nbsp;</td>  
  </tr>
  <tr>
    <td><label>NO.TEL: </td>
    <td><span class='style4'>&nbsp;".$_POST["no_tel"]."&nbsp;</td>    
  </tr>
  <tr>
    <td><label>STATUS: </td>
    <td><span class='style4'>&nbsp;".$_POST["status"]."&nbsp;</td>
  </tr>
  <tr>
    <td><label>TANGGUNGAN: </td>
    <td><span class='style4'>&nbsp;".$_POST["tang"]."&nbsp;</td>
  </tr>
  </table>
  </table>
  
</table>

  
  
</table>";
echo "<table border='0' align='right'>";
echo "<tr>";


echo "</table>";
echo "<p>Data anda sudah disimpan</p>";
echo "<form action='daftar.php'><th><input type='submit' value='Menu' style='float: center;'></th></form>";

$result = mysql_query($sql,$conn1);
echo "<b>ID Permohonan anda ialah: </b>" . mysql_insert_id();
mysql_close($conn1);

?>

<center><button onclick="myFunction()">PRINT </button></center>

<script>
function myFunction() {
    window.print();
}
</script>

</body>
</html>