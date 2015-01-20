<?php
session_start();
$emp=$_SESSION['s_id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Real Estate</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/grid.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
	<script type="text/javascript" src="js/cufon-yui.js"></script>
	<script type="text/javascript" src="js/Myriad_Pro_italic_400-Myriad_Pro_italic_600.font.js"></script>
	<script type="text/javascript" src="js/cufon-replace.js"></script>	
	<script type="text/javascript" src="js/jquery.faded.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	
	<!--[if lt IE 7]>
		<link rel="stylesheet" href="css/ie/ie6.css" type="text/css" media="screen">
		<script type="text/javascript" src="js/ie_png.js"></script>
		<script type="text/javascript">
				ie_png.fix('.png, .logo, .extra-banner');
		</script>
	<![endif]-->
	<!--[if lt IE 9]>
		<script type="text/javascript" src="js/html5.js"></script>
	<![endif]-->
	<script language="JavaScript" type="text/JavaScript">
function formValidationn()  
{  

 var x = document.forms["myform"]["cname"].value;
 var umob = document.forms["myform"]["mobile"].value; 
    
    if (x == null || x == "") {
        alert("First name must be filled out");
        return false;
    }
    
  
 if(ucity=="Default")
	{
		alert("Please select City ");
		return false;
	}	
	if(umob=="")
	{
		alert("Please Enter Mobile no. ");
		return false;
	}
	if (umob.length < 10)
{
alert("Please Enter Right Mobile no.");
return false;
}
}  


	</script>
</head>
<body>
	<!-- header -->
<?php
			include('header1.php');
			?>
	
	<!-- content -->
	<section id="content">
		<div class="container_16">
			<div class="clearfix">
				<section id="mainContent" class="grid_10">
				 <?php
	if(isset($_GET['Pname'])){
        $name = $_GET['Pname'];    
    } 
    $result = mysql_query('Select * From view Where pname="'.$name.'"'); 
    $row = mysql_fetch_array($result);
       ?>  
        <article>
        <h2>Payment Summery</h2>
        <p>Please review the following details for this transcation.</p>
			</article>
			<table class="table">
			<form method="post" action="pay.php" onSubmit="return formValidationn()" name="myform" >
			<tr>
			<th>Description</th>	
			<th>Price</th>			
			</tr>
			<tr>
			<td><?php echo $row['pname'] ?></td>	
			<td style="text-align: right;"> Rs.<?php echo $row['pprice'] ?> </td>
			</tr>
			<tr>
			<td style="text-align: right;">Total</td>	
			<td style="text-align: right;"> Rs.<?php echo $row['pprice'] ?> </td>
			</tr>
			</table>
			<?php
					session_start();
					$studentid = $_SESSION['s_id'];


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
	
				$sql = "SELECT * from reg where id='{$studentid}'";
				$result = mysql_query($sql,$con);
				$row=mysql_fetch_array($result);
				$uname = $row['firstname'];
				
				$sql1 = "SELECT * from creditcard where uname = '$uname'" ;
				$result1 = mysql_query($sql1,$con);
				$count = mysql_num_rows($result1);
				if($count==1)
 					{
 					?>
				<div id="container_ff"></div>
				<a href="cong.php" class="button"> Pay </a>
				<?php
				}
				else {
				?>
				<h2>Billing Information</h2>
        <p>Enter your payment details below.</p>	
        
        <div id="container_ff"></div>
        
        <table class="tableq1" >
        <tr>
			<td><span class="span"> Credit Card: </span></td>  
			<td style="text-align: right;"><input type="text" value="" name="cname"> 
				<p>(Name)</p></td>      
        </tr>
        <tr>
			<td></td>   
			<td style="text-align: right;"><input type="text" value="" name="cnum"> 
				<p>(Credit Card Number)</p></td>       
        </tr>
        <tr>
			<td>			</td>     
			<td style="text-align: right;">
			<select name='month'><option value="Default" >Month</option><option value=1>1</option><option value=2>2</option><option value=3>3</option><option value=4>4</option><option value=5>5</option><option value=6>6</option><option value=7>7</option><option value=8>8</option><option value=9>9</option><option value=10>10</option><option value=11>11</option><optionvalue=12>12</option></select>
			&nbsp; / &nbsp;			
			<select name='year'><option value="Default" >Year</option><option value=2010>2010</option><option value=2011>2011</option><option value=2012>2012</option><option value=2013>2013</option><option value=2014>2014</option><option value=2015>2015</option><option value=2016>2016</option><option value=2017>2017</option><option value=2018>2018</option><option value=2019>2019</option><option value=2020>2020</option></select>
			<p>(Expiration Month &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Year)</p>			
			</td>
			</tr>
        <tr>
			<td></td>   
			<td style="text-align: right;"><input type="text" value="" size="5" name="scode"> 
				<p>(Security Code)</p></td>       
        </tr>	
        <tr>
			<td><input type="hidden" value="<?php echo $row['firstname']?>" name="uname"></td>   
			<td style="text-align: center;"><input type="submit" value="Pay" class="button" name="submit"   /></td>			    
        </tr>	
        </form>		
		  </table>
			<?php
			}
			?>
				</section>
				
				
		</div>
		</div>
	</section>
	<!-- footer -->
	<?php
			include('footer.php');
			?>
	<script type="text/javascript">
		Rs.(function(){
			//accordion
			Rs.(".accordion dt").toggle(function(){
				Rs.(this).next().slideDown();
			}, function(){
				Rs.(this).next().slideUp();
			});
		})
	</script>
	<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
