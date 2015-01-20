<?php
session_start();
$message="";
$host="localhost";
$user="root";
$pass="root";
$con = mysql_connect("$host","$user","$pass");
if (!$con)
  {

echo "Error in DBConnect() = " . mssql_get_last_message();
 

  }
mysql_select_db("realestate", $con);
$myusername=$_POST['user'];
$mypassword=$_POST['pass'];

//if($myusername){

 $mysql = "SELECT * FROM reg WHERE firstname='$myusername' and password='$mypassword'";

 $result = mysql_query($mysql) or die("cannot execute query");

 $count = mysql_num_rows($result);
$row = mysql_fetch_array($result);
  
  $_SESSION['s_id'] = $row['id'];
 if($count==1)
 {
 //session_register('username');
	header("location:index.php"); 
}
else	header("location:login.php");
	


/*else {

$mysql = "SELECT * FROM regg WHERE firstname='$myusername' and password='$mypassword'";

 $result = mysql_query($mysql) or die("cannot execute query");

 $count = mysql_num_rows($result);
$row = mysql_fetch_array($result);
  
  $_SESSION['s_id'] = $row['id'];
 if($count==1)
 {
 //session_register('username');
	header("location:list.php"); // put your home page neme here
}
else
	header("location:login.php");
}*/

 

 ?>

