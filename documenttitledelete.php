<?php  
include('connect.php');

$documenttitleid=$_GET['DocumentTitleID'];

$query="DELETE FROM tbldocumenttitle WHERE documenttitleid='$documenttitleid'";
$ret=mysqli_query($connection,$query);

if($ret) 
{
	echo "<script>window.alert('DocumentTitle Successfully Deleted.')</script>";
	echo "<script>window.location='DocumentTitleEntry.php'</script>";
}
else
{
	echo "<p>Something went wrong in DocumentTitle Delete" . mysqli_error($connection) . "</p>";
}
?>