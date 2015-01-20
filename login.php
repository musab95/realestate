<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login - Real Estate</title>
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
				<section id="mainContent" class="grid_16">
				<div style="width:45%;float:left;padding-left:20px;">
<table cellspacing="0" cellpadding="0" border="0" align="center">
<tbody>
<tr>
<td class="bigtext blue" style="text-align:justify;" colspan="3">
<b>RealEstate.com is commited to provide you with the latest information and facts related to property buying & selling in india.</b>
</td>
</tr>
<tr>
<td width="10%">
<img title="Building" alt="Building" src="images/buil.jpg">
</td>
<td width="5%"> </td>
<td valign="top" align="left">
<table width="100%" cellspacing="0" cellpadding="0" border="0" align="left">
<tbody>
<tr>
<td class="bigtext " align="left" style="height:20px;">
<h1>Benefits of Registration</h1>
</td>
</tr>
<tr>
<td class="normaltext " align="left" style="height:34px;">
<h4>  Search Property</h4>
</td>
</tr>
<tr>
<td class="normaltext " nowrap="" align="left" style="height:34px;">
 <h4> Post Property Requirement</h4>
</td>
</tr>
<tr>
<td class="normaltext " align="left" style="height:34px;">
<h4>  Get Regular Updates</h4>
</td>
</tr>
<tr>
<td class="normaltext " align="left" style="height:34px;">
<h4>List Your Property</h4>
</td>
</tr>
<tr>
<td class="normaltext" align="left" style="padding-top:0px;*padding-top:3px;">
<a  class="blue" href="reg.php" ><span style="font-size:15px;" >Register Now >></span></a>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td colspan="3"> </td>
</tr>
</tbody>
</table>
					</div>

<form id="frm_login" action="log.php" method="post" name="frm_login">
<div class="loginform">
<h2>Login Now</h2>
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<ul>
<li>
<div class="form_row">
<label>Username</label>
<input type="text" value="" name="user" />
</div>
</li>
<li>
<div class="form_row">
<label>Password</label>
<input type="password" value="" name="pass" />
</div>
</li>
<li class="forgettxt">
<div class="form_row">
<a  class="blue" href="forgot.php" >Forgot your password?</a>
</div>
</li>
<li>
<div class="form_row">
<input type="submit" value="Login" name="submit"   />
</div>
</li>
</ul>
</div>
</form>

					</div>
					</div>
					
				</section>
				</section>
	<!-- footer -->
	<?php
			include('footer.php');
			?>
	<script type="text/javascript">
		$(function(){
			//accordion
			$(".accordion dt").toggle(function(){
				$(this).next().slideDown();
			}, function(){
				$(this).next().slideUp();
			});
		})
	</script>
	<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
