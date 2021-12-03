<!DOCTYPE html>

<html>
<link rel="stylesheet" type="text/css" href="style.css">
<head>
	<style>

	.header img{
		margin-left: 100px;
	}
	.detail{
		width: 700px;

	

	}

	.detail-group{
		margin: 0px;
		padding: 5px;
		text-align: left;

		
	}

	.detail input{

	}

	.detail label{
		display: block;
		text-align: left;

	}

	.detail form{
		width: 500px;
		position: absolute;
		margin-left: 250px;
	}
	
	fieldset h3{
		margin-top: 0px;
	}
	
	p{
		border: 3px solid black;
		width: 50%;
	}
	
	*{
  margin: 0;
  padding: 0;
}

html, body{
  height: 100%
}

#container{
  min-height: 100%;
}

#main {
  overflow: auto;
  padding-bottom: 100px;
}

#footer{
  background-color: #000;
  position: relative;
  height: 100px;
  margin-top: -100px;
  clear: both;
}		

	</style>
<body>

	<div class="header">
  <table>
    <th><img src="icon/hehe.png" width="100%" height="100" ></th>
    </table>
 
 <!-- LIST TEPI BELAH KANAN START-->
 <div class="list">
  <ul>
  	<li><a href="#petalaman.php">Peta Laman</a></li>    
    <li><a href="#Peranan.php">Peranan</a></li>
    <li><a href="#FAQ.php">Soalan Lazim</a></li>
    <li><a href="index.php">Utama</a></li>
    </ul>
 </div>   
 </div><br>             
 <hr>                             
<div class="menu">
 	<ul> <h1>Menu</h1>
 		<li><img src="icon/utama.png" width="30%"><br><a href="index.php">Utama</a></li>
 		<li><img src="icon/download.png" width="30%"><br><a href="download.php">Borang</a></li>
 		<li><img src="icon/form.png" width="30%"><br><a href="daftar.php">Daftar</a></li>
 		<li><img src="icon/edit.png" width="30%"><br><a href="carian.php">Semak Status</a></li>
 		<li><img src="icon/panduan.png" width="30%"><br><a href="before_update">Kemaskini Maklumat</a></li>
 		<li><img src="icon/edit.png" width="30%"><br><a href="before_update_delete.php">Buang Maklumat</a></li>
 		<li><img src="icon/signin.png" width="30%"><br><a href="1st page.php?logout='1'">Logout</a></li>
 		
 	</ul>
</div>
<?php 

mysql_connect("localhost","root","");
mysql_select_db("download");
$res = mysql_query("select * from table1");

echo "Sila pastikan anda muat turun fail yang betul.<br><br>";
echo "<table border='1'>";
while($row = mysql_fetch_array($res))
{ 
	echo "<tr>";
	echo "<td>"; echo $row["name"]; echo"<td>";
	echo "<td>";?><a href="<?php echo $row["path"]; ?>" >Download </a> <?php




	echo "</tr>";

}

echo "</table>";

?>

<div id="container">
    <div id="main">

    </div>
</div>

<footer id="footer"> 
<font color="white">Copyright Reserved 2017 © Dream Synergy</font>

</footer>
