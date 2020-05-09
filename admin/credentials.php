<?php
//Database credentials

if (process.env.JAWSDB_URL) {
  connection = mysql_createConnection(process.env.JAWSDB_URL)
}else {
  $host = "localhost";
  $user = "root";
  $password = "";
  $database = "restaurant";
}


?>
