
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
<link rel="stylesheet" type="text/css" href="style.css">
<title>carian</title>
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

.detail h1{
		border: 3px solid lightblue;
		position: relative;
		margin-left: 400px;
		font-size: medium;
		width: 200px;
	}
	.detail table{
		width: 800px;
		position: relative;
		margin-left: 10px;
	}

	.detail td {
		padding: 3px;

	}

	.detail-group{
		margin: 0px;
		padding: 5px;
		text-align: left;

		
	}

	.detail{
		margin-left: 20px;


	}

	
	}

	.detail form{
		width: 500px;
		position: absolute;
		margin-left: 250px;
	}

	 fieldset {
		width: 50%;
		
	}

	 legend{
		border: 1px solid black;
		margin: 10px;
    text-align: center;
    background-color: blue;
    color: white;

	}

	p{
		border: 0px solid black;
		width: 90%;
		text-align: justify;
		font-style: italic;
		margin-left: 10px;
		padding-top: 3px;
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
    <th><img src="icon/hehe.png"  width="100%"height="100" ></th>
    </table>
 
 <!-- LIST TEPI BELAH KANAN START-->
 <div class="list">
  <ul>
  	<li><a href="#petalaman.php">Peta Laman</a></li>
  	<li><a href="#FAQ.php">Soalan Lazim</a></li>     
    <li><a href="#Peranan.php">Peranan</a></li>
    <li><a href="index.php">Utama</a></li>
       
  </ul>
 </div><br>   
 </div>            
 <hr><br>                             
<div class="menu">
 	<ul> <h1>Menu</h1>
 		<li><img src="icon/utama.png" width="30%"><br><a href="index.php">Utama</a></li>
 		
 		<li><img src="icon/form.png" width="30%"><br><a href="daftar.php">Daftar</a></li>
 		<li><img src="icon/edit.png" width="30%"><br><a href="carian.php">Semak Status</a></li>
 		<li><img src="icon/panduan.png" width="30%"><br><a href="before_update.php">Kemaskini Maklumat</a></li>
 		
 		<li><img src="icon/signin.png" width="30%"><br><a href="carian	.php?logout='1'">Logout</a></li>
 		
 	</ul>
</div>





<form name="pendaftaran" method="post" action="result.php">

<table>
<th>Semak status</th>
</table>
<br><br>
<table align="center">
  <tr>
  	<th>No. Mykid:<font color=red>*</font></th>
  	<td><input type="text" name="ic_no" required></td>
  </tr>
  <tr>
  	<th>ID Permohonan:<font color=red>*</font></th>
  	<td><input type="text" name="id_mohon" required></td>
  </tr>
</table>
<br><br><br><br><br><br>
<table align="right">
  <tr>
	<td><button type="submit" class="btn" name="login_user">Cari</button></td>
  </tr>
</table></form>






<div id="container">
    <div id="main">

    </div>
</div>

<footer id="footer"> 
<font color="white">Copyright Reserved 2017 © Dream Synergy</font>

</footer>







</body>


</body>


</html>