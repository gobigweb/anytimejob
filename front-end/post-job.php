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

	<section class="py-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-4 col-12">					
					<div class="position-sticky t-100">
						<div class="box box-widget widget-user-2">
							<div class="widget-user-header bg-secondary-light">
							  <div class="widget-user-image">
								<img class="rounded-circle bg-danger" src="../images/front-end-img/avatar/1.png" alt="User Avatar">
								<i class="fa fa-dot success"></i>
							  </div>
							  <h3 class="widget-user-username">Amanda Clark </h3>
							  <h6 class="widget-user-desc">Active</h6>
							</div>
							<div class="box-footer no-padding">
								<ul class="nav d-block nav-stacked fs-16" id="pills-tab23" role="tablist">
									<li class="nav-item bb-1">
										<a class="py-10 nav-link active" id="pills-create-a-Job-tab" data-bs-toggle="pill" href="#pills-create-a-Job" role="tab" aria-controls="pills-edit" aria-selected="true">
											<span class="me-10 fa fa-edit"><span class="path1"></span><span class="path2"></span></span>Create a Job 
										</a>
									</li>
									<li class="nav-item bb-1">
										<a class="py-10 nav-link" id="pills-payments-tab" data-bs-toggle="pill" href="#pills-payments" role="tab" aria-controls="pills-payments" aria-selected="true">
											<span class="me-10 fa fa-list"><span class="path1"></span><span class="path2"></span></span>Job List
										</a>
									</li>
									<li class="nav-item bb-1">
										<a class="py-10 nav-link" id="pills-calendar-tab" data-bs-toggle="pill" href="#pills-calendar" role="tab" aria-controls="pills-calendar" aria-selected="true">
											<span class="me-10 icon-Layout-grid"><span class="path1"></span><span class="path2"></span></span>Calendar
										</a>
									</li>
									<li class="nav-item bb-1">
										<a class="py-10 nav-link" id="pills-my-profile-tab" data-bs-toggle="pill" href="#pills-my-profile" role="tab" aria-controls="pills-my-profile" aria-selected="true">
											<span class="me-10 fa fa-user"><span class="path1"></span><span class="path2"></span></span>My Profile
										</a>
									</li>
									<li class="nav-item bb-1">
										<a class="py-10 nav-link" id="pills-my-verifications-tab" data-bs-toggle="pill" href="#pills-my-verifications" role="tab" aria-controls="pills-my-verifications" aria-selected="true">
											<span class="me-10 fa fa-check"><span class="path1"></span><span class="path2"></span></span>My Verifications
										</a>
									</li>
									<li class="nav-item">
										<a class="py-10 nav-link" href="login.php">
											<span class="me-10 icon-Unlock"></span>Logout
										</a>
									</li>
								</ul>
							</div>
					   </div>
						
					</div>
				</div>

				<div class="col-lg-9 col-md-8 col-12">
					<div class="box">
						<div class="box-body">
							<div class="tab-content" id="pills-tabContent23">
								<div class="tab-pane fade show active" id="pills-create-a-Job" role="tabpanel" aria-labelledby="pills-create-a-Job-tab">
									<div class="row">
										<div class="col-12">
											<form class="form">
												<div>
													<h4 class="box-title text-primary"><span class="fa fa-edit me-15"></span> Create a Job</h4>
													<hr class="my-15">
													<div class="row">
														<div class="col-md-7 col-12 mb-15">
															<div class="form-group">
														    	<label class="form-label">Job Category</label>
														    	<select class="form-select form-white form-control" data-placeholder="Choose a Job Category..." id="job-category" name="job-category">
																	<option value="Yard Work">Yard Work</option>
																	<option value="TV Mounting">TV Mounting</option>
																	<option value="Handyman">Handyman</option>
																	<option value="Help Moving">Help Moving</option>
																	<option value="Delivery Service">Delivery Service</option>
																	<option value="Hang Pictures">Hang Pictures</option>
																	<option value="Lawn Care Services">Lawn Care Services</option>
																	<option value="Painting">Painting</option>
																	<option value="Grocery Shopping & Delivery">Grocery Shopping & Delivery</option>
																	<option value="Furniture Assembly">Furniture Assembly</option>
																	<option value="Lighting Installation">Lighting Installation</option>
																	<option value="Virtual & Online Tasks">Virtual & Online Tasks</option>
																	<option value="Contactless Tasks">Contactless Tasks</option>
																	<option value="Volunteer Help">Volunteer Help</option>
																	<option value="IKEA Services">IKEA Services</option>
																</select>
															</div>
													  	</div>
													  	<div class="col-md-7 col-12  mb-15">
															<div class="form-group">
														    	<label class="form-label">Job Title :</label>
														    	<input type="text" class="form-control" placeholder="Job Title" name="job-title" id="job-title">
															</div>
															<div class="form-group">
														    	<label class="form-label">Job Description :</label>
														    	<textarea rows="4" class="form-control" placeholder="Job Description" id="job-description" name="job-description"></textarea>
															</div>
													  	</div>
													  	<div class="col-md-7 col-12  mb-15">
															<div class="form-group">
														    	<label class="form-label">Upload a Photo :</label><br>
														    	<label class="upload-photo">
                                                                	<input type="file" id="upload-photo" name="upload-photo">
                                                            	</label>
															</div>
													  	</div>
														<div class="col-md-7 col-12  mb-15">
															<div class="form-group">
														    	<label class="form-label">Price :</label><br>
														    	<button type="button" class="btn btn-outline btn-info btn-xs">$1</button>
                           										<button type="button" class="btn btn-outline btn-info btn-xs">$5</button>
                            									<button type="button" class="btn btn-outline btn-info btn-xs">$10</button>
                            									<button type="button" class="btn btn-outline btn-info btn-xs">$15</button>
                            									<button type="button" class="btn btn-outline btn-info btn-xs">$20</button>
                            									<button type="button" class="btn btn-outline btn-info btn-xs">$25</button>
                            									<button type="button" class="btn btn-outline btn-info btn-xs">$30</button>
                            									<button type="button" class="btn btn-outline btn-info btn-xs">$40</button>
                            									<button type="button" class="btn btn-outline btn-info btn-xs">$50</button>
                            									<button type="button" class="btn btn-outline btn-info btn-xs">$100</button>
                            									<button type="button" class="btn btn-outline btn-info btn-xs">$200</button>
                            									<button type="button" class="btn btn-outline btn-info btn-xs">$1000</button>
															</div>
													  	</div>
														<div class="col-md-7 col-12 mb-15">
															
															<div class="form-group">
																<label class="form-label">Job Location : </label>
																<span class="text-danger">* Your address will only be seen by approved service provider</span>
																<input type="text" class="form-control" placeholder="Address" name="job-address" id="job-address">
															</div>
															<div class="row">
																<div class="col-md-4 col-12">
																	<div class="form-group">
																		<input type="text" class="form-control" placeholder="City" name="job-city" id="job-city">
																	</div>
																</div>
																<div class="col-md-4 col-12">
																	<div class="form-group">
																		<select class="form-select form-white form-control" data-placeholder="Choose a State" id="job-state" name="job-state">
																			<option value="">State</option>
																		</select>
																	</div>
																</div>
																<div class="col-md-4 col-12">
																	<div class="form-group">
																		<input type="text" class="form-control" placeholder="ZIP Code" name="job-zip-code" id="job-zip-code">
																	</div>
																</div>
															</div>
													  	</div>
														<div class="col-md-7 col-12  mb-15">
															<div class="form-group">
														    	<label class="form-label">Job Verification :</label><br>
														    	<button type="button" class="btn btn-outline btn-info btn-sm w-40 mb-10 me-10"><i class="fa fa-envelope"></i></button> Email Verification <br>
                            									<button type="button" class="btn btn-outline btn-info btn-sm w-40 mb-10 me-10"><i class="fa fa-phone"></i></button> Mobile Verification <br>
                            									<button type="button" class="btn btn-outline btn-info btn-sm w-40 mb-10 me-10"><i class="fa fa-credit-card"></i></button> Credit Card Verification <br>
                            									<button type="button" class="btn btn-outline btn-info btn-sm w-40 mb-10 me-10"><i class="fas fa-id-card"></i></button> Drivers License Verification <br>
                            									<button type="button" class="btn btn-outline btn-info btn-sm w-40 mb-10 me-10"><i class="fa fa-syringe"></i></button> Covid Vaccine Verification <br>
															</div>
													  	</div>
													</div>
												</div>
												<div class="d-flex justify-content-end gap-items-2">
													<button type="submit" class="btn btn-success">
														<i class="ti-save-alt"></i> Submit
													</button>
													<button type="button" class="btn btn-danger">
													  	<i class="ti-trash"></i> Cancel
													</button>
												</div>  
											</form>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-payments" role="tabpanel" aria-labelledby="pills-payments-tab">									
									<h4 class="box-title mb-0">
									<span class="fa fa-list me-15"></span> Job List
									</h4>
									<hr>
									
									<div class="table-responsive mt-30">
									  <table class="table table-striped">
									  		<thead>
												<tr class="bg-dark">
												  <th>Invoice ID</th>
												  <th>Category</th>
												  <th>Timings</th>
												  <th>Fees</th>
												  <th>Action</th>
												</tr>										
									  		</thead>
									  		<tbody>
												<tr>
												  <td>#1548348</td>
												  <td>Computer Science</td>
												  <td>8:45 am- 9:45 am</td>
												  <td>$479</td>
												  <td>
													<a class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
													<a class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fas fa-trash-alt"></i></a>
												  </td>
												</tr>
												<tr>
												  <td>#154872</td>
												  <td>It Networking</td>
												  <td>8:45 am- 9:45 am</td>
												  <td>$479</td>
												  <td>
													<a class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
													<a class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fas fa-trash-alt"></i></a>
												  </td>
												</tr>
												<tr>
												  <td>#84575</td>
												  <td>Medical</td>
												  <td>8:45 am- 9:45 am</td>
												  <td>$479</td>
												  <td>
													<a class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
													<a class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fas fa-trash-alt"></i></a>
												  </td>
												</tr>
												<tr>
												  <td>#84575</td>
												  <td>IT & Software</td>
												  <td>8:45 am- 9:45 am</td>
												  <td>$479</td>
												  <td>
													<a class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
													<a class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fas fa-trash-alt"></i></a>
												  </td>
												</tr>
												<tr>
												  <td>#42518</td>
												  <td>Programming Language</td>
												  <td>8:45 am- 9:45 am</td>
												  <td>$479</td>
												  <td>
													<a class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
													<a class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fas fa-trash-alt"></i></a>
												  </td>
												</tr>
												<tr>
												  <td>#845962</td>
												  <td>Technology</td>
												  <td>8:45 am- 9:45 am</td>
												  <td>$479</td>
												  <td>
													<a class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
													<a class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fas fa-trash-alt"></i></a>
												  </td>
												</tr>
												<tr>
												  <td>#12548</td>
												  <td>Business</td>
												  <td>8:45 am- 9:45 am</td>
												  <td>$479</td>
												  <td>
													<a class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
													<a class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fas fa-trash-alt"></i></a>
												  </td>
												</tr>
												<tr>
												  <td>#452185</td>
												  <td>UI Design</td>
												  <td>8:45 am- 9:45 am</td>
												  <td>$479</td>
												  <td>
													<a class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
													<a class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fas fa-trash-alt"></i></a>
												  </td>
												</tr>
												<tr>
												  <td>#1548348</td>
												  <td>General</td>
												  <td>8:45 am- 9:45 am</td>
												  <td>$479</td>
												  <td>
													<a class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
													<a class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fas fa-trash-alt"></i></a>
												  </td>
												</tr>
												<tr>
												  <td>#845457</td>
												  <td>Graphic design</td>
												  <td>8:45 am- 9:45 am</td>
												  <td>$479</td>
												  <td>
													<a class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
													<a class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fas fa-trash-alt"></i></a>
												  </td>
												</tr>										
									  		</tbody>
										</table>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-calendar" role="tabpanel" aria-labelledby="pills-calendar-tab">								
									<h4 class="box-title mb-0">
										Calendar
									</h4>
									<hr>
									<div class="row">	
									  <div class="col-12">
										  <div id="calendar"></div> 
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
	<script src="../assets/vendor_components/jquery-ui/jquery-ui.min.js"></script>
	<script src="../assets/vendor_components/fullcalendar/lib/moment.min.js"></script>
	<script src="../assets/vendor_components/fullcalendar/fullcalendar.min.js"></script>
	
	<script src="js/template.js"></script>
	<script src="js/pages/calendar.js"></script>
</body>
</html>
