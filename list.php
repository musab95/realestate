<!DOCTYPE html>
<html lang="en">
<head>
	<title>List Property - Real Estate</title>
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
						<h2>Sai Amrut Paradise</h2>
						<div class="wrapper">
							<figure><img src="images/20.gif" alt=""></figure>
							<h3>Sec 2,Karanjade, Panvel, Navi Mumbai </h3>
							<p>1/2 BHK Residential Apartments <br>
							   Price Staring @ Rs.4500/- per sq.ft.
							</p>
							<?php
						if(isset($_SESSION['s_id'])) {
						?>	
							<a href="view.php?Pname=Sai Amrut Paradise" class="button">Read More</a>
							<?php
							}
							else {
							?>
							<a href="login.php" class="button">Read More</a>
							<?php
							}
							?>
						</div>
					</article>
					
					<article>
						<h2>Greenwood Estate</h2>
						<div class="wrapper">
							<figure><img src="images/21.gif" alt=""></figure>
							<h3>New Panvel, Dist Raigad, Navi Mumbai </h3>
							<p>1/2/3 BHK Residential Apartments <br>
							   Price Staring @ Rs.2775/- per sq.ft
							</p>
							<?php
						if(isset($_SESSION['s_id'])) {
						?>	
							<a href="view.php?Pname=Greenwood Estate" class="button">Read More</a>
							<?php
							}
							else {
							?>
							<a href="login.php" class="button">Read More</a>
							<?php
							}
							?>
						</div>
					</article>
					
					<article>
						<h2>Ahuja L'Amor</h2>
						<div class="wrapper">
							<figure><img src="images/22.gif" alt=""></figure>
							<h3>Lokhandwala Extension, Andheri Mumbai </h3>
							<p>2/3 BHK Residential Apartments <br>
							   Price Staring @ Rs.1.5 Cr
							</p>
							<?php
						if(isset($_SESSION['s_id'])) {
						?>	
							<a href="view.php?Pname=Ahuja L'Amor" class="button">Read More</a>
							<?php
							}
							else {
							?>
							<a href="login.php" class="button">Read More</a>
							<?php
							}
							?>
						</div>
					</article>
					
					<article>
						<h2>Mayfair Hillcrest </h2>
						<div class="wrapper">
							<figure><img src="images/23.gif" alt=""></figure>
							<h3>Powai Ext. Vikhroli (W) </h3>
							<p>2 BHK Residential Apartments <br>
							   Price Staring @ Rs.1.55 Cr
							</p>
							<<?php
						if(isset($_SESSION['s_id'])) {
						?>	
							<a href="view.php?Pname=Mayfair Hillcrest" class="button">Read More</a>
							<?php
							}
							else {
							?>
							<a href="login.php" class="button">Read More</a>
							<?php
							}
							?>
						</div>
					</article>
					
					<article>
						<h2>Sudarshan Sky Garden</h2>
						<div class="wrapper">
							<figure><img src="images/24.gif" alt=""></figure>
							<h3>Ghodbunder Road, Thane (W) </h3>
							<p>2/2.5 BHK Residential Apartments <br>
							   Price Staring @ Rs.81.14 Lac
							</p>
							<?php
						if(isset($_SESSION['s_id'])) {
						?>	
							<a href="view.php?Pname=Sudarshan Sky Garden" class="button">Read More</a>
							<?php
							}
							else {
							?>
							<a href="login.php" class="button">Read More</a>
							<?php
							}
							?>
						</div>
					</article>
					
					<article>
						<h2>Balaji Garden</h2>
						<div class="wrapper">
							<figure><img src="images/25.gif" alt=""></figure>
							<h3>Taloja, Navi Mumbai </h3>
							<p>2/3 BHK Residential Apartments <br>
							   Price Staring @ Rs.64.25 Lac
							</p>
							<?php
						if(isset($_SESSION['s_id'])) {
						?>	
							<a href="view.php?Pname=Balaji Garden" class="button">Read More</a>
							<?php
							}
							else {
							?>
							<a href="login.php" class="button">Read More</a>
							<?php
							}
							?>
						</div>
					</article>
					
					<article>
						<h2>Orchid Residency</h2>
						<div class="wrapper">
							<figure><img src="images/26.gif" alt=""></figure>
							<h3>Harigram, Panvel, Navi Mumbai </h3>
							<p>1/1.5/2 BHK Residential Apartments <br>
							   Price Staring @ Rs.3700/- per sq.ft.
							</p>
							<?php
						if(isset($_SESSION['s_id'])) {
						?>	
							<a href="view.php?Pname=Orchid Residency" class="button">Read More</a>
							<?php
							}
							else {
							?>
							<a href="login.php" class="button">Read More</a>
							<?php
							}
							?>
						</div>
					</article>
					
					<article>
						<h2>Sathya Lifestyles</h2>
						<div class="wrapper">
							<figure><img src="images/28.gif" alt=""></figure>
							<h3>Palghar, Thane </h3>
							<p>1/2 BHK Residential Apartments <br>
							   Price Staring @ Rs.13.40 Lac
							</p>
						<?php
						if(isset($_SESSION['s_id'])) {
						?>	
							<a href="view.php?Pname=Sathya Lifestyles" class="button">Read More</a>
							<?php
							}
							else {
							?>
							<a href="login.php" class="button">Read More</a>
							<?php
							}
							?>
						</div>
					</article>
					
					<article>
						<h2>Green Meadows</h2>
						<div class="wrapper">
							<figure><img src="images/30.gif" alt=""></figure>
							<h3>Shirdon, Panvel </h3>
							<p>1 RK/1/2 BHK Residential Apartments <br>
							   Price Staring @ Rs.2950/- per sq.ft
							</p>
							<?php
						if(isset($_SESSION['s_id'])) {
						?>	
							<a href="view.php?Pname=Green Meadows" class="button">Read More</a>
							<?php
							}
							else {
							?>
							<a href="login.php" class="button">Read More</a>
							<?php
							}
							?>
						</div>
					</article>
					
					<article>
						<h2>Amar Harmony</h2>
						<div class="wrapper">
							<figure><img src="images/29.gif" alt=""></figure>
							<h3>Taloja, Navi Mumbai </h3>
							<p>1/2/3 BHK Residential Apartments <br>
							   Price Staring @ Rs.4550/- per sq.ft
							</p>
							<?php
						if(isset($_SESSION['s_id'])) {
						?>	
							<a href="view.php?Pname=Amar Harmony" class="button">Read More</a>
							<?php
							}
							else {
							?>
							<a href="login.php" class="button">Read More</a>
							<?php
							}
							?>
						</div>
					</article>				
				</section>
				<aside class="grid_6">
					<div class="prefix_1">
						<article>
							<!-- .box -->
							<div class="box">
								<h2>Find a Sell Associate</h2>
								<h3><a href="#">Sed ut perspiciatis unde</a></h3>
								<p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.</p> 
								<p>Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna.</p> 
							</div>
							<!-- /.box -->
						</article>
						<article class="last">
							<h2>Find Sales</h2>
							<h4>Nulla dsce feugiat malesuada odiobi nunc odio gravida at cursus nec luctusa loremaece nas trism dolor sit aconsecteetuer adipiscinges elitraesent.</h4>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.</p>
							<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem.</p>
							<a href="#" class="button">Read More</a>
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
