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
<head>
	<style>

	.header img{
		margin-left: 100px;
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
    font-weight: bold;

	}

	.detail-group{
		margin: 0px;
		padding: 5px;
		text-align: left;

		
	}

	.detail{
    width: 70%;
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
    border-radius: 20px; 
    box-shadow: 2px 2px grey;
		
	}

	 legend{
		border: 2px solid black;
		margin: 10px;
    text-align: center;
    background-color: blue;
    color: white;
    width: 300px;

	}

  .title h1{
    border: 1px solid black;
    width: 70%;
    text-align: center;
    float: center;
    margin-bottom: 20px;
    margin-left: 20px;
    border-radius: 10px;
    background-color: darkcyan;
    color: white;
    font-weight: normal;
    font-size: medium;

  }	

  .detail-akuan{
    margin-left: 100px;
    width: 50%;
    
  }

  .detail-akuan form{
    font-weight: bold;

  }
	
	
	p{
		border: 0px solid black;
		width: 90%;
		text-align: justify;
		font-style: italic;
		margin-left: 10px;
		padding-top: 3px;
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
    <li><a href="#Petalaman">Peta Laman</a></li>
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
 		
 		<li><img src="icon/form.png" width="30%"><br><a href="daftar.php">Daftar</a></li>
 		<li><img src="icon/edit.png" width="30%"><br><a href="carian.php">Semak Status</a></li>
 		<li><img src="icon/panduan.png" width="30%"><br><a href="before_update.php">Kemaskini Maklumat</a></li>
 		
 		<li><img src="icon/signin.png" width="30%"><br><a href="daftar.php?logout='1'">Logout</a></li>
 		
 	</ul>
</div><br>

</div>

<div class="title">
  <h1>PERMOHONAN BANTUAN</h2>
</div>


<div class="detail">

<fieldset>
	<legend>BUTIR PELAJAR</legend>
<p> (i) Borang ini perlu diisi oleh ibubapa / penjaga murid / pelajar miskin (Warganegara Malaysia Sahaja) 
	 di sekolah rendah / menengah bantuan Kerajaan. 


<!--Butiran Pelajar -->

	<table>
    <form method="post" action="insert1.php" name="form1">
  <tr>
    <td><label>Nama Murid: </td>
    <td><input size ="111%" type="text" name="nama" required></label></td>
  </tr>
  
  <tr>
    <td><label>Warganegara: </td>
    <td><input size ="111%" type="text" name="warganegara" required></label></td>
  </tr>
  <tr>
    <td><label>Tarikh Lahir: </td>
    <td><input size ="111%" type="date" name="lahir" required></label></td> 
  </tr>
  <tr>
    <td><label>No. Mykid: </td>
    <td><input size ="111%" type="text" name="no_ic" required></label></td>  
  </tr>
  <tr>
    <td><label>Darjah: </td>
    <td><input size ="111%" type="text" name="darjah" required></label></td>  
  </tr>
  <tr>
    <td><label>Jantina: </td>
    <td><input type="radio" name="jantina" value="Lelaki" required> Lelaki 
    <input type="radio" name="jantina" value="Perempuan" required> Perempuan </label></td>
  </tr>
  <tr>
    <td><label>Alamat: </td>
    <td><input size ="111%" type="text" name="alamat"required></label></td>
  </tr>
  

  
</table><br>
</fieldset>

</div><br>

<div class="detail">
	<fieldset>
	<legend>BUTIR IBUBAPA</legend>
	<p>(i) Borang ini perlu diisi oleh ibubapa / penjaga murid / pelajar miskin (Warganegara Malaysia Sahaja) di sekolah rendah / menengah bantuan Kerajaan.<br>
(ii) Sila sertakan juga dokumen Sijil Lahir, Kad Pengenalan IbuBapa / Penjaga.<br> 
(iii) Permohonan ini akan dibatalkan sekiranya butiran yang diberikan tidak lengkap dan sahih.</p>

<table> 
  <tr>
    <td><label>Nama: </td>
    <td><input size ="111%" type="text" name="nama_bapa" required></label></td>  
  </tr>
  <tr>
    <td><label>No. Kad Pengenalan: </td>
    <td><input size ="111%" type="text" name="no_ic1" required></label></td>   
  </tr>
  <tr>
    <td><label>Pekerjaan: </td>
    <td><input size ="111%" type="text" name="pekerjaan" required></label></td>      
  </tr>
  <tr>
    <td><label>Pendapatan (RM): </td>
    <td><input size ="111%" type="text" name="pendapatan" required></label></td>   
  </tr>
  <tr>
    <td><label>Alamat: </td>
    <td><input size ="111%" type="text" name="alamat_bapa" required></label></td>   
  </tr>
  <tr>
    <td><label>No. Tel: </td>
    <td><input size ="111%" type="text" name="no_tel" required></label></td>    
  </tr>
  <tr>
    <td><label>Status: </td>
    <td><input type="radio" name="status" value="Berkahwin" required> Berkahwin
      <input type="radio" name="status" value="Duda" required> Duda
      <input type="radio" name="status" value="Ibu Tunggal" required> Ibu Tunggal </lable></td>
  </tr>
  <tr>
    <td><label>Tanggungan<pre>(masih bersekolah):</pre> </label></td>
    <td>  <select name="tang">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5+">5+</option>
  </select></td>
  </tr>
  <br>
</table><br>

  <tr>
   <td> <button type="submit" class="btn" name="reg_user">>>Daftar</button></td>
  </tr>

</form>
</form>
</div>

 </form>
 </table>
</fieldset>
</div>


<div id="container">
    <div id="main">

    </div>
</div>


<footer id="footer"> 
<font color="white">Copyright Reserved 2017 © Dream Synergy</font>

</footer>












</body>


</html>