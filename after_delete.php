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
				 
$ContohSQL = "DELETE FROM ibubapa 
			  WHERE nama_bapa = '".$_REQUEST ['nama_bapa']."' ";

$hasilQuery = mysql_query($ContohSQL);

echo "<table border='1|0'>";
echo "<th>Buang Maklumat Ibubapa/penjaga</th>";
echo "</table>";
echo "<br><br><br><br><br><br><br><br>";
echo "<table border='1' align='left'>";
echo "<tr>";
echo "<th>Maklumat ibubapa telah di buang.</th>";
echo "</table>";
echo "<br><br><br><br><br>";
echo "<table border='0' align='left'>";
echo "<tr>";
echo "<form action='index.php'><th><input type='submit' value='Back' style='float: left;'></th></form>";
echo "</table>";


if(!$hasilQuery)
{
echo "Query Gagal: " . mysql_error();
exit;
}
?>
</body>
</html>