<?php
//extract($_POST);
if(isset($_POST['submit'])){

$con=mysqli_connect('localhost','root','','leaves_data');

$eid=$_POST['eid'];
$name=$_POST['name'];
$email=$_POST['email'];

$password=$_POST['password'];

if(!empty($name) && !empty($email))
{
$sql_qry="insert into admin (eid,username,email,password) values ('$eid','$name','$email','$password')";

$ret=mysqli_query($con,$sql_qry);
if($ret){
echo "Your Registration successfull";
// header('location:display.php');
}
else
echo "NO Register";
}else
echo "Fill form field";
}
?>




<div id="add_employee" class="modal custom-modal fade" role="dialog">
				<!-- <div class="modal-dialog"> -->
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content modal-lg">
						<div class="modal-header">
							<h4 class="modal-title">Add Employee</h4>
						</div>
						<div class="modal-body">
							<form class="m-b-30" method="post" action="addemployee.php" >
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Employee ID <span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="eid" >
										</div>
									</div>
						
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Mobile</label>
											<input class="form-control" type="text" name="mobile" >
										</div>
									</div>
												<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">First Name</label>
											<input class="form-control" type="text" name="firstname" >
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Last Name</label>
											<input class="form-control" type="text" name="lastname" >
										</div>
									</div>
									
									<!-- <div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Username <span class="text-danger">*</span></label>
											<input class="form-control" type="text">
										</div>
									</div> -->
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Email <span class="text-danger">*</span></label>
											<input class="form-control" type="email" name="email" >
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Password<span class="text-danger">*</span></label>
											<input class="form-control" type="password" name="password" >
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Role</label>
											<input class="form-control" type="text" name="role" >
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Joining Date</label>
											<div class="cal-icon"><input class="form-control datetimepicker" type="text" name="joindate" ></div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Gender</label>
											<input class="form-control" type="text" name="gender" >
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Birth Date</label>
											<div class="cal-icon"><input class="form-control datetimepicker" type="text" name="dob" ></div>
										</div>
										</div>
									</div>
									<!-- <div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Confirm Password</label>
											<input class="form-control" type="password" name="cpassword" >
										</div>
									</div> -->
									<!-- <div class="col-sm-6">  
										<div class="form-group">
											<label class="control-label">Employee ID <span class="text-danger">*</span></label>
											<input type="text" class="form-control" name="employeeid" >
										</div>
									</div>
									
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Phone </label>
											<input class="form-control" type="text" name="phone" >
										</div>
									</div>
									 -->
									
								
								
								<div class="m-t-20 text-center">
									<button class="btn btn-primary" name="create_employee" >Create Employee</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			<!-- </div> -->












<form method="post" action="">
	Eid:<input type="text" name="eid">
Name:<input type="text" name="name">
Email:<input type="text" name="email"><br/><br/>
Password:<input type="password" name="password"><br/><br/>
Submit:<input type="submit" name="submit">

</form>