<?php
$host="localhost";
$user="root";
$pass="root";
$con = mysql_connect("$host","$user","$pass");


if (!$con)
  {

echo "Error in DBConnect() = " . mssql_get_last_message();
  die('Could not connect: ' . mysql_error());

  }



mysql_select_db("realestate", $con);

$find=$_POST['typee'];
if($find=='owner'){
$sql="INSERT INTO reg(typee,firstname,email,password,city,mobile) 
VALUES
('$_POST[typee]','$_POST[firstname]','$_POST[email]','$_POST[password]','$_POST[city]','$_POST[mobile]')"; 
}
else
{
$sql="INSERT INTO reg(typee,firstname,email,password,city,mobile) 
VALUES
('$_POST[typee]','$_POST[firstname]','$_POST[email]','$_POST[password]','$_POST[city]','$_POST[mobile]')"; 
}
if (!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}
header('Location:login.php');
mysql_close($con)
?> 
