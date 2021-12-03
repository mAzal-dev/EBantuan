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
<!DOCTYPE html>
<html>
<style>
body{
    background-color: lightcyan;
}

table{
    border-collapse: collapse;
}

</style>
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
				 
//Arahan SQL (Structured Query Language)

//$ContohSQL = "DELETE FROM tbl_student WHERE matric_no = '".$_REQUEST ['txtModfield2']."' ";

//Arahan SQL (Structured Query Language)

//$ContohSQL = "UPDATE tbl_student SET student_name = 'Mohd Ali', matric_no = '835687' WHERE student_id = '1' ';

$ContohSQL = "UPDATE student
              SET nama = '".$_REQUEST['nama']."', no_ic = '".$_REQUEST['no_ic']."', darjah = '".$_REQUEST['darjah']."',jantina = '".$_REQUEST['jantina']."', alamat = '".$_REQUEST['alamat']."'
              ";
//Dapatkan hasil pencarian
$hasilQuery = mysql_query($ContohSQL);

echo "<table border='1|0'>";
echo "<th>Kemaskini Maklumat</th>";
echo "</table>";
echo "<br><br><br><br><br>";
echo "<table border='1' align='left'>";
echo "<tr>";
echo "<th>Maklumat anda sudah disimpan.</th>";
echo "</table>";
echo "<br><br><br><br><br>";
echo "<table border='0' align='center'>";
echo "<tr>";
echo "<form action='before_update.php'><tr><input type='submit' value='Back' style='float: left;'></tr></form>";
echo "</table>";

//Mengesahkan query
if(!$hasilQuery)
{
//Amaran jika query gagal
echo "Query Gagal: " . mysql_error();
exit;
}
?>
</html>