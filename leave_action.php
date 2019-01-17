<?php
$con=mysqli_connect("localhost","root","","leaves_data");
// echo $l_id=$_POST['hidden_id'];


if(isset($_POST['update_status'])){
	$sql_qry="update leaves_tbl set leave_status='".$_POST['state']."' where leave_id=".$_POST['id'];
	$update=mysqli_query($con,$sql_qry);
	if($update) echo "1"; else echo "0";
}


?>