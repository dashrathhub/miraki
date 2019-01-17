<?php
include('includes/db_connect.php');
$del = 'delete from holidays where hid='.$_GET['xyz'];
$qryy = mysqli_query($con,$del);
if($qryy)
{
	header('location:holidays.php?done=1');
}else
{
	header('location:holidays.php?done=0');
}
?>