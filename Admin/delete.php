<?php
	session_start();
    if ($_SESSION['user']) 
	{
?>
<?php
include('connection.php');
$id=$_REQUEST['id'];
$q="delete from product where id='$id' ";
$result=mysqli_query($con,$q);
if($result)
{
	echo "<script>window.location='displayproduct.php'</script>";
}
else 
{
	echo "<script>alert('Something Went Wrong')</script>";
}
?>
<?php
			
    }
    else {
        echo "<script>window.location='index.php'</script>";
    }
?>
