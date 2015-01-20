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
			<section id="mainContent" class="grid_10">
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
			
		
			$min=$_POST['min_price'];
			$max=$_POST['max_price'];
			$search=$_POST['city'];
			if(!empty($search)) {
			$sql = mysql_query("select * from $search where price BETWEEN $min AND $max");
			while ($row = mysql_fetch_array($sql)){
			?>
				
			<div id="container_ff"></div>
          <article>
				<h2><?php echo $row['rname']?></h2>
				<div class="wrapper">
				<figure><img src="images/<?php echo $row['rimg_name']?>" alt=" "></figure>
							<h3><?php echo $row['rcity']?> </h3>
							<p><?php echo $row['rbedroom']?> BHK <?php echo $row['descp']?> <br>
              Price Starting @ Rs.<?php echo $row['price']?> Lac							
							</p>
							<?php
						if(isset($_SESSION['s_id'])) {
						?>	
							<a href='view.php?Pname=<?php echo $row['rname']?>' class='button'>Read More</a>
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
				<?php
				}
				}
				else {
					echo  "<h2> Sorry macted no found </h2><br>
					<a href='index.php' class='button'>Go Back</a>";
					}
			?>
						
					
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
