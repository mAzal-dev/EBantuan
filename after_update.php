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

$ContohSQL = "UPDATE parent 
              SET nama_bapa = '".$_REQUEST['nama']."', no_ic1 = '".$_REQUEST['no_ic1']."', pekerjaan = '".$_REQUEST['pekerjaan']."',pendapatan = '".$_REQUEST['pendapatan']."', status = '".$_REQUEST['status']."',tang = '".$_REQUEST['tang']."',alamat_bapa = '".$_REQUEST['alamat_bapa']."'
              ";

//Dapatkan hasil pencarian
$hasilQuery = mysql_query($ContohSQL);

echo "<table border='1|0' align='left'>";
echo "<th>Kemaskini Maklumat</th>";
echo "</table>";
echo "<br><br><br><br>";
echo "<table border='1' align='left'>";
echo "<tr>";
echo "<th>Maklumat anda sudah disimpan.</th>";
echo "</table>";
echo "<br><br><br><br><br>";
echo "<table border='0' align='left'>";
echo "<tr>";
echo "<form action='before_update.php'><th><input type='submit' value='Back' style='float: left;'></th></form>";
echo "</table>";


//Mengesahkan query

exit;

?>
</html>