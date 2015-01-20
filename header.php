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
				
				?>
<header>
		<div class="container_16">
			<div class="logo">
				<h1><a href="index.php"><strong>Real</strong> Estate</a></h1>
			</div>
			<nav>
				<ul>
					<li><a href="index.php" class="current">Home</a></li>
					<li><a href="list.php">List Property</a></li>
					<?php
						if(!isset($_SESSION['s_id'])) {
						?>	
					 <li><a href='reg.php'>Register Now</a></li>				
					 <li><a href='login.php'>Login</a></li>
					 <?php
					 }
					 else {
					 	?>
					 <li><a href='logout.php'>(<?php echo strtoupper($row['firstname']);?>) Logout</a></li>
					 <?php
					 }
					 ?>
					<li><a href="contact.php">Contacts</a></li>
				</ul>
			</nav>
			<!-- faded slider begin -->
			<div id="faded">
				<div class="rap">
					<a href="#"><img src="images/big-img1.jpg" alt="" width="571" height="398"></a>
					<a href="#"><img src="images/big-img2.jpg" alt="" width="571" height="398"></a>
					<a href="#"><img src="images/big-img3.jpg" alt="" width="571" height="398"></a>
				</div>
				<ul class="pagination">
					<li>
						<a href="#" rel="0">
							<img src="images/f_thumb1.png" alt="">
							<span class="left">
								Villa<br />
								2007 year<br />
								5000 sq.ft
							</span>
							<span class="right">
								Brick, glass<br />
								3 beds<br />
								2 baths
							</span>
						</a>
					</li>
					<li>
						<a href="#" rel="1">
							<img src="images/f_thumb2.png" alt="">
							<span class="left">
								Villa<br />
								2009 year<br />
								3500 sq.ft
							</span>
							<span class="right">
								Brick, glass<br />
								5 beds<br />
								3 baths
							</span>
						</a>
					</li>
					<li>
						<a href="#" rel="2">
							<img src="images/f_thumb3.png" alt="">
							<span class="left">
								Villa<br />
								2010 year<br />
								4200 sq.ft
							</span>
							<span class="right">
								Brick, glass<br />
								4 beds<br />
								3 baths
							</span>
						</a>
					</li>
				</ul>
				<img src="images/extra-banner.png" alt="" class="extra-banner">
			</div>
			<!-- faded slider end -->
		</div>
	</header>