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

  td.col1 { width: 8em;}
  th.col2 { width: 8em;}

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



       


$ContohSQL = "SELECT * FROM permohonan JOIN student ON permohonan.no_ic=student.no_ic JOIN parent ON permohonan.no_ic1=parent.no_ic1";

                 $hasilQuery = mysql_query($ContohSQL); 

                 if(!$hasilQuery)
                 {
                 echo "Query Failed: " . mysql_error();
                 exit;
                 }




echo "<table border='1|0' align='center'>
      <th>LAPORAN BANTUAN</th>
      </table>
<br><br>
     <table border=1|0 align=center>

      <tr>
       <th class='col2'>NAMA PELAJAR</th>
       <th class='col2'>KELAS</th>
       <th class='col2'>NAMA IBUBAPA</td></th>
       <th class='col2'>PENDAPATAN</th>
       <th class='col2'>TANGUNGGAN</th>
       <th class='col2'>STATUS PERMOHONAN</td></th>
     </tr>
  </table>";
   
   while ($row = mysql_fetch_assoc($hasilQuery)){
        $name_student= $row ['nama'];
        $class= $row ['darjah'];
        $name_parent= $row ['nama_bapa'];
        $pendapat= $row ['pendapatan'];
        $tanggung= $row ['tang'];
        $status= $row ['status_mohon'];
   
echo "<table border=1|0 align=center>

     <tr>
        <td class='col1'>$name_student</td>
        <td class='col1'>$class</td>
        <td class='col1'>$name_parent</td>
        <td class='col1'>$pendapat</td>
        <td class='col1'>$tanggung</td>
        <td class='col1'>$status</td>
       </tr>
    </table>";
  
   }

mysql_free_result($hasilQuery);

?>

<br><br>

<center><button onclick="myFunction()">Print </button></center>

<script>
function myFunction() {
    window.print();
}
</script>

<br><br>

<form action='index_guru.php'><input type='submit' name='submit' value='Back' style='float: center;'></form>

</body>
</html>