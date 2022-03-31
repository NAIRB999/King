<?php 
	session_start();
	include_once('connect.php');

 ?>
<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body> -->
	<!-- Header -->
			<header id="header">
				<nav class="left">
					<a href="#menu"><span>Menu</span></a>
				</nav>
				<a href="index.php" class="logo"><img src="images/kinglogo.png" width="50" height="50"></a>
				<nav class="right">
					<a href="studentlogin.php" class="button alt">Log in</a>
				</nav>
			</header>

		<!-- Menu -->
			<nav id="menu">
				<ul class="links">
					<?php 
						if(isset($_SESSION['adminid']) && !empty($_SESSION['role']))
						{
							$r=$_SESSION["role"];
						?>

								<li><a href="index.php">Home</a></li>
								<li><a href="logout.php">Logout</a></li>

							<?php if($r=="Marketing Manager")
							{
							 ?>
							 	<li><a href="contributionlist2.php">View Current Contributions</a></li>
							<?php
							}
							?>


							<?php if($r=="Marketing Coordinator")
							{
							 ?>
							 	<li><a href="documenttitleEntry.php">Document Title Entry</a></li>
							 	<!-- <?php  
						          $qry="SELECT noti FROM tblnoti";
						          $ret=mysqli_query($connection,$qry);
						          $data=mysqli_fetch_array($ret);
						          $notification=$data['noti'];
						         ?>  -->
						         <?php  
						          $qry="SELECT * FROM tblcontribution";
						          $ret=mysqli_query($connection,$qry);
						          $data=mysqli_fetch_array($ret);
						          $count=mysqli_num_rows($ret);
						         ?>
								<li><a href="contributionlist2.php">View Current Contributions(<?php echo "$count";?>)</a></li>
								
							<?php
							}
							?>

							<?php if($r=="Administrator")
							{
							 ?>
							 	<li><a href="adminentry.php">Admin Entry</a></li>
							 	<li><a href="academicyearentry.php">Academic Year Entry</a></li>
								<li><a href="studentlist.php">Student List</a></li>
							<?php
							}
							?>

							

						<?php
							}
							else if(isset($_SESSION["studentid"]))
							{

						?>

							<li><a href="logout.php">Logout</a></li>
							<li><a href="documenttitlelist.php">Make Contribution</a></li>
							<li><a href="contributionlist.php">View My Contribution</a></li>
						<?php

							}
						
							else
							{
								
						?>
							<li><a href="index.php">Home</a></li>
							<li><a href="#">About Us</a></li>
							<li><a href="studententry.php">Register</a></li>
							<li><a href="studentlogin.php">Student</a></li>
							<li><a href="adminlogin.php">Admin</a></li>

						<?php
							}
							
						 ?>

							<li><a href="guest.php">View as Guest</a></li>
							<!-- <li><a href="report_no_of_contributions.php">View Contributions</a></li>
							<li><a href="report_percentage_of_contributions.php">View Contribution Percentage</a></li>
							<li><a href="report_no_of_contributors.php">View Contributors</a></li>
							<li><a href="report_no_of_contributions_nocomment.php">View no comment Contributions</a></li>
							<li><a href="report_no_of_contributions_nocomment2.php">View no comment Contributions after 14days</a></li> -->
				</ul>
				<!-- <ul class="actions vertical">
					<?php 
						if(isset($_SESSION["adminid"]))
						{

					?>

						<li><a href="Logout.php"  class="button fit" >Logout</a></li>

					<?php
						}
						else if(isset($_SESSION["studentid"]))
						{

					?>
						<li><a href="Logout.php"  class="button fit" >Logout</a></li>

					<?php

					}
						
						else
						{
							
					?>
						<li><a href="studentlogin.php" class="button fit">Login</a></li>

					<?php
						}
						
					 ?>

				</ul> -->
				
			</nav>
<!-- 
</body>
</html> -->