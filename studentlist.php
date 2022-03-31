<?php 
	
	include_once('header.php');
	include_once('connect.php');
	include_once('function.php');


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
						<h3>Student List</h3>

				         <?php  
				              $adminquery="SELECT *
				              				FROM tblstudent 
				              				where status='Pending'";
				              $adminret=mysqli_query($connection,$adminquery);
				              $admincount=mysqli_num_rows($adminret);
				              ?>
				                    
				              <div class="table-wrapper">  
				              <table align='center' class="table-wrapper">
				                      <thead>
				                          <tr>
				                              <th> StudentID </th>
				                              <th> Name </th>
				                              <th> Email </th>
				                              <th> Phone </th>
				                              <th> User Name </th>
				                              <th> Action </th>
				                          </tr>
				                      </thead>
				              <tbody>
				               <?php  
				              for($i=0;$i<$admincount;$i++) 
				              { 
				                $arr=mysqli_fetch_array($adminret);
				                $studentID=$arr['studentid'];
				                

				                echo "<tr>";
				                  
				                  echo "<td>$studentID</td>";
				                  echo "<td>" . $arr['name'] . "</td>";
				                  echo "<td>" . $arr['email'] . "</td>";
				                  echo "<td>" . $arr['phone'] . "</td>";
				                   echo "<td>" . $arr['username'] . "</td>";
				                  
				                  echo "<td>
				                      <a href='studentactivated.php?StudentID=$studentID'>Activate</a>
				                      </td>";
				                echo "</tr>";
				              }
				              ?>
				          </tbody>
				                  </table> 
						              
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