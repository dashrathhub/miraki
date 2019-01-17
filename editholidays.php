<?php
  include('includes/db_connect.php');
  // print_r($_POST); exit;
  if(isset($_POST['updateform']))
  {
	$sql_qry="update holidays set holidayname='".$_POST['hname']."', holidaydate='".$_POST['hdate']."' where hid=".$_POST['uid'];
	$update=mysqli_query($con,$sql_qry);
	if($update)
		header('location: holidays.php');
		else echo "0"; //exit;
	//header('location: holidays.php');
}
?>