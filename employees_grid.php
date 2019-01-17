<?php
      include('includes/header.php') ;
      include('includes/sidebar.php');
      include('includes/db_connect.php');


$sql_qry="select*from employee_tbl";
$ret=mysqli_query($con,$sql_qry);
$count=mysqli_num_rows($ret);

?>





            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Employee</h4>
						</div>
					   <!--  <div class="col-xs-8 text-right m-b-20">
							<a href="#" class="btn btn-primary rounded pull-right" data-toggle="modal" data-target="#add_employee"><i class="fa fa-plus"></i> Add Employee</a>
							<div class="view-icons">
								<a href="index.php" class="grid-view btn btn-link"><i class="fa fa-th"></i></a>
								<a href="employees_list.php" class="list-view btn btn-link active"><i class="fa fa-bars"></i></a>
							</div>
						</div> -->
					</div>
					<div class="row filter-row">
						<div class="col-sm-3 col-xs-6">
						<form method="post" action="search.php">  
							<div class="form-group form-focus">
								<label class="control-label">Employee ID</label>
								<input type="text" class="form-control floating" name="employee_id" />
								<input type="submit" name="search" value="search" >
							</div>
						</form>
						</div>     
                    </div>
               






<?php

if($count>0)
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
<!-- 
										<li><a href="delete.php?id=<?php echo $row['id'] ;?>" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
 -->
										<li><a href="delete.php?id=<?php echo $row['id'] ;?>" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
									</ul>
								</div>
								<h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="profile.php?id=<?php echo $row['id'] ;?>"><?php echo $row['firstname'] ;?></a></h4>
								<div class="small text-muted"><?php echo $row['role'] ;?></div>
							</div>
						</div>
 
<?php

}

?>






						
	
					</div>
                </div>