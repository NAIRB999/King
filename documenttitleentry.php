<?php 
	
	include_once('header.php');
	include_once('connect.php');
	include_once('function.php');

	// if(isset($_SESSION["role"])!="Marketing Coordinator")
	// {
	// 	 echo "<script>alert('Just only Marketing Coordinator can make this entry!')</script>";
	//      echo "<script>location='contrubutionlist.php'</script>";
	// }
	if(isset($_POST['btnregister']))
	{
	  $documenttitleid = AutoID("tbldocumenttitle","documenttitleid","Title-",6);
	  $title=$_POST['txttitle'];
	  $year=$_POST['cboacademicyear'];
	  $startdate=$_POST['txtstartdate'];
	  $enddate=$_POST['txtenddate'];

	  //For "Image"
	// get the original filename
	$image = $_FILES['img']['name'];		
	// image storing folder, make sure you indicate the right path
	$folder = "Magazine/"; 
	
	// image checking if exist or the input field is not empty
	if($image) 
	{ 
	  // creating a filename
	  $filename = $folder . $documenttitleid . "_" . $image; 		  
	  // uploading image file to specified folder
	  $copied = copy($_FILES['img']['tmp_name'], $filename); 
	  
	  // checking if upload succesfull
	  if (!$copied) 
	  { 			  
		exit("Problem occured. Cannot Upload Product Image.");
	  }
	}
		
	    $insert=mysqli_query($connection,"INSERT INTO
	     tbldocumenttitle (documenttitleid,title,image,academicyearid,startdate,enddate,status)
	     VALUES ( '$documenttitleid','$title','$filename','$year','$startdate','$enddate','Valid')");
	        
	    if($insert) 
	    {
	      echo "<script>alert(' Register Success!')</script>";
	      echo "<script>location='documenttitleentry.php'</script>";
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
						<h3>Document Title Registration Form</h3>

						<form method="post" action="#" enctype="multipart/form-data">
									<div class="row uniform">
										<div class="12u$">
											<input type="text" name="txttitle" id="name" value="" required="" placeholder="title Name" />
										</div>

										

										<div class="12u$">
											Academicyear:<select name="cboacademicyear">
								              <option>Choose Academic Type</option>
								              <?php 
								                        $select=mysqli_query($connection,"SELECT * FROM tblacademicyear");
								                        $count=mysqli_num_rows($select);
								                        for ($i=0; $i < $count ; $i++) { 
								                          $data=mysqli_fetch_array($select);
								                          $doctypeid=$data['academicyearid'];
								                          $type=$data['academicyear'];

								                          echo "<option value='$doctypeid'>$type</option>";
								                          
								                        }
								              ?>
								            </select>
										</div>

										
										<div class="6u 12u$(xsmall)">
											Start Date:<input type="date" name="txtstartdate" id="name" value="" required=""  />
										</div>

										<div class="6u 12u$(xsmall)">
											End Date: <input type="date" name="txtenddate" id="name" value="" required=""  />
										</div>

										<div class="12u$">
											Choose Magazine Cover:<input type="file" name="img" id="name" value="" required="" />
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

									<h3>Document Title List</h3>
						         <?php  
						              $adminquery="SELECT * FROM tbldocumenttitle t, tblacademicyear a
						              				WHERE t.academicyearid=a.academicyearid";
						              $adminret=mysqli_query($connection,$adminquery);
						              $admincount=mysqli_num_rows($adminret);
						              ?>
						                    
						              <div class="table-wrapper">  
						              <table align='center' class="table-wrapper">
						                      <thead>
						                          <tr>
						                              <th> Title </th>
						                              <th> Cover </th>
						                              <th> Year </th>
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

						                echo "<tr>";
						                  
						                  // echo "<td>$titleID</td>";
						                  echo "<td>" . $arr['title'] . "</td>";
						                  echo "<td><img src='$img' width='50px' height='100px'></td>";
						                  echo "<td>" . $arr['academicyear'] . "</td>";
						                  echo "<td>
						                      <a href='documenttitleupdate.php?DocumentTitleID=$titleID'>Update</a> |
						                      <a href='documenttitledelete.php?DocumentTitleID=$titleID'>Delete</a>
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