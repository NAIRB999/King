<?php  
include('connect.php');

$studentid=$_GET['StudentID'];

$query="DELETE FROM tblstudent WHERE studentid='$studentid'";
$ret=mysqli_query($connection,$query);

if($ret) 
{
	echo "<script>window.alert('Student Successfully Deleted.')</script>";
	echo "<script>window.location='StudentEntry.php'</script>";
}
else
{
	echo "<p>Something went wrong in Student Delete" . mysqli_error($connection) . "</p>";
}
?>