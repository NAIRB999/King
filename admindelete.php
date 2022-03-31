<?php  
include('connect.php');

$adminid=$_GET['AdminID'];

$query="DELETE FROM tbladmin WHERE adminid='$adminid'";
$ret=mysqli_query($connection,$query);

if($ret) 
{
	echo "<script>window.alert('Admin Successfully Deleted.')</script>";
	echo "<script>window.location='AdminEntry.php'</script>";
}
else
{
	echo "<p>Something went wrong in Admin Delete" . mysqli_error($connection) . "</p>";
}
?>