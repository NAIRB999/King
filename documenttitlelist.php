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
				<form action="contribution.php" method="POST">					

									<h3>Document Title List</h3>
						         <?php  
						              $adminquery="SELECT * FROM tbldocumenttitle t, tblacademicyear a
						              				WHERE a.academicyearid=t.academicyearid
						              				AND t.enddate> now()";
						              $adminret=mysqli_query($connection,$adminquery);
						              $admincount=mysqli_num_rows($adminret);
						              ?>
						                    
						              <div class="table-wrapper">  
						              <table align='center' class="table-wrapper">
						                      <thead>
						                          <tr>
						                          	<td>  </td>
						                              <th> Title </th>
						                              <th> Cover </th>
						                              <td> Year </td>
						                              <td> Start Date </td>
                              						  <td> End Date </td>
						                              <th> Action </th>
						                          </tr>
						                      </thead>
						              <tbody>
						               <?php  
						              for($i=0;$i<$admincount;$i++) 
						              { 
						                $arr=mysqli_fetch_array($adminret);
						                $titleID=$arr['documenttitleid'];
						                $img=$arr['image'];
						                $academicyear=$arr['academicyear'];
						                $startdate=$arr['startdate'];
						                $enddate=$arr['enddate'];


						                echo "<tr>";
						                  
						                  // echo "<td>$titleID</td>";
						                  echo "<td><input type='hidden' name='txtdocumenttitleid' value='$titleID'></td>";
						                  echo "<td>" . $arr['title'] . "</td>";
						                  echo "<td><img src='$img' width='100px' height='150px'></td>";
						                  echo "<td>" . $arr['academicyear'] . "</td>";
						                  echo "<td>" . $arr['startdate'] . "</td>";
						                  echo "<td>" . $arr['enddate'] . "</td>";
						                  // echo "<td><input type='submit' name='btncontribute' value='Contribute' class='btn btn-primary'></td>";
						                  echo "<td>
						                      <a href='contribution.php?DocumentTitleID=$titleID'>Contribute</a>
						                      </td>";
						                echo "</tr>";
						              }
						              ?>

						          </tbody>
						                  </table> 
						              </div>
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