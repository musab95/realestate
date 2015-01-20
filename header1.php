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
				?>
<header class="header1">
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
					 <li><a href='logout.php'>(<?php echo strtoupper($uname);?>) Logout</a></li>
					 <?php
					 }
					 ?>
					<li><a href="contact.php">Contacts</a></li>
				</ul>
			</nav>
			<!-- faded slider begin -->
			
			<!-- faded slider end -->
		</div>
	</header>