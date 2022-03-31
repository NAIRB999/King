<?php 
	
	include_once('header.php');
	include_once('connect.php');
	include_once('function.php');

	//$documenttitleid=$_POST['txtdocumenttitleid'];
	if(isset($_REQUEST['DocumentTitleID']))
	{
		$documenttitleid=$_REQUEST['DocumentTitleID'];
		$adminquery="SELECT * FROM tbldocumenttitle 
					where documenttitleid='$documenttitleid'";
		  $adminret=mysqli_query($connection,$adminquery);
		  $admincount=mysqli_num_rows($adminret);
		  $row=mysqli_fetch_array($adminret);
	}

	if(isset($_SESSION['studentid']))
	{
		$sid=$_SESSION['studentid'];
		$coname=$_SESSION['name'];

		
		
	}
	if(isset($_POST['btncontribute']))
	{
	  $contributionid = AutoID("tblcontribution","contributionid","Con-",6);
	  $txtstudentid=$_POST['txtstudentid'];
	  $cbodocumenttype=$_POST['cbodocumenttype'];
	  $txtdocumenttitleid=$_POST['txtdocumenttitleid'];
	  $txtdate=$_POST['txtdate'];
	  $txtfilename=$_POST['txtfilename'];
	  $txtdescription=$_POST['txtdescription'];
	  
	   //For "Image"
		// get the original filename
		$image = $_FILES['img']['name'];		
		// image storing folder, make sure you indicate the right path
		$folder = "Document/"; 
		
		// image checking if exist or the input field is not empty
		if($image) 
		{ 
		  // creating a filename
		  $file = $folder . $contributionid . "_" . $image; 		  
		  // uploading image file to specified folder
		  $copied = copy($_FILES['img']['tmp_name'], $file); 
		  
		  // checking if upload succesfull
		  if (!$copied) 
		  { 			  
			exit("Problem occured. Cannot Upload Product Image.");
		  }
		}
	    $insert=mysqli_query($connection,"INSERT INTO
	     tblcontribution (contributionid,documenttype,documenttitleid,date,filename,studentid,description,file,status)
	     VALUES ( '$contributionid','$cbodocumenttype','$txtdocumenttitleid','$txtdate','$txtfilename','$txtstudentid','$txtdescription','$file','contribute')");

	    // echo $insert2=mysqli_query($connection,"UPDATE tblnoti
	    //  									SET noti=noti + 1");
	        
	    if($insert) 
	    {
	      echo "<script>alert(' Contribution Success!')</script>";
	      echo "<script>location='contributionlist.php'</script>";
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
						<h3>Contribution Form</h3>

						<form method="post" action="#" enctype="multipart/form-data">
									<div class="row uniform">
										<div class="6u 12u$(xsmall)">
											Document Title ID: <input type="text" name="txtdocumenttitleid" id="name" readonly="" value="<?php echo $documenttitleid ;?>" />
										</div>
										<div class="6u 12u$(xsmall)">
											Document Title: <input type="text" name="txtdocumenttitle" id="name" readonly="" value="<?php echo $row['title'] ;?>" />
										</div>

										<div class="12u$">
											<input type="hidden" name="txtstudentid" id="name" value="<?php echo $sid; ?>" /> Student Name:<input type="text" name="txtname" id="name" readonly value="<?php echo $coname; ?>" />
										</div>
										<div class="6u 12u$(xsmall)">
											Document Type:<select name="cbodocumenttype">
								              <option>Article</option>
								              <option>File</option>
								            </select>
										</div>


										<div class="6u 12u$(xsmall)">
											Today Date: <input type="date" name="txtdate" id="name" required="">
										</div>

										<div class="12u$">
											<input type="text" name="txtfilename" id="name" value="" required="" placeholder="Enter Document Name" />
										</div>

										<div class="12u$">
											Description: <textarea name="txtdescription"  id="textarea" ></textarea> 
										</div>

										<div class="12u$">
											Choose your document:<input type="file" name="img" id="name" value="" required="" />
										</div>

										<div  class="12u$">
											<input type="checkbox" name="chk" required="" checked=""  />
											<label> I have agreed to terms and condition applied for uploading the file.</label>
										</div>

										<!-- Break -->
										<div class="12u$">
											<ul class="actions">
												<li><input type="submit" name="btncontribute" value="Contribute" /></li>
												<li><input type="reset" value="Cancel" class="alt" /></li>
											</ul>
										</div>
									</div>
									<br>
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