<?php
include('includes/db_connect.php');

if(isset($_POST['create_employee'])){

$eid=$_POST['eid'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$role=$_POST['role'];
$joindate=$_POST['joindate'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
//ADDRESS NOT INPUT
// $address=$_POST['address'];  ,'$address'  ,address

if(!empty($eid) && !empty($email) && !empty($password))
{
   $sql_qry="insert into employee_tbl(eid,firstname,lastname,email,mobile,password,role,joindate,gender,dob,address) values('$eid','$firstname','$lastname','$email','$mobile','$password','$role','$joindate','$gender','$dob','0')";

$ret=mysqli_query($con,$sql_qry);
if($ret){
header('location:index.php?done=0');
}
else
echo "NO Register";
}else
// echo "Please Fill All Field";
 header('location:index.php?done=1');
}


?>
