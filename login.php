

<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<style>

.header img{
  margin-left: 100px;
}

.login-murid{
  
  width: 100%;
  
 

}
.login-murid h2 {
  width: 30%;
  margin: 15px auto 0px;
  color: black;
  background: red;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 5px 5px 5px 5px;
  padding: 1px;
  box-shadow: 3px 5px 3px 3px white;
}


.input-group input{
  border: 1px solid black;
  width: 92%;
  border-radius: 3px;
}
  
   
  

</style>

<head>
  <title>Registration system PHP and MySQL</title>
</head>
<body>
  <div class="header">
  <table>
    <th><img src="icon/hehe.png" width="100%" height="100" ></th>
    </table>
 
 <!-- LIST TEPI BELAH KANAN START-->
 <div class="list">
  <ul>
    <li><a href="1st page.php">Menu Utama</a></li>
    
  </ul>
 </div>   
 </div>             
 <hr>   
 <br>
 <!-- START KOTAK LOGIN -->
 <div class="login-murid">                     
    <h2>MURID/IBUBAPA</h2>
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<td><label>Username:</label></td>
      <tr><input size="100%" type="text" name="username"></tr>
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
    <div class="input-group">
  	<p>
  		Belum mendaftar? <a href="register.php">Daftar</a>
      <font size="1" color="gray"><pre>Copyright Reserved 2017 © Dream Synergy</pre> </font>
  	</p>
    </div>
  </form>
</div>
</div>

</div>
</body>
</html>