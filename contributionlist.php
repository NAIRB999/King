<?php 
	
	include_once('header.php');
	include_once('connect.php');
	include_once('function.php');

	if(isset($_SESSION['studentid']))
	{
		$sid=$_SESSION['studentid'];
		$coname=$_SESSION['name'];

		
		
	}
	

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
						<h3>Your Contribution List</h3>

						<form method="post" action="#" enctype="multipart/form-data">
									
						         <?php  
						          $adminquery="SELECT * FROM tbldocumenttitle title, tblcontribution c, tblacademicyear a
													where title.documenttitleid=c.documenttitleid
													and a.academicyearid=title.academicyearid
													and c.studentid='$sid'";
						              $adminret=mysqli_query($connection,$adminquery);
						              $admincount=mysqli_num_rows($adminret);

						              ?> 
						                    
						              <div class="table-wrapper">  
						              <table align='center' class="table-wrapper">
						                      <thead>
						                          <tr>
						                              <th> Image </th>
						                              <th> File </th>
						                              <th> Title </th>
						                              <th> Contribute Date </th>
						                              <th> Document Type </th>
						                              <th> filename </th>
						                              <th> Description </th>
						                              
						                          </tr>
						                      </thead>
						              <tbody>
						               <?php  
						              for($i=0;$i<$admincount;$i++) 
						              { 
						                $arr=mysqli_fetch_array($adminret);
						                $contributionid=$arr['contributionid'];
						                $title=$arr['title'];
						                $date=$arr['date'];	
						                $documenttype=$arr['documenttype'];
						                $filename=$arr['filename'];	
						                $description=$arr['description'];	
						                $file=$arr['file'];

						                echo "<tr>";

						                if($documenttype=='Article'){
					                      echo "<td width='30px'>";
					                        echo "<img src='images/document1.jpg' width='100px'>";
					                      echo "</td>";
					                    }else{
					                      echo "<td>";
					                        echo "<img src='".$file."' width='100px'>";
					                      echo "</td>";
					                    }					               
						                  // echo "<td>$titleID</td>";
					                    echo "<td>";
						                    echo "<a href='".$file."'>";
						                    echo $documenttype;
						                    echo "</a>";  
						                  echo "</td>";
						                  echo "<td>" . $arr['title'] . "</td>";
						                  echo "<td>" . $arr['date'] . "</td>";
						                  echo "<td>" . $arr['documenttype'] . "</td>";
						                  echo "<td>" . $arr['filename'] . "</td>";
						                  echo "<td>" . $arr['description'] . "</td>";
						                  // echo "<td><img src='$file' width='100px' height='150px'></td>";
						                  // echo "<td><a href='$file'></a></td>";

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