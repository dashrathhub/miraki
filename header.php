<!DOCTYPE html>
<html>

<!-- Mirrored from dreamguys.co.in/smarthr/maroon/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Dec 2018 10:11:00 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <title>Dashboard - HRMS admin template</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="assets/plugins/morris/morris.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
        <div class="main-wrapper">
            <div class="header">
                <div class="header-left">
                    <a href="index.php" class="logo">
						<img src="assets/img/logo.png" height="47px" alt="">
					</a>
                </div>
               
				<!-- <a id="mobile_btn" class="mobile_btn pull-left" href="#sidebar"><i class="fa fa-bars" aria-hidden="true"></i></a> -->
				<ul class="nav navbar-nav navbar-right user-menu pull-right">
					<!-- <li class="dropdown hidden-xs">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge bg-purple pull-right">1</span></a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span>Notifications</span>
							</div>
							<div class="drop-scroll">
								<ul class="media-list">
									
									<li class="media notification-message">
										<a href="">
											<div class="media-left">
												<span class="avatar">L</span>
											</div>
											<div class="media-body">
												<p class="m-0 noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
												<p class="m-0"><span class="notification-time">8 mins ago</span></p>
											</div>
										</a>
									</li>
									
									
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="">View all Notifications</a>
							</div>
						</div>
					</li> 
					<li class="dropdown hidden-xs">
						<a href="javascript:;" id="open_msg_box" class="hasnotifications"><i class="fa fa-comment-o"></i> <span class="badge bg-purple pull-right">1</span></a>
					</li>	-->

<?php
session_start();
echo ($_SESSION['admin_id']);
// echo $_SESSION['lname'];

// print_r($_SESSION['name']);

// if(isset($_POST['submit'])){

?>

					
					<li class="dropdown">
						<a href="profile.php" class="dropdown-toggle user-link" data-toggle="dropdown" title="Admin">
							<span class="user-img"><img class="img-circle" src="assets/img/user.jpg" width="40" alt="Admin">
							<span class="status online"></span></span>
							<span><?php echo ucfirst($_SESSION['firstname']); ?></span>
							<i class="caret"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="profile.php?admin_id=<?php echo ($_SESSION['admin_id']); ?>">My Profile</a></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</li>
				</ul>
				<!-- <div class="dropdown mobile-user-menu pull-right">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<ul class="dropdown-menu pull-right">
						<li><a href="profile.php?id=<?php echo $row['id'] ;?>">My Profile</a></li>
							<li><a href="logout.php">Logout</a></li>
					</ul>
				</div> -->
            </div>
        </div>
    </body>
    </html>
    
