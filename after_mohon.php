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
</head>

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
         
$ContohSQL = "UPDATE permohonan
              SET no_ic = '".$_REQUEST ['no_ic']."' , 
                status_mohon = '".$_POST ['permohonan']."'
              WHERE no_ic ='".$_POST ['no_ic']."'";

$hasilQuery = mysql_query($ContohSQL);

echo "Kemaskini Berjaya";

if(!$hasilQuery)
{
echo "Query Gagal: " . mysql_error();
exit;
}
?>

<table>
  <Td style='background-color:lightcyan;'><form action='index_guru.php'><input type='submit' name='submit' value='Back' style='float: left;'></form></td>
</table>

</body>
</html>