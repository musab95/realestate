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


$sql="INSERT INTO creditcard(uname,cname,cnum,month,year,scode) 
VALUES
('$_POST[uname]','$_POST[cname]','$_POST[cnum]','$_POST[month]','$_POST[year]','$_POST[scode]')"; 

if (!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}
header('Location:cong.php');
mysql_close($con)
?> 