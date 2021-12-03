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
   background-color: white;
}

td, th {

    text-align: left;
    padding: 8px;

}

</style>
</head>
<body>
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



       


$ContohSQL = "SELECT * FROM permohonan JOIN student ON permohonan.mohon_id=student.mohon_id
                       WHERE student.no_ic LIKE '".$_POST['ic_no']."%' AND student.mohon_id LIKE '".$_POST['id_mohon']."%'";

                 $hasilQuery = mysql_query($ContohSQL);

                 if(!$hasilQuery)
                 {
                 echo "Query Failed: " . mysql_error();
                 exit;
                 }


while ($_POST = mysql_fetch_array($hasilQuery))

echo "<table border='0|0'>
<h1>MAKLUMAT PEMOHON </h1>
</table>
<table align='left' border='2'>

  <tr>
    <legend> <b>PELAJAR </legend>
  </tr>
  <br>
  <tr>
    <td><label>STATUS PERMOHONAN: </td>
    <td><span class='style4'>&nbsp;".$_POST["status_mohon"]."&nbsp;</td> 
  </tr> 
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
    <td><span class='style4'>&nbsp;".$_POST["no_ic"]."&nbsp;</td> 
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
  </table>


</table>";
echo "<table border='0' align='right'>";
echo "<tr>";
echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";

echo "</table>";


echo "<form action='carian.php'><th><input type='submit' name='submit' value='Back' style='float: left;'></th></form>";




                  mysql_free_result($hasilQuery);

?>

<br><br>

<button onclick="myFunction()">Print </button>

<script>
function myFunction() {
    window.print();
}
</script>
</body>
</html>