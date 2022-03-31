<?php 
	
	include_once('header.php');
	include_once('connect.php');
	include_once('function.php');

	if(isset($_REQUEST['ContributionID']))
{
  $contributionid=$_REQUEST['ContributionID'];
  $select=mysqli_query($connection,"SELECT * 
                                    FROM tblcontribution
                                    WHERE contributionid ='$contributionid'");
  $data=mysqli_fetch_array($select);
  $date=$data['date'];
  $documenttype=$data['documenttype'];
  $file=$data['file'];
  $studentid=$data['studentid'];
  $filename=$data['filename'];

  } 
 if (isset($_POST['btnsubmit']))
   {
    $txtcontributionID=$_POST['txtcontributionID'];
    $txtdocumenttype=$_POST['txtdocumenttype'];
    $txtfilename=$_POST['txtfilename'];

  	
    $update="UPDATE tblcontribution
            SET documenttype='$txtdocumenttype',
            	filename='$txtfilename'
            WHERE contributionid='$txtcontributionID'";
      $run=mysqli_query($connection,$update);

      if($run)
      {
        echo "<script>alert('Edit Successful')</script>";
        echo "<script>location='contributionlist2.php'</script>";

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
						<h3>Comment for students' contribution list</h3>

						<form method="post" action="#">
									<input type="hidden" name="txtcontributionID" value="<?php echo $_REQUEST['ContributionID'] ?>"/>
									<div class="row uniform">
										<div class="6u 12u$(xsmall)">
											Date: <input type="text" name="txtdate" id="name" value="<?php echo $date ?>" readonly />
										</div>

										<div class="6u 12u$(xsmall)">
											File Name: <input type="text" name="txtfilename" id="name" value="<?php echo $filename ?>" required />
										</div>

										<div class="6u 12u$(xsmall)">
											Documenttype: <input type="text" name="txtdocumenttype" id="name" value="<?php echo $documenttype ?>" required/>
										</div>

										<div class="12u$">
											<ul class="actions">
												<li><input type="submit" name="btnsubmit" value="Edit" /></li>
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