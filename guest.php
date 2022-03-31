<?php 
	
	include_once('header.php');
	include_once('connect.php');
	include_once('function.php');

	// if(isset($_SESSION['studentid']))
	// {
	// 	$sid=$_SESSION['studentid'];
	// 	$coname=$_SESSION['name'];

		
		
	// }
	

 ?>
<!DOCTYPE HTML>
<!--
	Intensify by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>The King University</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h1>The King University</h1>
						<!-- <p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p> -->
					</header>
					<div class="image fit">
						<img src="images/uni4.jpg" alt="" />

						
						<!-- Form -->
						<br>
						<h3>Number of Contributions for each academic year</h3>

						<form method="post" action="#" enctype="multipart/form-data">									
			              <div class="table-wrapper">  

			              	<li><a href="report_no_of_contributions.php">View Contributions</a></li>
							<li><a href="report_percentage_of_contributions.php">View Contribution Percentage</a></li>
							<li><a href="report_no_of_contributors.php">View Contributors</a></li>
							<li><a href="report_no_of_contributions_nocomment.php">View no comment Contributions</a></li>
							<li><a href="report_no_of_contributions_nocomment2.php">View no comment Contributions after 14days</a></li>

					</form>
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