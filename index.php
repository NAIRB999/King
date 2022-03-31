<?php 
	session_start();
	include_once('connect.php');
 ?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>The King University</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<nav class="left">
					<a href="#menu"><span>Menu</span></a>
				</nav>
				<a href="index.php" class="logo"><img src="images/kinglogo.png" width="50" height="50"></a>
				<nav class="right">
					<a href="customerlogin.php" class="button alt">Log in</a>
				</nav>
			</header>

		<!-- Menu -->
			<nav id="menu">
				<ul class="links">
					<?php 
						if(isset($_SESSION["adminid"]))
						{
							if(isset($_SESSION["role"]))
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
						         ?> -->
						          <?php  
						          $qry="SELECT * FROM tblcontribution";
						          $ret=mysqli_query($connection,$qry);
						          $data=mysqli_fetch_array($ret);
						          $count=mysqli_num_rows($ret);
						         ?>
								<li><a href="contributionlist2.php">View Current Contributions (<?php echo "$count";?>)</a></li>
								
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

							<li><a href="index.php">Home</a></li>
							<li><a href="logout.php">Logout</a></li>
							<li><a href="documenttitlelist.php">Make Contribution</a></li>
							<li><a href="contributionlist.php">View My Contribution</a></li>
							

						<?php

							}
						}
							else
							{
								
						?>
							<li><a href="index.php">Home</a></li>
							<li><a href="#">About Us</a></li>
							<li><a href="studententry.php">Register</a></li>
							<li><a href="studentlogin.php">Student</a></li>
							<li><a href="adminlogin.php">Admin</a></li>

							<!-- <li><a href="report_no_of_contributions.php">View Contributions</a></li>
							<li><a href="report_percentage_of_contributions.php">View Contribution Percentage</a></li>
							<li><a href="report_no_of_contributors.php">View Contributors</a></li>
							<li><a href="report_no_of_contributions_nocomment.php">View no comment Contributions</a></li>
							<li><a href="report_no_of_contributions_nocomment2.php">View no comment Contributions after 14days</a></li> -->

						<?php
							}
						
							
						 ?>
						<!--  <li><a href="report_no_of_contributions.php">View Contributions</a></li>
							<li><a href="report_percentage_of_contributions.php">View Contribution Percentage</a></li>
							<li><a href="report_no_of_contributors.php">View Contributors</a></li>
							<li><a href="report_no_of_contributions_nocomment.php">View no comment Contributions</a></li>
							<li><a href="report_no_of_contributions_nocomment2.php">View no comment Contributions after 14days</a></li> -->
							<li><a href="guest.php">View as Guest</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<div class="content">
					<!-- <h1>The King University</h1> -->
					<!-- <p>Founded by U Kyaw Khaing Oo in 2017</p> -->
					<ul class="actions">
						<!-- <li><a href="#one" class="button scrolly">Get Started</a></li> -->
					</ul>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="wrapper">
				<div class="inner flex flex-3">
					<div class="flex-item left">
						<div>
							<h3>Participated</h3>
							<p>Dr. @petermahaffy participated in this week's StarTalk LIVE! </p>
						</div>
						<div>
							<h3>Recommend</h3>
							<p>Tune in to about 52:33 to hear him in conversation with Neil deGrasse Tyson & Chuck Nice, though we recommend you also listen to Dr. Hayhoe</p>
						</div>
					</div>
					<div class="flex-item image fit round">
						<img src="images/s1.jpg" alt="" />
					</div>
					<div class="flex-item right">
						<div>
							<h3>Petermahaffy</h3>
							<p>We are absolutely thrilled that our very own @petermahaffy will be speaking alongside other experts who are passionate about climate education! Join us</p>
						</div>
						<div>
							<h3>Pellentesque</h3>
							<p>Pellentesque egestas sem. Suspendisse<br /> modo ullamcorper feugiat lorem.</p>
						</div>
					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style1 special">
				<div class="inner">
					<h2>Our Location</h2>
					<figure>
					    <blockquote>
					         9125 - 50 Street
							Edmonton, Alberta
							T6B 2H3 Canada
							780-465-3500 
					    </blockquote>
					    <!-- <footer>
					        <cite class="author">We are absolutely thrilled that our very own @petermahaffy will be speaking alongside other experts who are passionate about climate education! Join us</cite>
					    </footer> -->
					</figure>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper">
				<div class="inner flex flex-3">
					<div class="flex-item box">
						<div class="image fit">
							<img src="images/s2.jpeg" alt="" />
						</div>
						<div class="content">
							<h3>King’s University</h3>
							<p>The King’s University has made significant investments in information technology this fall – part of a larger strategy to ensure students</p>
						</div>
					</div>
					<div class="flex-item box">
						<div class="image fit">
							<img src="images/s3.jpg" alt="" />
						</div>
						<div class="content">
							<h3>Eagles alumni</h3>
							<p>The Canadian Collegiate Athletic Association (CCAA) and The King’s University are proud to announce that two King’s Eagles alumni</p>
						</div>
					</div>
					<div class="flex-item box">
						<div class="image fit">
							<img src="images/s4.jpg" alt="" />
						</div>
						<div class="content">
							<h3>Canada Research Chair (CRC)</h3>
							<p>The King’s University was awarded a Tier 2 Canada Research Chair (CRC) in 2019, making it the fourth CRC currently designated.</p>
						</div>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<h2>Get In Touch</h2>
					<ul class="actions">
						<li><span class="icon fa-phone"></span> <a href="#">(000) 000-0000</a></li>
						<li><span class="icon fa-envelope"></span> <a href="#">information@untitled.tld</a></li>
						<li><span class="icon fa-map-marker"></span> 123 Somewhere Road, Nashville, TN 00000</li>
					</ul>
				</div>
				<div class="copyright">
					&copy; 2020. Design <a href="#">by</a>. The King @  <a href="#">Univeristy</a>.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>