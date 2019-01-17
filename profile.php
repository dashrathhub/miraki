<?php include('includes/header.php') ;
      include('includes/sidebar.php');
      include('includes/db_connect.php');

if(isset($_GET['admin_id'])){
$admin_id=$_GET['admin_id'];
$sql_qry="select * from admin_profile where id=$admin_id ";
}



if(isset($_GET['id'])){

$id=$_GET['id'];
$sql_qry="select * from employee_tbl where id=$id ";

}


$ret=mysqli_query($con,$sql_qry);
$count=mysqli_num_rows($ret);
$row=mysqli_fetch_assoc($ret);

if($count>0){

?>

            <body>
            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-sm-8">
							<h4 class="page-title">My Profile</h4>
						</div>
						
					</div>
					<div class="card-box">
						<div class="row">
							<div class="col-md-12">
								<div class="profile-view">
									<div class="profile-img-wrap">
										<div class="profile-img">
											<a href="#"><img class="avatar" src="assets/img/user.jpg" alt=""></a>
										</div>
									</div>
									<div class="profile-basic">
										<div class="row">
											<div class="col-md-5">
												<div class="profile-info-left">
													<h3 class="user-name m-t-0 m-b-0"><?php echo ucwords($row['firstname']." ".$row['lastname']);?></h3>
													<small class="text-muted"><?php echo ucwords($row['role']) ;?></small>
													<div class="staff-id">Employee ID : <?php echo strtoupper($row['eid']) ;?></div>
												
												</div>
											</div>
											<div class="col-md-7">
												<ul class="personal-info">
													<li>
														<span class="title">Phone:</span>
														<span class="text"><a href="#"><?php echo $row['mobile']; ?></a></span>
													</li>
													<li>
														<span class="title">Email:</span>
														<span class="text"><a href="#"><?php echo $row['email']; ?></a></span>
													</li>
													<li>
														<span class="title">Birthday:</span>
														<span class="text"><?php echo $row['dob']; ?></span>
													</li>
													<li>
														<span class="title">JoiningDate:</span>
														<span class="text"><?php echo $row['joindate']; ?></span>
													</li>
													<li>
														<span class="title">Gender:</span>
														<span class="text"><?php echo ucwords($row['gender']); ?></span>
													</li>
													<!-- <li>
														<span class="title">Message:</span>
														<span class="text"><?php //echo $row['message']; ?></span>
													</li>
													 -->
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>











<!-- leave request -->

	<!-- <div class="row"> -->
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
											<th class="text-right">Actions</th>
										</tr>
									</thead>
									<tbody>


<?php
if(isset($_GET['id'])){

$id=$_GET['id'];
$sql_qry="select * from leaves_tbl where id=$id ";

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
														
														<option value="1" <?php if($row['leave_status']=='1') echo "selected";?>> <li><a href="#"<i class="fa fa-dot-circle-o text-success"></i> Approved</a></li></option>

														<option value="0"  <?php if($row['leave_status']=='0') echo "selected";?>><li><a href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a></li></option>

														<option value="2"  <?php if($row['leave_status']=='2') echo "selected";?>><li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a></li></option>
														<!-- </ul> -->
												    </select>
												     </div>
									     	    </form>
											</td>
											
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<!-- <li><a href="#" title="Edit" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Edit</a></li> -->
														<li><a href="delete.php?leave_id=<?php echo $row['leave_id'];?>" title="Decline" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
														<!-- <li><a name="submit" href="leave_action.php?leave_id=<?php //echo $row['leave_id'];?>">Submit</a></li> -->
													</ul>
												</div>
											</td>
												
											</div>
										</tr>



<?php
}

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

		<div class="sidebar-overlay" data-reff="#sidebar"></div>
        <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.slimscroll.js"></script>
		<script type="text/javascript" src="assets/js/app.js"></script>
    </body>

<!-- Mirrored from dreamguys.co.in/smarthr/maroon/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Dec 2018 10:11:16 GMT -->







<!-- 
					<div class="row">
						<div class="col-md-3">
							<div class="card-box m-b-0">
								<h3 class="card-title">Skills</h3>
								<div class="skills">
									<span>IOS</span>
									<span>Android</span> 
									<span>Html</span>
									<span>CSS</span>
									<span>Codignitor</span>
									<span>Php</span>
									<span>Javascript</span>
									<span>Wordpress</span>
									<span>Jquery</span>
								</div>
							</div>
						</div>
						<div class="col-md-9">
							<div class="card-box">
								<h3 class="card-title">Education Informations</h3>
								<div class="experience-box">
									<ul class="experience-list">
										<li>
											<div class="experience-user">
												<div class="before-circle"></div>
											</div>
											<div class="experience-content">
												<div class="timeline-content">
													<a href="#/" class="name">International College of Arts and Science (UG)</a>
													<div>Bsc Computer Science</div>
													<span class="time">2000 - 2003</span>
												</div>
											</div>
										</li>
										<li>
											<div class="experience-user">
												<div class="before-circle"></div>
											</div>
											<div class="experience-content">
												<div class="timeline-content">
													<a href="#/" class="name">International College of Arts and Science (PG)</a>
													<div>Msc Computer Science</div>
													<span class="time">2000 - 2003</span>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="card-box m-b-0">
								<h3 class="card-title">Experience</h3>
								<div class="experience-box">
									<ul class="experience-list">
										<li>
											<div class="experience-user">
												<div class="before-circle"></div>
											</div>
											<div class="experience-content">
												<div class="timeline-content">
													<a href="#/" class="name">Web Designer at Zen Corporation</a>
													<span class="time">Jan 2013 - Present (5 years 2 months)</span>
												</div>
											</div>
										</li>
										<li>
											<div class="experience-user">
												<div class="before-circle"></div>
											</div>
											<div class="experience-content">
												<div class="timeline-content">
													<a href="#/" class="name">Web Designer at Ron-tech</a>
													<span class="time">Jan 2013 - Present (5 years 2 months)</span>
												</div>
											</div>
										</li>
										<li>
											<div class="experience-user">
												<div class="before-circle"></div>
											</div>
											<div class="experience-content">
												<div class="timeline-content">
													<a href="#/" class="name">Web Designer at Dalt Technology</a>
													<span class="time">Jan 2013 - Present (5 years 2 months)</span>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
                </div>
				
            </div>
    -->

 <script>

$(function(){
	$('.leaveaction').change(function(){
		var str="update_status=1&state="+$(this).val()+"&id="+$(this).attr('id');
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




</html>