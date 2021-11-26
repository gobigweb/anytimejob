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
	<link rel="stylesheet" href="css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin_color.css">

</head>

<body class="theme-primary">
	
	<?php include('header.php'); ?>
	
    <!---page Title --->
	<section class="bg-img pt-160 pb-10" data-overlay="7" style="background-image: url(../images/front-end-img/background/bg-8.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-center">						
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Page content -->

	<section class="pb-50 bg-white pt-50 ps-30 pe-30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-md-4 col-sm-12">
					<div class="side-block px-20 py-10 bg-white">
						<div class="widget courses-search-bx placeholdertx mb-30">
							<div class="form-group">
								<div class="input-group">
									<label>Search Keywords</label>
									<input name="name" type="text" required="" class="form-control">
								</div>
							</div>
						</div>
												
						<div class="widget">
							<h4 class="mb-25">Job Date</h4>
							<div class="widget placeholdertx mb-10">
								<div class="form-group">
									<div class="input-group">
										<input class="form-control" type="date" value="<?= date('Y-m-d'); ?>" id="date-input">
									</div>
								</div>
							</div>
						</div>
						<div class="widget">
							<h4 class="mb-25">Location (30 Miles)</h4>
							<div class="widget placeholdertx mb-10">
								<div class="form-group">
									<div class="input-group">
										<input name="name" type="text" class="form-control" placeholder="ZIP Code">
									</div>
								</div>
							</div>
						</div>
						<div class="widget">
							<h4 class="mb-25">Job Category</h4>
							<ul class="list-unstyled">
								<li>
									<input type="checkbox" id="basic_checkbox_6" class="filled-in">
									<label for="basic_checkbox_6" class="d-flex justify-content-between align-items-center form-label">
                                        Yard Work
										<span class="badge badge-sm badge-secondary-light">10</span>
									</label>
								</li>
								<li>
									<input type="checkbox" id="basic_checkbox_7" class="filled-in">
									<label for="basic_checkbox_7" class="d-flex justify-content-between align-items-center form-label">
                                        TV Mounting
										<span class="badge badge-sm badge-secondary-light">10</span>
									</label>
								</li>
								<li>
									<input type="checkbox" id="basic_checkbox_8" class="filled-in">
									<label for="basic_checkbox_8" class="d-flex justify-content-between align-items-center form-label">
                                        Handyman
										<span class="badge badge-sm badge-secondary-light">10</span>
									</label>
								</li>
								<li>
									<input type="checkbox" id="basic_checkbox_1" class="filled-in">
									<label for="basic_checkbox_1" class="d-flex justify-content-between align-items-center form-label">
                                        Help Moving
										<span class="badge badge-sm badge-secondary-light">10</span>
									</label>
								</li>
								<li>
									<input type="checkbox" id="basic_checkbox_2" class="filled-in">
									<label for="basic_checkbox_2" class="d-flex justify-content-between align-items-center form-label">
                                        Delivery Service
										<span class="badge badge-sm badge-secondary-light">08</span>
									</label>
								</li>
								<li>
									<input type="checkbox" id="basic_checkbox_3" class="filled-in">
									<label for="basic_checkbox_3" class="d-flex justify-content-between align-items-center form-label">
                                        Hang Pictures
										<span class="badge badge-sm badge-secondary-light">05</span>
									</label>
								</li>
								<li>
									<input type="checkbox" id="basic_checkbox_4" class="filled-in">
									<label for="basic_checkbox_4" class="d-flex justify-content-between align-items-center form-label">
                                        Lawn Care Services
										<span class="badge badge-sm badge-secondary-light">15</span>
									</label>
								</li>
								<li>
									<input type="checkbox" id="basic_checkbox_5" class="filled-in">
									<label for="basic_checkbox_5" class="d-flex justify-content-between align-items-center form-label">
                                        Painting
										<span class="badge badge-sm badge-secondary-light">02</span>
									</label>
								</li>
							</ul>
						</div>
						<div class="widget">
							<h4 class="pb-15 mb-25 bb-1">Offered Price</h4>
							<ul class="list-unstyled">
								<li>
									<input type="checkbox" id="oftype_1" class="filled-in">
									<label for="oftype_1">
										$100 - $250
									</label>
								</li>
								<li>
									<input type="checkbox" id="oftype_2" class="filled-in">
									<label for="oftype_2">
										$250 - $500 
									</label>
								</li>
								<li>
									<input type="checkbox" id="oftype_5" class="filled-in">
									<label for="oftype_5">
										$500+
									</label>
								</li>
							</ul>
						</div>
						<div class="widget">
							<h4 class="pb-15 mb-25 bb-1">Job Verification</h4>
							<ul class="list-unstyled">
								<li>
									<input type="checkbox" id="indutype_1" class="filled-in">
									<label for="indutype_1">
                                        Email Verification
									</label>
								</li>
								<li>
									<input type="checkbox" id="indutype_2" class="filled-in">
									<label for="indutype_2">
                                        Mobile Verification

									</label>
								</li>
								<li>
									<input type="checkbox" id="indutype_3" class="filled-in">
									<label for="indutype_3">
                                        Credit Card Verification
									</label>
								</li>
								<li>
									<input type="checkbox" id="indutype_4" class="filled-in">
									<label for="indutype_4">
                                        Drivers License Verification 
									</label>
								</li>
								<li>
									<input type="checkbox" id="indutype_5" class="filled-in">
									<label for="indutype_5">
                                        Covid Vaccine Verification
									</label>
								</li>
							</ul>
						</div>
					</div>	
				</div>
				<div class="col-lg-9 col-md-8 col-12">
					<div class="box">
						<div class="box-body p-0">
							<div class="bg-light p-10 d-lg-flex justify-content-between align-items-center rounded">
								<p class="mb-lg-0 mb-20">Showing 1 to 8 of 20 entries</p>
								<div class="d-flex justify-lg-content-end align-items-center">
									<select class="form-select w-150">
										<option selected>Sort By...</option>
										<option value="1">New</option>
										<option value="2">Top Rated</option>
										<option value="3">Populer</option>
									</select>
																	
								</div>
							</div>
						</div>
					</div>
					
					<div class="tab-content" id="pills-tabContent">
						
						<div class="tab-pane fade show active" id="pills-grid" role="tabpanel" aria-labelledby="pills-grid-tab">
							<div class="row">
								<div class="col-md-3 col-12">
									<div class="card text-center">
										<a href="#">
											<img src="../images/services/1.jpg" class="img-fluid" alt="">
										</a>
									  <div class="card-body">
										  <div class="mb-15">
											  <h5 class="card-title mb-0">Assemble a Table/Desk </h5>
										  </div>
										<p class="card-text"><i class="fa fa-map-marker-alt ms-20 me-5"></i> Chantilly, VA</p>
										<p class="card-text">Price $60</p>
									  </div>
									  <div class="card-footer justify-content-between d-flex align-items-center">
										<div class="text-muted"><i class="text-muted me-2 fa fa-clock-o"></i>30 min ago</div>
										<a href="#" class="waves-effect waves-light btn btn-primary">Accept Job</a>
									  </div>
									</div>
								</div>
                                <div class="col-md-3 col-12">
									<div class="card text-center">
										<a href="#">
											<img src="../images/services/2.jpg" class="img-fluid" alt="">
										</a>
									  <div class="card-body">
										  <div class="mb-15">
											  <h5 class="card-title mb-0">Mount a TV or Mirror </h5>
										  </div>
										<p class="card-text"><i class="fa fa-map-marker-alt ms-20 me-5"></i>  Sterling, VA</p>
										<p class="card-text">Price $70</p>
									  </div>
									  <div class="card-footer justify-content-between d-flex align-items-center">
										<div class="text-muted"><i class="text-muted me-2 fa fa-clock-o"></i>30 min ago</div>
										<a href="#" class="waves-effect waves-light btn btn-primary">Accept Job</a>
									  </div>
									</div>
								</div>
                                <div class="col-md-3 col-12">
									<div class="card text-center">
										<a href="#">
											<img src="../images/services/3.jpg" class="img-fluid" alt="">
										</a>
									  <div class="card-body">
										  <div class="mb-15">
											  <h5 class="card-title mb-0">Move Boxes via Truck </h5>
										  </div>
										<p class="card-text"><i class="fa fa-map-marker-alt ms-20 me-5"></i> Alexandria, VA </p>
										<p class="card-text">Price $70</p>
									  </div>
									  <div class="card-footer justify-content-between d-flex align-items-center">
										<div class="text-muted"><i class="text-muted me-2 fa fa-clock-o"></i>30 min ago</div>
										<a href="#" class="waves-effect waves-light btn btn-primary">Accept Job</a>
									  </div>
									</div>
								</div>                                
                                <div class="col-md-3 col-12">
									<div class="card text-center">
										<a href="#">
											<img src="../images/services/7.jpg" class="img-fluid" alt="">
										</a>
									  <div class="card-body">
										  <div class="mb-15">
											  <h5 class="card-title mb-0">Lift Furniture Upstairs </h5>
										  </div>
										<p class="card-text"><i class="fa fa-map-marker-alt ms-20 me-5"></i>  Santee, CA </p>
										<p class="card-text">Price $55</p>
									  </div>
									  <div class="card-footer justify-content-between d-flex align-items-center">
										<div class="text-muted"><i class="text-muted me-2 fa fa-clock-o"></i>30 min ago</div>
										<a href="#" class="waves-effect waves-light btn btn-primary">Accept Job</a>
									  </div>
									</div>
								</div>                                
                                <div class="col-md-3 col-12">
									<div class="card text-center">
										<a href="#">
											<img src="../images/services/4.jpg" class="img-fluid" alt="">
										</a>
									  <div class="card-body">
										  <div class="mb-15">
											  <h5 class="card-title mb-0"> Fix a Running Toilet</h5>
										  </div>
										<p class="card-text"><i class="fa fa-map-marker-alt ms-20 me-5"></i>  Miami, FL</p>
										<p class="card-text">Price $80</p>
									  </div>
									  <div class="card-footer justify-content-between d-flex align-items-center">
										<div class="text-muted"><i class="text-muted me-2 fa fa-clock-o"></i>30 min ago</div>
										<a href="#" class="waves-effect waves-light btn btn-primary">Accept Job</a>
									  </div>
									</div>
								</div>                                
                                <div class="col-md-3 col-12">
									<div class="card text-center">
										<a href="#">
											<img src="../images/services/5.jpg" class="img-fluid" alt="">
										</a>
									  <div class="card-body">
										  <div class="mb-15">
											  <h5 class="card-title mb-0">Office/Home Delivery </h5>
										  </div>
										<p class="card-text"><i class="fa fa-map-marker-alt ms-20 me-5"></i>  Rockville, MD</p>
										<p class="card-text">Price $30</p>
									  </div>
									  <div class="card-footer justify-content-between d-flex align-items-center">
										<div class="text-muted"><i class="text-muted me-2 fa fa-clock-o"></i>30 min ago</div>
										<a href="#" class="waves-effect waves-light btn btn-primary">Accept Job</a>
									  </div>
									</div>
								</div>                      
                                <div class="col-md-3 col-12">
									<div class="card text-center">
										<a href="#">
											<img src="../images/services/6.jpg" class="img-fluid" alt="">
										</a>
									  <div class="card-body">
										  <div class="mb-15">
											  <h5 class="card-title mb-0">Plant Flowers</h5>
										  </div>
										<p class="card-text"><i class="fa fa-map-marker-alt ms-20 me-5"></i> Manassas, VA </p>
										<p class="card-text">Price $80</p>
									  </div>
									  <div class="card-footer justify-content-between d-flex align-items-center">
										<div class="text-muted"><i class="text-muted me-2 fa fa-clock-o"></i>30 min ago</div>
										<a href="#" class="waves-effect waves-light btn btn-primary">Accept Job</a>
									  </div>
									</div>
								</div>                                
                                <div class="col-md-3 col-12">
									<div class="card text-center">
										<a href="#">
											<img src="../images/services/8.jpg" class="img-fluid" alt="">
										</a>
									  <div class="card-body">
										  <div class="mb-15">
											  <h5 class="card-title mb-0"> Move Boxes via Truck</h5>
										  </div>
										<p class="card-text"><i class="fa fa-map-marker-alt ms-20 me-5"></i>  Silver Spring, MD</p>
										<p class="card-text">Price $50</p>
									  </div>
									  <div class="card-footer justify-content-between d-flex align-items-center">
										<div class="text-muted"><i class="text-muted me-2 fa fa-clock-o"></i>30 min ago</div>
										<a href="#" class="waves-effect waves-light btn btn-primary">Accept Job</a>
									  </div>
									</div>
								</div>                                
                                
							</div>
						</div>
					</div>
					<div aria-label="Page navigation example">
					  <ul class="pagination mb-0">
						<li class="page-item"><a class="page-link" href="#">Previous</a></li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#">Next</a></li>
					  </ul>
					</div>
				</div>	
			</div>
		</div>
	</section>
	
	<?php include('footer.php'); ?>
	
	
	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>	
	<!-- Corenav Master JavaScript -->
    <script src="corenav-master/coreNavigation-1.1.3.js"></script>
    <script src="js/nav.js"></script>
	<script src="../assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
	<script src="../assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
    <script src="../assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script>

	<script src="../assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="../assets/vendor_components/select2/dist/js/select2.full.js"></script>
	<script src="../assets/vendor_components/vertical-slider/jquery.vticker-min.js"></script>
	
	<script src="js/template.js"></script>
	<script src="js/pages/widget.js"></script>
</body>
</html>
