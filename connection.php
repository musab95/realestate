<?php
$host="localhost";
$user="root";
$pass="musab786";
$con = mysql_connect("$host","$user","$pass");


if (!$con)
  {

echo "Error in DBConnect() = " . mssql_get_last_message();
  die('Could not connect: ' . mysql_error());

  }

?>
