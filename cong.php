<!DOCTYPE html>
<html lang="en">
<head>
	<title>Search - Real Estate</title>
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
	<figure><img src="images/cong.jpg" alt=" "></figure>
	</section>
	</div>
	</div>
					</section>
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
