<?php  
include('connect.php');

$academicyearid=$_GET['AcademicyearID'];

$query="DELETE FROM tblacademicyear WHERE academicyearid='$academicyearid'";
$ret=mysqli_query($connection,$query);

if($ret) 
{
	echo "<script>window.alert('Academicyear Successfully Deleted.')</script>";
	echo "<script>window.location='AcademicyearEntry.php'</script>";
}
else
{
	echo "<p>Something went wrong in Academicyear Delete" . mysqli_error($connection) . "</p>";
}
?>