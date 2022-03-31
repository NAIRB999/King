<?php 
	
	include_once('header.php');
	include_once('connect.php');
	include_once('function.php');

	if(isset($_POST['btnregister']))
	{
	  $studentid = AutoID("tblstudent","studentid","S-",6);
	  $name=$_POST['txtname'];
	  $username=$_POST['txtusername'];
	  $password=$_POST['txtpassword'];
	  $email=$_POST['txtemail'];
	  $phone=$_POST['txtphone'];
	  $address=$_POST['txtaddress'];
	  
	
	    $insert=mysqli_query($connection,"INSERT INTO
	     tblstudent (studentid,name,email,username, password,address,phone,status)
	     VALUES ( '$studentid','$name','$email','$username','$password','$address','$phone','Pending')");
	        
	    if($insert) 
	    {
	      echo "<script>alert(' Register Success! Your account will be activated by the Univerisity.')</script>";
	      echo "<script>location='index.php'</script>";
	    }
	    else
	    {
	      echo mysqli_error ($connection);
	    }
	
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
						<h3>student Registration Form</h3>

						<form method="post" action="#" enctype="multipart/form-data">
									<div class="row uniform">
										<div class="6u 12u$(xsmall)">
											<input type="text" name="txtname" id="name" value="" required="" placeholder="student Name" />
										</div>
										<div class="6u 12u$(xsmall)">
											<input type="text" name="txtphone" id="name" required=""  value="" placeholder="Phone" />
										</div>

										<div class="12u$">
												<textarea name="txtaddress" id="message" placeholder="Enter your address" rows="6" required=""></textarea>
										</div>

										<div class="6u 12u$(xsmall)">
											<input type="email" name="txtemail" id="email" value="" placeholder="Email" required="" />
										</div>
										<div class="6u 12u$(xsmall)">
											<input type="text" name="txtusername" id="name" value="" placeholder="User Name" required="" />
										</div>

										<div class="6u 12u$(xsmall)">
											<input type="password" name="txtpassword" id="name" value="" placeholder="Password" required="" />
										</div>

										<div class="12u$">
											<ul class="actions">
												<li><input type="submit" name="btnregister" value="Register" /></li>
												<li><input type="reset" value="Cancel" class="alt" /></li>
											</ul>
										</div>
									</div>
									<br>

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