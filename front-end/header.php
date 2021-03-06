<header class="top-bar left-menu">
    <nav hidden class="nav-white  full-width header-fancy top-0 ps-10 pe-10 bg-white">
        <div class="container-fluid">
            <div class="row justify-content-end">
                <div class="col-xl-2 col-md-6 col-12 nav-header">
                    <a href="index.php" class="brand text-center">
                        <img src="../images/logo-home.svg" alt=""/>
                    </a>
                    <button class="toggle-bar mt-20">
                        <span class="ti-menu"></span>
                    </button>	
                </div>
                <div class="col-xl-4 col-md-6 col-12">
                    <form class="d-flex mt-xl-40 mt-lg-30 mt-md-15">
                        <div class="input-group ">
                            <input type="text" class="form-control" placeholder="Search" name="search">				      
                            <button class="input-group-text bg-primary text-white"><i class="fa fa-search"></i></button>
                        </div>
                    </form>			  
                </div>
                <div class="col-xl-4 col-md-6 col-12">
                    <h3 class="text-primary mt-xl-45"> The simpler way to find job anytime!</h3>
                </div>
                <div class="col-xl-2 col-md-6 col-12">
                    <ul class="menu mt-xl-40 float-xl-end">	
                        <li>
                            <a href="post-job.php">Post Job</a>
                        </li>			
                        <li>
                            <a href="help.php">Help</a>
                        </li>				
                        
                        <li>
                            <a href="login.php"  class="me-0">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>        
        <div class="container-fluid d-none d-xl-block">
            <div class="row justify-content-start">
                <div class="col-lg-4 col-md-5 col-12">
                    <ul id="main-menu" class="sm sm-blue text-white ">
                        <li><a href="services.php" class="ps-0">Yard Work</a></li>
                        <li><a href="services.php">TV Mounting</a></li>
                        <li><a href="services.php">Handyman</a></li>
                        <li><a href="services.php">Help Moving</a></li>    
                        <li><a href="services.php">Delivery Service</a></li>                 
                        <li><a href="services.php">Hang Pictures</a></li>      
                        <li><a href="services.php">Lawn Care Services</a></li>
                        <li><a href="services.php">Painting</a></li>
                        <li><a href="services.php">Grocery Shopping & Delivery</a></li>
                        <li><a href="services.php">Furniture Assembly</a></li>
                        <li><a href="services.php">Lighting Installation</a></li>
                        <li><a href="services.php">Virtual & Online Tasks</a></li>
                        <li><a href="services.php">Contactless Tasks</a></li>
                        <li><a href="services.php">Volunteer Help</a></li>
                        <li><a href="services.php">IKEA Services</a></li>                                       
                    </ul>
                </div>
                <div class="col-lg-2 col-md-2 col-12  w-auto">
                    <div class="form-group row float-end">
                        <label for="date-input" class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date" value="<?= date('Y-m-d'); ?>" id="date-input">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-12  w-auto">
                    <div class="form-group row float-end">
                        <label for="search-zip-code" class="col-sm-4 col-form-label">30 Miles</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="search-zip-code" id="search-zip-code" placeholder="ZIP Code" >
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-12  w-auto">
                    <div class="form-group row float-end">
                        <label class="col-sm-2 col-form-label">Price </label>
                        <div class="col-sm-10">
                            <button type="button" class="btn btn-outline btn-info btn-xs">$100 -$250</button>
                            <button type="button" class="btn btn-outline btn-info btn-xs">$250 - $500</button>
                            <button type="button" class="btn btn-outline btn-info btn-xs">$500+</button>
                        </div>
                    </div>				  
                </div>
                <div class="col-lg-2 col-md-3 col-12  w-auto">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Verifications </label>
                        <div class="col-sm-9 pe-0 ">
                            <div class="float-end" role="group" aria-label="Basic checkbox toggle button group">
                                <input type="checkbox" class="btn-check" id="search_email_verification" name="search_job_verification[]" autocomplete="off">
                                <label class="btn btn-outline btn-info btn-sm px-10 py-5" for="search_email_verification"><i class="fa fa-envelope"></i> </label>

                                <input type="checkbox" class="btn-check" id="search_mobile_verification" name="search_job_verification[]" autocomplete="off">
                                <label class="btn btn-outline  btn-info btn-sm px-10 py-5" for="search_mobile_verification"><i class="fa fa-phone"></i> </label>

                                <input type="checkbox" class="btn-check" id="search_credit_card_verification" name="search_job_verification[]" autocomplete="off">
                                <label class="btn btn-outline  btn-info btn-sm px-10 py-5" for="search_credit_card_verification"><i class="fa fa-credit-card"></i> </label>

                                <input type="checkbox" class="btn-check" id="search_drivers_license_verification" name="search_job_verification[]" autocomplete="off">
                                <label class="btn btn-outline  btn-info btn-sm  px-10 py-5" for="search_drivers_license_verification"><i class="fa fa-id-card"></i> </label>

                                <input type="checkbox" class="btn-check" id="search_all_verification" name="search_job_verification[]" autocomplete="off">
                                <label class="btn btn-outline  btn-info btn-sm  px-10 py-5" for="search_all_verification">All Verifications</label>

                               
                            </div>
                           
                        </div>
                    </div>				  
                </div>
            </div>
        </div>
	</nav>
</header>
