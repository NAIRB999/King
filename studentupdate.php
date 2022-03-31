<?php 
	
	include_once('header.php');
	include_once('connect.php');
	include_once('function.php');

	if(isset($_REQUEST['StudentID']))
{
  $studentid=$_REQUEST['StudentID'];
  $select=mysqli_query($connection,"SELECT * 
                                    FROM tblstudent 
                                    WHERE studentid ='$studentid'");
  $data=mysqli_fetch_array($select);
  $studentname=$data['studentname'];
  $phone=$data['phone'];
  $email=$data['email'];
  $password=$data['password'];
  // $address=$data['address'];
  // $description=$data['description'];

  } 
 if (isset($_POST['btnupdate']))
   {
    $txtstudentID=$_POST['txtstudentID'];
    $txtstudentname=$_POST['txtname'];
    $txtpassword=$_POST['txtpassword'];
  	$txtemail=$_POST['txtemail'];
  	$txtphone=$_POST['txtphone'];
  	// $txtaddress=$_POST['txtaddress'];
  	// $txtdescription=$_POST['txtdescription'];


    $update="UPDATE tblstudent
            SET 
            studentname='$txtstudentname',
            phone='$txtphone',
            email='$txtemail',
            password='$txtpassword'            
            WHERE studentid='$txtstudentID'";
      $run=mysqli_query($connection,$update);

      if($run)
      {
        echo "<script>alert('Update Successful')</script>";
        echo "<script>location='studentEntry.php'</script>";

      }
      else
      {
        echo mysqli_error($connection);
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
						<h3>Student Update Form</h3>

						<form method="post" action="#">
									<input type="hidden" name="txtstudentID" value="<?php echo $_REQUEST['StudentID'] ?>"/>
									<div class="row uniform">
										<div class="6u 12u$(xsmall)">
											Name: <input type="text" name="txtname" id="name" value="<?php echo $studentname ?>" />
										</div>

										<div class="6u 12u$(xsmall)">
											Phone: <input type="text" name="txtphone" id="phone" value="<?php echo $phone ?>" />
										</div>
										<!-- <div class="12u$">
												Address: <textarea name="txtaddress" id="message" value="<?php echo $address ?>" required=""></textarea>
										</div> -->

										<div class="6u$ 12u$(xsmall)">
											Email: <input type="email" name="txtemail" id="email" value="<?php echo $email ?>"  required="" />
										</div>
										<div class="6u 12u$(xsmall)">
											Password: <input type="password" name="txtpassword" id="name" value="<?php echo $password ?>"  required="" />
										</div>

										<!-- <div class="12u$">
											Description: <textarea name="txtdescription" id="message" value="<?php echo $description ?>"  rows="6"></textarea>
										</div> -->
										
										
										<!-- Break -->
										<div class="12u$">
											<ul class="actions">
												<li><input type="submit" name="btnupdate" value="Update" /></li>
												<li><input type="reset" value="Cancel" class="alt" /></li>
											</ul>
										</div>
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