<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<style>

.menu{
  border: 3px solid black;
  text-align: middle;
  width: 29%; 
  margin-right: 500px;
  border-radius: 5px 5px;
  box-shadow: 1px 1px 1px 1px yellow;
  
 }

 .menu ul{
  list-style-type: none;
  text-align: center;
  margin: 10px;
  padding: 20px;
  
 }

 .menu li {
  border: 1px solid black;
  margin: 10px;
  padding: 10px;
 }

 th img{
  margin-left: 100px;
 }
</style>
<head>
  <title>Sistem E-Bantuan</title>
</head>
<body>
  <div class="header">
  <table>
    <th><img src="icon/hehe.png" width="100%" height="100" ></th>
    </table>
 
 <!-- LIST TEPI BELAH KANAN START-->
 <div class="list">
  <ul>
    <li><a href="1st page.php"> Menu Utama</a></li> 
    <li><a href="admin_login.php"> Admin</a></li>
    
  </ul>
 </div>   
 </div>             
 <hr>   
 <br>

 <div class="menu">
 	<ul> <h1>Menu</h1>
 		<li><img src="icon/student.png" width="30%"><br><a href="login.php">Murid/Ibubapa</a></li>
 		<li><img src="icon/teacher.png" width="30%"><br><a href="login_guru.php">Guru</a></li>
 		
 	</ul>
</div>
</body>
</html>