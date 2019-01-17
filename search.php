
<?php

    include('includes/header.php') ;
    include('includes/sidebar.php');
    include('includes/db_connect.php');
     
?>
<?php

if(isset($_POST['employee_id'])){
echo $name=$_POST['employee_id'];

if(!empty($name))
{

$sql_qry="select * from employee_tbl where firstname like '%".$name."%'";
$ret=mysqli_query($con,$sql_qry);

$count=mysqli_num_rows($ret);
if($count>0){
while($row=mysqli_fetch_assoc($ret)){

?>
            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-sm-8">
							<h4 class="page-title">Employee Profile</h4>
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
													<h3 class="user-name m-t-0 m-b-0"><?php echo $row['firstname'] ;?></h3>
													<small class="text-muted">Web Designer</small>
													<div class="staff-id">Employee ID : FT-0001</div>
												
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
														<span class="text">24th July</span>
													</li>
													<li>
														<span class="title">Gender:</span>
														<span class="text">Male</span>
													</li>
													<!-- <li>
														<span class="title">Message:</span>
														<span class="text"><?php echo $row['message']; ?></span>
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
				</div>
			</div>

<?php

}
}
}else
header('location:index.php');

}
else
header('location:employees_list.php');

?>



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
        </div> -->
		<div class="sidebar-overlay" data-reff="#sidebar"></div>
        <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.slimscroll.js"></script>
		<script type="text/javascript" src="assets/js/app.js"></script>
    </body>

<!-- Mirrored from dreamguys.co.in/smarthr/maroon/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Dec 2018 10:11:16 GMT -->
</html>