<?php  include('server1.php'); ?>
<?php 
  if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = mysql_query($db, "SELECT * FROM info WHERE id=$id");

    if (count($record) == 1 ) {
      $n = mysql_fetch_array($record);
      $name = $n['name'];
      $address = $n['address'];
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Teacher: Accept/reject</title>
<style>
body {
    font-size: 19px;
}
table{
    width: 50%;
    margin: 30px auto;
    border-collapse: collapse;
    text-align: left;
}
tr {
    border-bottom: 1px solid #cbcbcb;
}
th, td{
    border: none;
    height: 30px;
    padding: 2px;
}
tr:hover {
    background: #F5F5F5;
}

form {
    width: 45%;
    margin: 50px auto;
    text-align: left;
    padding: 20px; 
    border: 1px solid #bbbbbb; 
    border-radius: 5px;
}

.input-group {
    margin: 10px 0px 10px 0px;
}
.input-group label {
    display: block;
    text-align: left;
    margin: 3px;
}
.input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
}
.btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
}
.edit_btn {
    text-decoration: none;
    padding: 2px 5px;
    background: #2E8B57;
    color: white;
    border-radius: 3px;
}

.del_btn {
    text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: #800000;
}
.msg {
    margin: 30px auto; 
    padding: 10px; 
    border-radius: 5px; 
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    width: 50%;
    text-align: center;
}


</style>
</head>

<?php
$LinkPangkalanData = mysql_connect("localhost", "root","");

                 if(!$LinkPangkalanData)
		 {
                 echo "Failed to detect database: " .
mysql_error();
                 exit;
                 }
 
                 $selectDB = mysql_select_db("crud");
                 if(!$selectDB)
                 {
                 echo "Failed to select database: " .
mysql_error();
                 exit;
                 }
       


$ContohSQL = "SELECT * FROM info WHERE name LIKE '".$_POST['nama']."%'";

                 $hasilQuery = mysql_query($ContohSQL);

                 if(!$hasilQuery)
                 {
                 echo "Query Failed: " . mysql_error();
                 exit;
                 }

while ($row = mysql_fetch_array($hasilQuery))


echo "<body>
<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Address</th>
      <th colspan='2'>Action</th>
    </tr>
  </thead>
  
    <tr>
      <td><?php echo .$row[name].; ?></td>
      <td><?php echo .$row[address].; ?></td>
      <td>
        <a href='index1.php?edit=<?php echo .$row[id].; ?>'class='edit_btn'>Terima</a>
      </td>
      <td>
        <a href='server1.php?del=<?php echo .$row[id].; ?>' class='del_btn'>Tolak</a>
      </td>
    </tr>
  <?php } ?>
</table>

    
  <form method='post' action='resultlatest.php'>
    <div class='input-group'>
      <label>Name</label>
      <input type='text' name='name' value=''>
    </div>
    <div class='input-group'>
      <label>Address</label>
      <input type='text' name='address' value=''>
    </div>
    <div class='input-group'>
      <button class='btn' type='submit' name='search' >Search</button>
    </div>
  </form>
</body>
</html>"
?>