<!DOCTYPE html>

<html>
<link rel="stylesheet" type="text/css" href="style.css">
<head>
	<style>

.header img{
	margin-left: 100px;
}
	.before_update{

		text-align: center;
		list-style-type: none;
		
		
	}

	.before_update li a {
		
		text-decoration: none;
		border: 1px solid black;
		box-shadow: 5px 5px red;
		
	}

	.before_update li a:hover{
		background-color: cyan;


	}

	.before_update ul{
		margin: 10px 10px 0px 0px;

	}

	.before_update h1{
		border: 1px solid black;
		width: 400px;
		margin-left: 300px;
	}


	}
	.detail h1{
		border: 3px solid lightblue;
		position: relative;
		margin-left: 400px;
		font-size: medium;
		width: 200px;
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
		border: 0px solid black;
		width: 70%;
		text-align: justify;
		font-style: italic;
		margin-left: 50px;
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
  </div><br>
 </div>              
 <hr><br>                             
<div class="menu">
 	<ul> <h1>Menu</h1>
 		<li><img src="icon/utama.png" width="30%"><br><a href="index.php">Utama</a></li>
 		<li><img src="icon/download.png" width="30%"><br><a href="download.php">Borang</a></li>
 		
 		<li><img src="icon/edit.png" width="30%"><br><a href="carian.php">Semak Permohonan</a></li>
 		
 		<li><img src="icon/edit.png" width="30%"><br><a href="before_update_delete.php">Menolak Permohonan</a></li>
 		<li><img src="icon/signin.png" width="30%"><br><a href="1st page.php?logout='1'">Logout</a></li>
 		
 	</ul>
</div>

<div class="before_update">
	<h1>MENOLAK PERMOHONAN</h1><br><br>
	<p> (i) Pastikan keputusan yang di buat adalah muktamad kerana maklumat yang ditetapkan sebagai gagal tidak dapat di undur kembali<br>
		(ii) Keputusan penolakan harus di peroleh dari mesyuarat</p>
	<br><br>

	<ul><li><font size="20"><a href="deleteformp.php">BATAL DI SINI</a></font></li><br><br><br>
		
	</ul>
</div>
	

</body>
<div id="container">
    <div id="main">

    </div>
</div>

<footer id="footer"> 
<font color="white">Copyright Reserved 2017 © Dream Synergy</font>

</footer>

</html>