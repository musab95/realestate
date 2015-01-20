
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
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
$(document).ready(function() {
$("[rel='popover']").popover({
placement : 'top', // top, bottom, left or right
title : 'This is my Title', 
html: 'true', 
content : '<div id="popOverBox">Your Text Here</div>'
});
});
</script>
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
			include('header.php');
			?>
	
	<!-- content -->
	<section id="content">
		<div class="container_16">
			<div class="clearfix">
				<section id="mainContent" class="grid_10">
				<?php
						if(isset($_SESSION['s_id'])) {
							
						?>	
				<div class="fleft"> <h1>Wellcome  &nbsp; <?php echo  strtoupper($row['firstname']);?></h1></div>
				<?php
				}
				?>
				<div id="container_search">
					<h2><font color="#2e88b9">Find a property</font></h2>
					 <form method="post" action="search.php">
					 <fieldset>
        	<div class="left_column">
                <div class="form_row"> <label>City: </label><input type="text" name="city" value="" /> </div>
                <div class="form_row"> <label>Sate / Province: </label>
                	<select name="state"><option>Select one...</option><option>Ahmdabad</option><option>Maharastra</option><option>AR</option><option>AZ</option><option>CA</option><option>CO</option><option>CT</option><option>DC</option><option>DE</option><option>FL</option><option>GA</option><option>HI</option><option>ID</option><option>IA</option><option>IL</option><option>IN</option><option>KS</option><option>KY</option><option>LA</option><option>MA</option><option>MD</option><option>ME</option><option>MI</option><option>MO</option><option>MN</option><option>MS</option><option>MT</option><option>NC</option><option>ND</option><option>NE</option><option>NH</option><option>NJ</option><option>NM</option><option>NY</option><option>NV</option><option>OH</option><option>OK</option><option>OR</option><option>PA</option><option>RI</option><option>SC</option><option>SD</option><option>TN</option><option>TX</option><option>UT</option><option>VA</option><option>VT</option><option>WA</option><option>WI</option><option>WV</option><option>WY</option></select>
                </div>
                <div class="form_row"> <label>Zip / Postal code </label><input type="text" name="country" value="" /> </div>
            </div>
            <div class="right_column">
	                <div class="form_row">
                    	<label>Price: </label>
                        <select name="min_price">
                            <option value="1">minimum</option>
                            <option value="50000">Rs.50000</option>
                            <option value="100000">Rs.100000</option>
                            <option value="150000">Rs.150000</option>
                           	<option value="200000">Rs.200000</option>
                            <option value="250000">Rs.250000</option>
                            <option value="300000">Rs.300000</option>
                            <option value="350000">Rs.350000</option>
                        </select>
                		<label>To: </label>
                        <select name="max_price">
                            <option value="1000000000">maximum</option>
                            <option value="100000">Rs.100000</option>
                            <option value="200000">Rs.200000</option>
                            <option value="400000">Rs.400000</option>
                           	<option value="600000">Rs.600000</option>
                            <option value="800000">Rs.800000</option>
                            <option value="900000">Rs.900000</option>
                        </select>
                   </div>
               	<div class="form_row"> <label>Bedroom: </label>
                	<select name="bedroom">
                    	<option>minimum</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form_row"> <label>Bathroom: </label>
                	<select name="bathroom">
                    	<option>minimum</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form_row">
                		<div class="wrapper"><input type="submit" value="Search" name="submit" class="button"  /></div>
                </div>
            </div>
          </fieldset>  
        </form>
					</div>
    <div id="container_ff"></div>
        <article>
						<h2>Songbirds</h2>
						<div class="wrapper">
							<figure><img src="images/12.gif" alt=""></figure>
							<h3>Prabhadevi, Mumbai </h3>
							<p>1/2/3 BHK Residential Apartments <br>
              Price Starting @ Rs.31.54 Lac							
							</p>
							<?php
						if(isset($_SESSION['s_id'])) {
						?>	
							<a href="view.php?Pname=Songbirds" class="button">Read More</a>
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
						<h2>Auris Serenity</h2>
						<div class="wrapper">
							<figure><img src="images/11.gif" alt=""></figure>
							<h3>Malad, Mumbai </h3>
							<p>2/3/4 BHK Residential Apartments <br>
						     Price Starting @ Rs.1.52 Cr						
							</p>
							<?php
						if(isset($_SESSION['s_id'])) {
						?>	
							<a href="view.php?Pname=Auris Serenity" class="button">Read More</a>
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
						<h2>Shikara Palace Garden</h2>
						<div class="wrapper">
							<figure><img src="images/13.gif" alt=""></figure>
							<h3>Panvel, Vihigar, Navi Mumbai </h3>
							<p>1/2 BHK Residential Apartments <br>
              Price Starting @ Rs. 3750/- per sq. ft.							
							</p>
							<?php
						if(isset($_SESSION['s_id'])) {
						?>	
							<a href="view.php?Pname=Shikara Palace Garden" class="button">Read More</a>
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
						<h2>Kanakia Levels</h2>
						<div class="wrapper">
							<figure><img src="images/14.gif" alt=""></figure>
							<h3>Malad (East), Mumbai </h3>
							<p>3/4 BHK Residential Apartments <br>
             Price Starting @ Rs. 1.55 Cr							
							</p>
							<?php
						if(isset($_SESSION['s_id'])) {
						?>	
							<a href="view.php?Pname=Kanakia Levels" class="button">Read More</a>
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
								<h2>Featured Projects</h2>
								
								<div class="wrapper"><figure class="alt"><img src="images/2page-img1.jpg" alt=""></figure></div>
								<h3 class="aligncenter">Bhavya Height</h3>
								<div class="wrapper"><figure class="alt"><img src="images/3page-img6.jpg" alt=""></figure></div>
								<h3 class="aligncenter">Bhavya Height</h3>
								<div class="wrapper"><figure class="alt"><img src="images/3page-img7.jpg" alt=""></figure></div>
								<h3 class="aligncenter">Bhavya Height</h3>
								<div class="wrapper"><figure class="alt"><img src="images/5page-img1.jpg" alt=""></figure></div>
								<h3 class="aligncenter">Bhavya Height</h3>
								<div class="wrapper"><figure class="alt"><img src="images/3page-img3.jpg" alt=""></figure></div>
								<h3 class="aligncenter">Bhavya Height</h3>
								<div class="wrapper"><figure class="alt"><img src="images/3page-img4.jpg" alt=""></figure></div>
								<h3 class="aligncenter">Bhavya Height</h3>
             <div class="wrapper"><figure class="alt"><img src="images/3page-img5.jpg" alt=""></figure></div>
								<h3 class="aligncenter">Bhavya Height</h3>
							
							</div>
         
							<!-- /.box -->
						</article>
			
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
