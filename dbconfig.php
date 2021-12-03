<?php

$server = "localhost";
$database = "daftar";
$user = "root";
$password = "";

$conn1 = mysql_connect($server, $user, $password);

if (!$conn1)
        {
              die('Could not: '
.mysql_error());
        }

mysql_select_db($database, $conn1);

?>