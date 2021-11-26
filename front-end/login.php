<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../images/favicon.ico">

	<title>Anytime Jobs</title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="css/horizontal-menu.css"> 
	<link rel="stylesheet" href="css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin_color.css">

</head>

<body class="theme-primary">
	<div class="wrapper">
		<?php include('header.php'); ?>
		
		<section class="pb-50 bg-white pt-200">
			<div class="container">
				<div class="row  justify-content-between">
					<div class="col-lg-8 col-12">
						<div class="popup-vdo mt-30 mt-md-0">
							<img src="../images/map-laptopview.png" class="img-fluid rounded" alt="">
							<div class="bg-light py-30">
								<h2 class="text-center fw-light">Members Verified for Your Security</h2>
								<div class="row text-center justify-content-center">
									<div class="col-2">
										<img src="../images/email-icon.png" alt="Email">
										<p class="mt-2">Email</p>
									</div>
									<div class="col-2">
										<img src="../images/mobile-icon.png" alt="Mobile">
										<p class="mt-2">Mobile</p>
									</div>
									<div class="col-2">
										<img src="../images/cc-icon.png" alt="Email">
										<p class="mt-2">Credit Card</p>
									</div>
									<div class="col-2">
										<img src="../images/dl-icon.png" alt="Email">
										<p class="mt-2">Drivers License</p>
									</div>
									<div class="col-2">
										<img src="../images/bl-icon.png" alt="Email">
										<p class="mt-2">Business License</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="box box-body mb-0 p-0 border-0">
							<ul class="nav nav-tabs nav-fill border-0" role="tablist">
								<li class="nav-item"> <a class="nav-link active py-10 m-0 rounded-0 border border-0" data-bs-toggle="tab" href="#login" role="tab">Login</a> </li>
								<li class="nav-item"> <a class="nav-link py-10 m-0 rounded-0 border border-0" data-bs-toggle="tab" href="#register" role="tab">Register</a> </li>
							</ul>
						</div>
						<div class="box box-body mb-0">
							<div class="tab-content">
								<div class="tab-pane active" id="login" role="tabpanel">
									<div>				
										<div class="content-top-agile pb-0 pt-20">
											<h2 class="text-primary">Let's Get Started</h2>
											<p class="mb-0">Sign in to continue to Anytimejobs.</p>							
										</div>
										<div class="p-15">
											<form action="index.php" method="post">
												<div class="form-group">
													<div class="input-group mb-15">
														<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
														<input type="text" class="form-control ps-15 bg-transparent" placeholder="Username">
													</div>
												</div>
												<div class="form-group">
													<div class="input-group mb-15">
														<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
														<input type="password" class="form-control ps-15 bg-transparent" placeholder="Password">
													</div>
												</div>
												<div class="row">
													<div class="col-6">
													<div class="checkbox ms-5">
														<input type="checkbox" id="basic_checkbox_1">
														<label for="basic_checkbox_1" class="form-label">Remember Me</label>
													</div>
													</div>
													<!-- /.col -->
													<div class="col-6">
													<div class="fog-pwd text-end">
														<a href="javascript:void(0)" class="hover-warning"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
													</div>
													</div>
													<!-- /.col -->
													<div class="col-12 text-center">
													<button type="submit" class="btn btn-primary w-p100 mt-15">SIGN IN</button>
													</div>
													<!-- /.col -->
												</div>
											</form>	
											<div class="text-center">
												<p class="m-20">- OR -</p>
												<p class="my-10 justify-content-center">
													<a class="btn btn-social-icon btn-outline w-p100 btn-facebook" href="#"><i class="fab fa-facebook-f float-start my-5"></i> Continue With Facebook</a>
												</p>
												<p class="my-10 justify-content-center">
													<a class="btn btn-social-icon btn-outline w-p100 btn-google" href="#"><i class="fab fa-google float-start my-5"></i> Continue With Google</a>
												</p>
												<p class="my-10 justify-content-center">
													<a class="btn btn-social-icon btn-outline w-p100 btn-apple" href="#"><i class="fab fa-apple float-start my-5"></i> Continue With Apple</a>
												</p>
											</div>	
										</div>
										
									</div>
								</div>
								<div class="tab-pane" id="register" role="tabpanel">
									<div>									
										<div class="content-top-agile pb-0 pt-20">
											<h2 class="text-primary">Get started with Us</h2>
											<p class="mb-0">Register a New Membership</p>							
										</div>
										<div class="p-15">
											<form action="index.php" method="post">
												<div class="form-group">
													<div class="input-group mb-15">
														<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
														<input type="text" class="form-control ps-15 bg-transparent" placeholder="Full Name">
													</div>
												</div>
												<div class="form-group">
													<div class="input-group mb-15">
														<span class="input-group-text bg-transparent"><i class="ti-email"></i></span>
														<input type="email" class="form-control ps-15 bg-transparent" placeholder="Email">
													</div>
												</div>
												<div class="form-group">
													<div class="input-group mb-15">
														<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
														<input type="password" class="form-control ps-15 bg-transparent" placeholder="Password">
													</div>
												</div>
												<div class="form-group">
													<div class="input-group mb-15">
														<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
														<input type="password" class="form-control ps-15 bg-transparent" placeholder="Retype Password">
													</div>
												</div>
												<div class="row">
													<div class="col-12">
													<div class="checkbox ms-5">
														<input type="checkbox" id="basic_checkbox_22">
														<label for="basic_checkbox_22" class="form-label">You must be 18 years or older to use Anytime Jobs and agree to <a href="#" class="text-warning"><b>Terms and Conditions.</b></a></label>
													</div>
													</div>
													<!-- /.col -->
													<div class="col-12 text-center">
													<button type="submit" class="btn btn-primary w-p100 mt-15">Register</button>
													</div>
													<!-- /.col -->
												</div>
											</form>				
											<div class="text-center">
												<p class="m-20">- Register With -</p>
												<p class="my-10 justify-content-center">
													<a class="btn btn-social-icon btn-outline w-p100 btn-facebook" href="#"><i class="fab fa-facebook-f float-start my-5"></i> Continue With Facebook</a>
												</p>
												<p class="my-10 justify-content-center">
													<a class="btn btn-social-icon btn-outline w-p100 btn-google" href="#"><i class="fab fa-google float-start my-5"></i> Continue With Google</a>
												</p>
												<p class="my-10 justify-content-center">
													<a class="btn btn-social-icon btn-outline w-p100 btn-apple" href="#"><i class="fab fa-apple float-start my-5"></i> Continue With Apple</a>
												</p>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="bg-white ps-30 pe-30">
			<div class="container-fluid">
				<div class="row justify-content-end">
				</div>
			</div>
		</section>
		
		<?php include('footer.php'); ?>
	</div>
	
	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>	
	<!-- Corenav Master JavaScript -->
    <script src="corenav-master/coreNavigation-1.1.3.js"></script>
    <script src="js/nav.js"></script>
	<script src="../assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
	<script src="../assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
    <script src="../assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script>

	<script src="../assets/vendor_components/moment/min/moment.min.js"></script>
	<script src="../assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js"></script>
	<script src="js/jquery.smartmenus.js"></script>
	<script src="js/menus.js"></script>
	<script src="js/template.js"></script>
</body>
</html>
