
<?php include('server_admin.php') ?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<style>

.header img{
  margin-left: 100px;
}


.login-guru{
 
  width: 100%;

   
}
.login-guru h2 {
  width: 30%;
  margin: 15px auto 0px;
  color: white;
  background: black;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 5px 5px 5px 5px;
  padding: 1px;
  box-shadow: 3px 5px 3px 3px white;
}

.input-group input{
  width: 92%;
  border-radius: 3px;
  
}


  
   
  

</style>
<head>
  <title>Daftar Guru</title>
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
<div class="login-guru">
  <h2>ADMIN</h2>
  <form method="post" action="admin_login.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" style="border:1px solid">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1" style="border:1px solid">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="login">Login</button>
    </div>
    <div class="input-group">
    <p>
     
      <font size="1" color="gray"><pre>Copyright Reserved 2017 © Dream Synergy</pre> </font>
    </p>
    </div>
  </form>

  </body>
</html>