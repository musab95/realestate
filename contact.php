<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact Us - RealEstate</title>
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
				<section id="mainContent" class="grid_10">
					<article>
						<h2>Primary Contacts</h2>
						<div class="wrapper">
							<figure><img src="images/7page-img1.jpg" alt=""></figure>
							<dl class="address">
								<dt>8901 Marmora Road,<br />
								Glasgow, D04 89GR.</dt>
								<dd><span>Freephone:</span>+1 800 559 6580</dd>
								<dd><span>Telephone:</span>+91 9867076092</dd>
								<dd>E-mail: <a href="#">talktomusab@gmail.com</a></dd>
							</dl>
							<dl class="address last">
								<dt>9863 - 9867 Mill Road,<br /> 
								Cambridge, MG09 99HT.</dt>
								<dd><span>Freephone:</span>+1 800 559 6580</dd>
								<dd><span>Telephone:</span>+91 959 603 6035</dd>
								<dd>E-mail: <a href="#">mail@demolink.org</a></dd>
							</dl>
							<a href="#" class="button">Read More</a>
						</div>
					</article>
					<article class="last">
							<h2>Contact Form</h2>
							<form action="" >
								<fieldset>
								<table>
								<tr>
           <td><div class="form_row"><h4>Name: </h4></div></td><td><div class="form_row"><input type="text" name="firstname" value="" /></div></td>
					   </tr>
							<tr>
           <td><div class="form_row"><h4>E-mail: </h4></div></td><td><div class="form_row"><input type="text" name="firstname" value="" /></div></td>
					   </tr>
							<tr>
           <td><div class="form_row"><h4>Message: </h4></div></td><td><div class="form_row"><textarea></textarea></div></td>
					   </tr>
					   </table>
									<div class="wrapper"><a href="#" onClick="document.getElementById('contacts-form').submit()" class="button">Submit</a> &nbsp; &nbsp; &nbsp; <a href="#" onClick="document.getElementById('contacts-form').submit()" class="button">Reset</a></div>
								</fieldset>
							</form>
						</article>
				</section>
				<aside class="grid_6">
					<div class="prefix_1">
						<article>
							<!-- .box -->
							<div class="box">
								<h2>How To Find Us</h2>
								<h3><a href="#">Donec in velit vel ipsum auctor pulvinar. Proin ullamcorper.</a></h3>
								<p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. </p>
								<a href="#" class="button">Read More</a>
							</div>
							<!-- /.box -->
						</article>
						
					</div>
				</aside>
			</div>
		</div>
	</section>
	<!-- footer -->
	<?php
			include('footer.php');
			?>
	<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>