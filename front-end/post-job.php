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
												<form class="form" method="post" enctype="multipart/form-data">
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
																	<label class="form-label">YouTube Video of Project :</label>
																	<input type="text" class="form-control" placeholder="Enter YouTube URL" name="job-title" id="job-title">
																</div>
															</div>
															<div class="col-md-7 col-12  mb-15">
																<div class="form-group">
																	<label class="form-label">Upload a Photo :</label> <span class="text-danger" id="error-upload-photo"></span><br>
																	<label class="upload-photo">
																		<input type="file" id="upload-photo" name="upload-photo[]" multiple accept=".jpg, .jpeg, .png" >
																	</label>
																</div>
															</div>
															<div class="col-md-7 col-12  mb-15">
																<div class="form-group">
																	<label class="form-label">Price :</label><br>
																	<button type="button" class="btn btn-outline btn-info btn-xs">$10</button>
																	<button type="button" class="btn btn-outline btn-info btn-xs">$15</button>
																	<button type="button" class="btn btn-outline btn-info btn-xs">$20</button>
																	<button type="button" class="btn btn-outline btn-info btn-xs">$25</button>
																	<button type="button" class="btn btn-outline btn-info btn-xs">$30</button>
																	<button type="button" class="btn btn-outline btn-info btn-xs">$40</button>
																	<button type="button" class="btn btn-outline btn-info btn-xs">$50</button>
																	<button type="button" class="btn btn-outline btn-info btn-xs">$100</button>
																	<button type="button" class="btn btn-outline btn-info btn-xs">$200</button>
																	<button type="button" class="btn btn-outline btn-info btn-xs">$250</button>
																	<button type="button" class="btn btn-outline btn-info btn-xs">$500</button>
																	<button type="button" class="btn btn-outline btn-info btn-xs">$750</button>
																	<button type="button" class="btn btn-outline btn-info btn-xs">$1000</button>
																</div>
															</div>
															<div class="col-md-7 col-12 mb-15">
																
																<div class="form-group">
																	<label class="form-label">Job Location : </label>
																	<span class="text-danger">* Your address will only be seen by approved service provider</span>
																	<input type="text" class="form-control" placeholder="Address" name="job_address" id="job_address" onFocus="geolocate()">
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
																				<option value="" selected="selected">Select a State</option>
																				<option value="AL">Alabama</option>
																				<option value="AK">Alaska</option>
																				<option value="AZ">Arizona</option>
																				<option value="AR">Arkansas</option>
																				<option value="CA">California</option>
																				<option value="CO">Colorado</option>
																				<option value="CT">Connecticut</option>
																				<option value="DE">Delaware</option>
																				<option value="DC">District Of Columbia</option>
																				<option value="FL">Florida</option>
																				<option value="GA">Georgia</option>
																				<option value="HI">Hawaii</option>
																				<option value="ID">Idaho</option>
																				<option value="IL">Illinois</option>
																				<option value="IN">Indiana</option>
																				<option value="IA">Iowa</option>
																				<option value="KS">Kansas</option>
																				<option value="KY">Kentucky</option>
																				<option value="LA">Louisiana</option>
																				<option value="ME">Maine</option>
																				<option value="MD">Maryland</option>
																				<option value="MA">Massachusetts</option>
																				<option value="MI">Michigan</option>
																				<option value="MN">Minnesota</option>
																				<option value="MS">Mississippi</option>
																				<option value="MO">Missouri</option>
																				<option value="MT">Montana</option>
																				<option value="NE">Nebraska</option>
																				<option value="NV">Nevada</option>
																				<option value="NH">New Hampshire</option>
																				<option value="NJ">New Jersey</option>
																				<option value="NM">New Mexico</option>
																				<option value="NY">New York</option>
																				<option value="NC">North Carolina</option>
																				<option value="ND">North Dakota</option>
																				<option value="OH">Ohio</option>
																				<option value="OK">Oklahoma</option>
																				<option value="OR">Oregon</option>
																				<option value="PA">Pennsylvania</option>
																				<option value="RI">Rhode Island</option>
																				<option value="SC">South Carolina</option>
																				<option value="SD">South Dakota</option>
																				<option value="TN">Tennessee</option>
																				<option value="TX">Texas</option>
																				<option value="UT">Utah</option>
																				<option value="VT">Vermont</option>
																				<option value="VA">Virginia</option>
																				<option value="WA">Washington</option>
																				<option value="WV">West Virginia</option>
																				<option value="WI">Wisconsin</option>
																				<option value="WY">Wyoming</option>
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


																	<div class="" role="group" aria-label="Basic checkbox toggle button group">
																		<input type="checkbox" class="btn-check" id="email_verification" name="job_verification[]" autocomplete="off">
																		<label class="btn btn-outline btn-info btn-sm w-50 mb-10 me-10 px-0" for="email_verification"><i class="fa fa-envelope"></i> </label>Email Verification<br>

																		<input type="checkbox" class="btn-check" id="mobile_verification" name="job_verification[]" autocomplete="off">
																		<label class="btn btn-outline  btn-info btn-sm w-50 mb-10 me-10 px-0" for="mobile_verification"><i class="fa fa-phone"></i> </label>Mobile Verification<br>

																		<input type="checkbox" class="btn-check" id="credit_card_verification" name="job_verification[]" autocomplete="off">
																		<label class="btn btn-outline  btn-info btn-sm w-50 mb-10 me-10 px-0" for="credit_card_verification"><i class="fa fa-credit-card"></i> </label>Credit Card Verification<br>

																		<input type="checkbox" class="btn-check" id="drivers_license_verification" name="job_verification[]" autocomplete="off">
																		<label class="btn btn-outline  btn-info btn-sm w-50 mb-10 me-10 px-0" for="drivers_license_verification"><i class="fa fa-id-card"></i> </label>Drivers License Verification<br>

																		<input type="checkbox" class="btn-check" id="covid_vaccine_verification" name="job_verification[]" autocomplete="off">
																		<label class="btn btn-outline  btn-info btn-sm w-50 mb-10 me-10 px-0" for="covid_vaccine_verification"><i class="fa fa-syringe"></i> </label>Covid Vaccine Verification<br>
																	</div>
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
									<div class="tab-pane fade" id="pills-my-verifications" role="tabpanel" aria-labelledby="pills-my-verifications-tab">									
										<h4 class="box-title mb-0">
											My Verifications
										</h4>
										<hr>
										<!-- Nav tabs -->
										<ul class="nav nav-tabs" role="tablist">
											<li class="nav-item"> <a class="nav-link ms-0 active" data-bs-toggle="tab" href="#verify-email" role="tab"><span class="hidden-sm-up"><i class="fa fa-envelope"></i></span> <span class="hidden-xs-down">Verify Email</span></a> </li>
											<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#verify-mobile-phone" role="tab"><span class="hidden-sm-up"><i class="fa fa-phone"></i></span> <span class="hidden-xs-down">Verify Mobile Phone</span></a> </li>
											<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#verify-credit-card" role="tab"><span class="hidden-sm-up"><i class="fa fa-credit-card"></i></span> <span class="hidden-xs-down">Verify Credit Card</span></a> </li>
											<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#verify-drivers-license  " role="tab"><span class="hidden-sm-up"><i class="fa fa-id-card"></i></span> <span class="hidden-xs-down">Verify Drivers License</span></a> </li>
											<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#verify-covid-vaccine" role="tab"><span class="hidden-sm-up"><i class="fa fa-syringe"></i></span> <span class="hidden-xs-down">Verify Covid Vaccine</span></a> </li>
											
										</ul>

										<!-- Tab panes -->
										<div class="tab-content tabcontent-border">
											<div class="tab-pane active" id="verify-email" role="tabpanel">
												<div class="p-30">
													<div class="row">
														<div class="col-12">
															<form class="form" method="post" enctype="multipart/form-data">
																<div>
																	<div class="row">
																		<div class="col-md-7 col-12  mb-15">
																			<div class="form-group has-success">
																				<label class="form-label">Email Address :</label>
																				<div class="input-group">
																					<input type="text" class="form-control" placeholder="Email Address" name="verify-email-input" id="verify-email-input" value ="devteam@gobigweb.com" disabled>
																					<span class="input-group-addon"><i class="fa fa-check mt-5"></i></span>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>												
															</form>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="verify-mobile-phone" role="tabpanel">
												<div class="p-30">
													<div class="row">
														<div class="col-12">
															<form class="form" method="post" enctype="multipart/form-data">
																<div>
																	<div class="row">
																		<div class="col-md-7 col-12  mb-15">
																			<div class="form-group">
																				<label class="form-label">Phone Number :</label>
																				<input type="text" class="form-control" placeholder="Phone Number" name="verify-phone-number-input" id="verify-phone-number-input" >
																					
																			</div>
																			<div class="d-flex gap-items-2">
																				<button type="submit" class="btn btn-success">Verify Number</button>
																			</div>
																		</div>
																	</div>
																</div>												
															</form>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane " id="verify-credit-card" role="tabpanel">											
												<div class="p-30">
													<div class="row">
														<div class="col-12">
															<form class="form" method="post" enctype="multipart/form-data">
																<div>
																	<div class="row">
																		<div class="col-lg-7 col-md-6 col-12">
																			<div class="form-group">
																				<label class="form-label">Name of Card :</label>
																				<input type="text" class="form-control" placeholder="Name of Card" name="verify-name-of-card-input" id="verify-name-of-card-input" >
																			</div>
																			<div class="form-group">
																				<label class="form-label">Address :</label>
																				<input type="text" class="form-control" placeholder="Address" name="verify-card-address-input" id="verify-card-address-input" >
																			</div>
																			<div class="form-group">
																				<label class="form-label">Card Number :</label>
																				<input type="text" class="form-control" placeholder="Card Number" name="verify-card-number-input" id="verify-card-number-input" >
																			</div>
																			<div class="row">
																				<div class="col-7">
																					<div class="form-group">
																						<label class="form-label">Expiration Date</label>
																						<input type="text" class="form-control" name="verify-expiration-date-input" id="verify-expiration-date-input" placeholder="MM / YY" >
																					</div>
																				</div>
																				<div class="col-5 pull-right">
																					<div class="form-group">
																						<label class="form-label">CV Code</label>
																						<input type="text" class="form-control" name="verify-cvc-input" id="verify-cvc-input" placeholder="CVC"> </div>
																				</div>
																			</div>
																			<div class="d-flex gap-items-2">
																				<button type="submit" class="btn btn-success">Verify Card Number</button>
																			</div>
																		</div>
																		<div class="col-lg-5 col-md-6 col-12">
																			<h3 class="box-title mt-10">Payment Info</h3>
																			<p>We'll authorize $1.00 to verify user</p>
																		</div>
																	</div>
																</div>												
															</form>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="verify-drivers-license" role="tabpanel">
												<div class="p-30">
													<div class="row">
														<div class="col-12">
															<form class="form" method="post" enctype="multipart/form-data">
																<div>
																	<div class="row">
																		<div class="col-md-7 col-12  mb-15">
																			<div class="form-group">
																				<label class="form-label">License Number :</label>
																				<input type="text" class="form-control" placeholder="License  Number" name="verify-license-number-input" id="verify-license-number-input" >
																			</div>
																			<div class="form-group">
																				<label class="form-label">Upload Front and Back Picture of Drivers License :</label> 
																				<label class="text-danger" id="error-verify-license-upload"></label><br>
																				<label class="verify-license-upload">
																					<input type="file" id="verify-license-upload" name="verify-license-upload[]" multiple accept=".jpg, .jpeg, .png">
																				</label>
																			</div>
																			<div class="d-flex gap-items-2">
																				<button type="submit" class="btn btn-success">Verify License Number</button>
																			</div>
																		</div>
																	</div>
																</div>												
															</form>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="verify-covid-vaccine" role="tabpanel">
												<div class="p-30">
													<div class="row">
														<div class="col-12">
															<form class="form" method="post" enctype="multipart/form-data">
																<div>
																	<div class="row">
																		<div class="col-md-7 col-12  mb-15">
																			<div class="form-group">
																				<label class="form-label">Upload Picture of Covid Vaccine :</label> 
																				<label class="text-danger" id="error-verify-license-upload"></label><br>
																				<label class="verify-license-upload">
																					<input type="file"  name="verify-covid-vaccine-upload" id="verify-covid-vaccine-upload" accept=".jpg, .jpeg, .png">
																				</label>
																			</div>
																			<div class="d-flex gap-items-2">
																				<button type="submit" class="btn btn-success">Verify Covid Vaccine</button>
																			</div>
																		</div>
																	</div>
																</div>												
															</form>
														</div>
													</div>
												</div>
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
	
	</div>
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
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3KFF-PNXN3FrIAG3mi26WGcpiDYmNPdA&libraries=places&callback=initAutocomplete" async defer></script>
	<script src="js/jquery.smartmenus.js"></script>
	<script src="js/menus.js"></script>
	<script src="js/template.js"></script>
	<script src="js/pages/calendar.js"></script>
	<script>
		 $(document).ready(function(){
			$("#upload-photo").change(function(){
				var $fileUpload = $("#upload-photo");
				if (parseInt($fileUpload.get(0).files.length)>3){
					$('#error-upload-photo').text('You can only upload a maximum of 3 files');
					$fileUpload.val(null);
				}else{
					$('#error-upload-photo').text('');
				}
			});

			

			$("#verify-license-upload").change(function(){
				var $fileUpload = $("#verify-license-upload");
				if (parseInt($fileUpload.get(0).files.length)>2){
					$('#error-verify-license-upload').text('You can only upload a maximum of 2 files');
					$fileUpload.val(null);
				}else{
					$('#error-verify-license-upload').text('');
				}
			});
		});


	var placeSearch, autocomplete;
    var componentForm = {
    	street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
    };

    function initAutocomplete() {
    	// Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('job_address')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);

		autocomplete.setComponentRestrictions({'country': ['us']});
    }

    function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
        	document.getElementById(component).value = '';
          	document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          	var addressType = place.address_components[i].types[0];
          	if (componentForm[addressType]) {
            	var val = place.address_components[i][componentForm[addressType]];
            	document.getElementById(addressType).value = val;
          	}
        }
    }

    // Bias the autocomplete object to the user's geographical location,
    // as supplied by the browser's 'navigator.geolocation' object.
    function geolocate() {
        if (navigator.geolocation) {
    	    navigator.geolocation.getCurrentPosition(function(position) {
				var geolocation = {
					lat: position.coords.latitude,
					lng: position.coords.longitude
				};
				var circle = new google.maps.Circle({
					center: geolocation,
					radius: position.coords.accuracy
				});
            	autocomplete.setBounds(circle.getBounds());
        	});
        }
    }
	</script>
</body>
</html>
