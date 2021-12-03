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
<form name="buang_form" method="post" action="resultdelete.php">
<table border="1|0">
<th>Batal Maklumat Permohonan</th>
</table>
<br><br>
<table align="left">
 <tr>
    <th>Nama Ibubapa/Penjaga</th>
    <td><input type="text" name="nama_bapa"></td>
  </tr>
  <tr>
    <th>Pekerjaan</th>
    <td><input type="text" name="pekerjaan"></td>
  <tr>
    <th>No. Kad Pengenalan</th>
    <td><input type="text" name="no_ic1"></td>
  </tr>
  <tr>
    <th>Status</th>
    <td><input type="text" name="status"></td>
  </tr>
  <tr>
    <th>Pendapatan</th>
    <td><input type="text" name="pendapatan"></td> 
  </tr>
  <tr>
    <th>Alamat Majikan</th>
    <td><input type="text" name="alamat_bapa"></td>
  </tr>
  <tr>
    <th>Tanggungan</th>
    <td><input type="text" name="tanggungan"></td>
  </tr>
  <br>
  <tr>
  <table align="left">
    <tr>
  <td><input type="submit" value="Search" style="float: left;"></td>
  </tr>

 

</table>
</table>

</body>
</html>