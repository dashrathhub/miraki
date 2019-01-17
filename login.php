
<?php
session_start();
include('includes/db_connect.php');



if(isset($_POST['submit'])){

    $email=$_POST['email'];
	$password=$_POST['password'];
	
		if(!empty($email) && !empty($password))
			{
				$sql_qry="select * from admin_profile where email='$email' and password='$password'";

				$ret=mysqli_query($con,$sql_qry);
	            $count = mysqli_num_rows($ret);
				if($count>0){
					$row=mysqli_fetch_assoc($ret);
				    $_SESSION['admin_id']=$row['id'];
				    $_SESSION['firstname']=$row['firstname'];
				    $_SESSION['lastname']=$row['lastname'];
				
					header('location:index.php');
					   
				}else{
				   echo "<script>alert('You Need Register First');</script>";
					
				}
			}
			else{
			  echo "<script>alert('Please Enter Email and Password');</script>";
			}
}

?>


<!DOCTYPE html>
<html>
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <title>Login - HRMS admin template</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
		
    </head>
    <body>
        <div class="main-wrapper">
			<div class="account-page">
				<div class="container">
					<h3 class="account-title">Mirakitech HRM Login</h3>
					<div class="account-box">
						<div class="account-wrapper">
							<div class="account-logo">
								<img src="assets/img/logo2.png" alt="Miraki Technologies">
							</div>
							<form method="post" action="">
								<div class="form-group form-focus">
									<label class="control-label">Admin Email</label>
									<input class="form-control floating" type="text" name="email">
								</div>
								<div class="form-group form-focus">
									<label class="control-label">Password</label>
									<input class="form-control floating" type="password" name="password">
								</div>
								<div class="form-group text-center">
									<button class="btn btn-primary btn-block account-btn" type="submit" name="submit">Login</button>
								</div>
								<div class="text-center">
									<a href="forgot-password.php">Forgot your password?</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
        </div>
		<div class="sidebar-overlay" data-reff="#sidebar"></div>
        <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/app.js"></script>
    </body>


</html>