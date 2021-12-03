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
<html>
<head>
<style>

body{
  background-color: lightcyan;
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
   background-color: white;
   margin: 15px;
}

td, th {

    text-align: left;
    padding: 8px;

}

.inlineTable {
            display: inline-block;
        }

</style>
</head>
<body>
<form name='mohon_form' method='post' action='after_mohon.php'>
<?php
$LinkPangkalanData = mysql_connect("localhost", "root", "");

                 if(!$LinkPangkalanData)
		 {
                 echo "Failed to detect database: ";
mysql_error();
                 exit;
                 }
 
                 $selectDB = mysql_select_db("daftar");
                 if(!$selectDB)
                 {
                 echo "Failed to select database: ";
mysql_error();
                 exit;

                 }



       


$ContohSQL = "SELECT * FROM permohonan JOIN student ON permohonan.no_ic=student.no_ic 
             JOIN parent ON permohonan.no_ic1=parent.no_ic1 WHERE permohonan.mohon_id LIKE '".$_POST['mohonan_id']."%'";
              





                 $hasilQuery = mysql_query($ContohSQL);

                 if(!$hasilQuery)
                 {
                 echo "Query Failed: " . mysql_error();
                 exit;
                 }


while ($_POST = mysql_fetch_array($hasilQuery))

echo "<table border='0|0' >
<h1>MAKLUMAT PEMOHON</h1>
</table>

<table align='left' border='2' width='22.5%' class='inlineTable'>
  <th colspan='2' align='center'> PELAJAR</th>
  <tr>
    <td><label>Nama: </td>
    <td><span class='style4'>&nbsp;".$_POST["nama"]."&nbsp;</td> 
  </tr> 
  <tr>
    <td><label>warganegara: </td>
    <td><span class='style4'>&nbsp;".$_POST["warganegara"]."&nbsp;</td>  
  </tr>
  <tr>
    <td><label>Tarikh Lahir: </td>
    <td><span class='style4'>&nbsp;".$_POST["lahir"]."&nbsp;</td>  
  </tr>
  <tr>
    <td><label>warganegara: </td>
    <td><span class='style4'>&nbsp;".$_POST["warganegara"]."&nbsp;</td>   
  </tr>
  <tr>
    <td><label>Sijil Lahir: </td>
    <td><input type='text' name='no_ic' size='20' value='".$_POST["no_ic"]."'></td> 
  </tr>
  <tr>
    <td><label>Darjah: </td>
    <td><span class='style4'>&nbsp;".$_POST["darjah"]."&nbsp;</td>  
  </tr>
  <tr>
    <td><label>Jantina: </td>
    <td><span class='style4'>&nbsp;".$_POST["jantina"]."&nbsp;</td>    
  </tr>
  <tr>
    <td><label>Alamat: </td>
    <td><span class='style4'>&nbsp;".$_POST["alamat"]."&nbsp;</td>
  </tr>
</table>
  
<table align='left' border='2' width='20.1%' class='inlineTable'>
<th colspan='2'>IBUBAPA</th>
  <tr>
    <td><label>Nama Bapa: </td>
    <td><span class='style4'>&nbsp;".$_POST["nama_bapa"]."&nbsp;</td> 
  </tr> 
  <tr>
    <td><label>Pekerjaan: </td>
    <td><span class='style4'>&nbsp;".$_POST["pekerjaan"]."&nbsp;</td>  
  </tr>
  <tr>
    <td><label>Status: </td>
    <td><span class='style4'>&nbsp;".$_POST["status"]."&nbsp;</td>  
  </tr>
  <tr>
    <td><label>Pendapatan: </td>
    <td><span class='style4'>&nbsp;".$_POST["pendapatan"]."&nbsp;</td>   
  </tr>
  <tr>
    <td><label>Alamat: </td>
    <td><span class='style4'>&nbsp;".$_POST["alamat_bapa"]."&nbsp;</td>  
  </tr>
  <tr>
    <td><label>No Telefon: </td>
    <td><span class='style4'>&nbsp;".$_POST["no_tel"]."&nbsp;</td>    
  </tr>
  <tr>
    <td><label>Tanggungan Keluarga: </td>
    <td><span class='style4'>&nbsp;".$_POST["tang"]."&nbsp;</td>
  </tr>
  </table>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 <table style='background-color:lightcyan' style:'border:1px solid black;>
  <tr>
    <th><i>Kemaskini Permohonan</i></th>
    <td><select name='permohonan'>
    <option value=''>Sila Pilih</option>
    <option value='Terima'>Terima permohonan</option>
    <option value='Tolak'>Tolak permohonan</option>
    <option value='Dalam proses'>Dalam proses</option>
  </select>
  </tr>
  <Td style='background-color:lightcyan;'><input type='submit' value='Kemaskini' style='float: right;''></td>
  <td><a href='carian_guru.php'>Kembali</a></td>

</table>";
echo "";

               mysql_free_result($hasilQuery);

?>
</body>
</html>