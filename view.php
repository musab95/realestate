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
				
    <div id="container_ff"></div>
        <article>
        <div class="clearfix">
        				<div class="fleft">
        				<?php
	if(isset($_GET['Pname'])){
        $name = $_GET['Pname'];    
    } 
    $result = mysql_query('Select * From view Where pname="'.$name.'"'); 
    $row = mysql_fetch_array($result);
       ?>
						<h2><?php echo $row['pname'] ?></h2>
						<span class="span"> <?php echo $row['pcity'] ?> </span>
						</div>
						
						<div class="fright"> 
						<h2> Rs.<?php echo $row['pprice'] ?> </h2>						
						</div>
						</div>
					</article>
					<div class="wrapper">
							<figure><img src="images/<?php echo $row['pimg'] ?>" alt="" width="300"></figure>
							<ul class="list1">
							<li>
							<span class="span1"><?php echo $row['pdesc'] ?></span>
							</li>
							<li>
							<span class="span1"> Area: </span>
							<span class="span2"> <?php echo $row['area'] ?> Sq. Feet </span>
							</li>
							<li>
							<span class="span1"> Location: </span>
							<span class="span2"> <?php echo $row['pcity'] ?> </span>
							</li>
							<li class="last">
							<span class="span1">Bedroom(s):</span>
							<span class="span2"> <?php echo $row['pbedroom'] ?> BHK</span>
							</li>
							</ul>
							</div>
					<div id="container_ff"></div>
					<div class="wrapper">
					<h1>Overview</h1>
					<p><?php echo $row['poverview'] ?>.</p>
					
					
					<a href="payment.php?Pname=<?php echo $row['pname'] ?>" class="button" > Buy </a>
					 </div>	
					 
					 
					
					 
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
