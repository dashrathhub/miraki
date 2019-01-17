<?php include('includes/header.php') ;
      include('includes/sidebar.php');
      include('includes/db_connect.php');

echo "hello";
$sql_qry="select * from employees-tbl";
$ret=mysqli_query($con,$sql_qry);

$count=mysqli_num_rows($ret);

?>

            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Employee</h4>
						</div>
						<div class="col-xs-8 text-right m-b-20">
							<a href="#" class="btn btn-primary rounded pull-right" data-toggle="modal" data-target="#add_employee"><i class="fa fa-plus"></i> Add Employee</a>
							<div class="view-icons">
								<a href="employees.php" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
								<a href="employees-list.html" class="list-view btn btn-link"><i class="fa fa-bars"></i></a>
							</div>
						</div>
					</div>
					
                  <?php

if($count>0){
while($row=mysqli_fetch_assoc($ret))
{

?>


					<!-- <div class="row staff-grid-row"> -->
						<div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
							<div class="profile-widget">
								<div class="profile-img">
									<a href="profile.php?id=<?php echo $row['id'] ;?>"><img class="avatar" src="assets/img/user.jpg" alt=""></a>
								</div>
								<div class="dropdown profile-action">
									<a href="" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
									<ul class="dropdown-menu pull-right">
										<li><a href="" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
										<li><a href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
									</ul>
								</div>
								<h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="profile.php"><?php echo $row['name'] ;?></a></h4>
								<div class="small text-muted">Web Designer</div>
							</div>
						</div>
					<!-- </div> -->
					<?php

}

}



?>

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



<!-- pagination -->








</html>




