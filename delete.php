<?php

$con=mysqli_connect('localhost','root','','leaves_data');


$uid=$_GET['eid'];


if(!empty($uid)){

$sql_del="delete from employee_tbl where id='$uid'";
$resp=mysqli_query($con,$sql_del);
if($resp){
//header('location:index.php');
?><script type="text/javascript">
	window.location="index.php";
</script>
<?php
}else
echo "Record not deleted";
}

if(isset($leave_id)){
	
$leave_id=$_GET['leave_id'];

$sql_del="delete from leaves_tbl where leave_id='$leave_id'";
$resp=mysqli_query($con,$sql_del);
if($resp){
?><script type="text/javascript">
	 window.location="leave_request.php";
</script>
<?php
}else
echo "Record not deleted";
}

?>
