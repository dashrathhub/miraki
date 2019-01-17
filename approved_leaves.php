<?php include('includes/header.php') ;
      include('includes/sidebar.php');
      include('includes/db_connect.php');


?>





            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-8">
							<h4 class="page-title">Approved Leaves</h4>
						</div>
						<!-- <div class="col-xs-12 text-right m-b-20">
							<a href="#" class="btn btn-primary rounded pull-right" data-toggle="modal" data-target="#add_employee">Declined Leaves</a>
						
							<a href="#" class="btn btn-primary rounded pull-right" data-toggle="modal" data-target="#add_employee">Approved Leaves</a>
						</div> -->
						
					</div>
                  <div class="row filter-row">
					<div class="col-sm-3 col-xs-6">
						<form method="POST" action="">  
							<div class="form-group form-focus">
								<label class="control-label">Employee Name</label>
								<input type="text" class="form-control floating" name="leave_id" />
								<input type="submit" name="search" value="search" >
							</div>
						</form>
						</div>     
                    </div>

					<div class="row">
						<div class="col-md-11">
							<div class="table-responsive">
								<table class="table table-striped custom-table m-b-0 datatable">
									<thead>
										<tr>
											<th>Employee</th>
											<th>Leave Type</th>
											<th>From</th>
											<th>To</th>
											<!-- <th>No of Days/</th> -->
											<th>Reason</th>
											<th class="text-center">Status</th>
											<!-- <th class="text-right">Actions</th> -->
										</tr>
									</thead>
									<tbody>


<?php

if($con)
{

 $sql_qry="select * from leaves_tbl where leave_status=1";

if(isset($_POST['search'])){
	$sql_qry="select * from leaves_tbl where firstname like '%".$_POST['leave_id']."%'";
}
$ret=mysqli_query($con,$sql_qry);
$count=mysqli_num_rows($ret);

	if($count>0)
	while($row=mysqli_fetch_assoc($ret)){

			$leave=$row['leave_type'];

			if($leave==0){
				$in_leave="Casual Leave";
			}
			if($leave==1){
				$in_leave="Casual Leave";
			}
			if($leave==2){
				$in_leave="Medical Leave";
				
				}
			if($leave==3){
				$in_leave="Sick Leave";

			}
				

?>

										<tr>
											<td>
												<a class="avatar">R</a>
												<h2><a href="#"><?php echo ucwords($row['firstname']); ?><span>Web Developer</span></a></h2>
											</td>
											<td><?php echo " $in_leave "; ?></td>
											<td><?php echo $row['from_date'];?></td>
											<td><?php echo $row['to_date'];?></td>
											<!-- <td>hello</td> -->
											<td><?php echo $row['leave_reason'];?></td>
											<!-- <td>Going to Hospital</td> -->
											<div>
												<div> 
													
											<td class="text-center">
												<form method="POST" action="leave_action.php" >
												<div class="dropdown action-label">
													<input type="hidden" name="hidden_id" value="<?php echo $row['leave_id'];?>" >



													<!-- <a class="btn btn-white btn-sm rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
														<i class="fa fa-dot-circle-o text-purple"></i> New <i class="caret"></i>
													</a> -->
												
													<!-- <label>Leave Type <span class="text-danger">*</span></label> -->
													<select name="leaveaction" class="leaveaction" id="<?php echo $row['leave_id'];?>">
													    <!-- <ul class="dropdown-menu pull-right"> -->
														
														<option value="1" <?php if($row['leave_status']=='1') echo "selected";?>> <li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Approved</a></li></option>

														<option value="0"  <?php if($row['leave_status']=='0') echo "selected";?>><li><a href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a></li></option>

														<option value="2"  <?php if($row['leave_status']=='2') echo "selected";?>><li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a></li></option>
													<!-- </ul> -->
													</select>

												</div>
												<!-- <input type="submit" name="submit"> -->
											
												</form>
											</td>
											
											<!-- <td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														
														<li><a href="delete.php?leave_id=<?php echo $row['leave_id'];?>"  data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
														
														<li><a href="#" title="Edit" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
													</ul>
												</div>
												
											</td> -->
												
											</div>
										</tr>

	<?php
}
}
    ?>

			
									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>
            </div>





<!-- Create employee -->

			<div id="add_employee" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content modal-lg">
						<div class="modal-header">
							<h4 class="modal-title">Add Employee</h4>
						</div>
						<div class="modal-body">
							<form class="m-b-30" method="POST" action="addemployee.php" >
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
									
								</div>
								
								<div class="m-t-20 text-center">
									<button class="btn btn-primary" name="create_employee" >Create Employee</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		

		<div class="sidebar-overlay" data-reff="#sidebar"></div>
        <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.slimscroll.js"></script>
		<script type="text/javascript" src="assets/js/select2.min.js"></script>
		<script type="text/javascript" src="assets/js/moment.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap-datetimepicker.min.js"></script>
		<script type="text/javascript" src="assets/js/app.js"></script>


        
    </body>
<script>
$(function(){
	$('.leaveaction').change(function(){
		var str="update_status=1&state="+$(this).val()+"&id="+$(this).attr('id');
		// alert(str);
		$.ajax({
			type: "POST",
			url: "leave_action.php",
			cache: false,
			data: str,
			success: function(result){
				if(result==1) alert("Status Updated..."); else alert("Status Updation Failed...");
				//alert(result);
				

			}
		});

	});	
});
</script>

<!-- Mirrored from dreamguys.co.in/smarthr/maroon/leaves.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Dec 2018 10:11:20 GMT -->
</html>