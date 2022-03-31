<?php 
	
	include_once('header.php');
	include_once('connect.php');
	include_once('function.php');

	if(isset($_POST['btnregister']))
	{
	  $adminid = AutoID("tbladmin","adminid","A-",6);
	  $name=$_POST['txtname'];
	  $password=$_POST['txtpassword'];
	  $username=$_POST['txtusername'];
	  $email=$_POST['txtemail'];
	  $role=$_POST['cborole'];


	    $insert=mysqli_query($connection,"INSERT INTO
	     tbladmin (adminid,name,role,username,email,password)
	     VALUES ( '$adminid','$name','$role','$username','$email','$password')");
	        
	    if($insert) 
	    {
	      echo "<script>alert(' Register Success!')</script>";
	      echo "<script>location='AdminEntry.php'</script>";
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
						<h3>Admin Registration Form</h3>

						<form method="post" action="#">
									<div class="row uniform">
										<div class="6u 12u$(xsmall)">
											<input type="text" name="txtname" id="name" value="" placeholder="Admin Name" />
										</div>
										<div class="6u 12u$(xsmall)">
											<!-- <input type="text" name="txtrole" id="name" value="" placeholder="Phone" /> -->
											<select id="name" name="cborole">
												<option>Choose Role</option>
												<option>Marketing Manager</option>
												<option>Marketing Coordinator</option>
												<option>Administrator</option>
											</select>
										</div>
										<div class="6u$ 12u$(xsmall)">
											<input type="email" name="txtemail" id="email" value="" placeholder="Email" />
										</div>

										<div class="6u 12u$(xsmall)">
											<input type="text" name="txtusername" id="name" value="" placeholder="User Name" />
										</div>

										<div class="6u 12u$(xsmall)">
											<input type="password" name="txtpassword" id="name" value="" placeholder="Password" />
										</div>
										
										
										<!-- Break -->
										<div class="12u$">
											<ul class="actions">
												<li><input type="submit" name="btnregister" value="Register" /></li>
												<li><input type="reset" value="Cancel" class="alt" /></li>
											</ul>
										</div>
									</div>
									<br>

						         <?php  
						              $adminquery="SELECT * FROM tbladmin";
						              $adminret=mysqli_query($connection,$adminquery);
						              $admincount=mysqli_num_rows($adminret);
						              ?>
						                    
						              <div class="table-wrapper">  
						              <table align='center' class="table-wrapper">
						                      <thead>
						                          <tr>
						                              <th> AdminID </th>
						                              <th> Name </th>
						                              <th> Email </th>
						                              <th> Role </th>
						                              <th> Action </th>
						                          </tr>
						                      </thead>
						              <tbody>
						               <?php  
						              for($i=0;$i<$admincount;$i++) 
						              { 
						                $arr=mysqli_fetch_array($adminret);
						                $adminID=$arr['adminid'];
						                

						                echo "<tr>";
						                  
						                  echo "<td>$adminID</td>";
						                  echo "<td>" . $arr['name'] . "</td>";
						                  echo "<td>" . $arr['email'] . "</td>";
						                  echo "<td>" . $arr['role'] . "</td>";
						                  
						                  echo "<td>
						                      <a href='adminupdate.php?AdminID=$adminID'>Update</a> |
						                      <a href='admindelete.php?AdminID=$adminID'>Delete</a>
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
						<li><span class="icon fa-role"></span> <a href="#">(000) 000-0000</a></li>
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