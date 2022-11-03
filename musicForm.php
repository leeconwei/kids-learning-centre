<?php 
session_start();
      if (empty($_SESSION['id']))
   {
      header('Location: ../index.php');
      // Immediately exit and send response to the client and do not go furthur in whatever script it is part of.
      exit();
   }
    
?>
<!DOCTYPE html>
<html>
<head>
<title>KidsPlanet - Enroll</title>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
 </head>


	

<body>
	 <!-- login signup -->


<div class="ftco-navbar-light">
	<div class="container d-flex justify-content-end">
	
		<div id="login">
		<a href="#login" data-toggle="modal" data-target="#login-modal"> Log in </a>
		<span style="color: white">|</span>
		<a href="#signup" data-toggle="modal" data-target="#signup">Sign Up</a>
		</div>
	</div>
</div>

		<div class="modal fade" tabindex="-1" role="dialog" id="login-modal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="settingsModalLabel">Log In</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<form>
								<div class="form-group">
									<input type="text" name="username" class="form-control" placeholder="Username" required>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" placeholder="Password" required>
								</div>
								<div class="text-center">
									<button type="submit" class="btn btn-outline-primary" >Sign in</button>
								</div>
							</form>
					</div>
				</div>
			</div>
		</div>


		<div class="modal fade" tabindex="-1" role="dialog" id="signup">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="settingsModalLabel">Sign Up</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
				

					<div class="modal-body">
						<form>
								<div class="form-group">
									
									<input type="text" class="form-control" placeholder="Username" required >
								</div>
								<div class="form-group">
									
									<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
								</div>
								<div class="form-group">
									
									<input type="name" class="form-control" placeholder="Full Name" required>
								</div>
								<div class="form-group">
					
									<input type="email" class="form-control" placeholder="Email" required>
								</div>
								<div class="text-center">
									<button type="submit" class="btn btn-outline-primary">Sign Up</button>
								</div>
							</form>
					</div>
				</div>
			</div>
		</div>

  
 <!-- END login singnup-->
 
 <!--nav bar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light sticky-top" id="ftco-navbar">
	
	    <div class="container d-flex align-items-center">
	    	<a class="navbar-brand" href="index.php">KidsPlanet</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="index.php" class="nav-link pl-0">Home</a></li>
					<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
					<li class="nav-item dropdown">
						<a href="courses.html" class="nav-link">Programme</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<li><a href="Daycare.html" class="dropdown-item">Daycare</a></li>
							<li><a href="weekend.html" class="dropdown-item">Weekends Programme</a></li>
							<li><a href="holiday.html" class="dropdown-item">Holiday Programme</a></li>
							<li><a href="Art.html" class="dropdown-item">Art Class</a></li>
							<li><a href="Music.html" class="dropdown-item">Music Class</a></li>		
							<li><a href="Abacus.html" class="dropdown-item">Abacus Class</a></li>	
						</ul>
					</li>
					<li class="nav-item"><a href="job.php" class="nav-link">Job Opportunities</a></li>
					<li class="nav-item dropdown">
						<a href="Profile.php" class="nav-link">Profile</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<li><a href="Edit.php" class="dropdown-item">Edit Information</a></li>
							<li><a href="programEnroll.php" class="dropdown-item">Program Enrolled</a></li>
							<li><a href="Payment.php" class="dropdown-item">Payment</a></li>
							<li><a href="#settings" class="dropdown-item" data-toggle="modal" data-target="#settings">Change Password</a></li>
							<li><a href="#" class="dropdown-item">Logout</a></li>
						</ul>				
					</li>
				</ul>
	      </div>
	    </div>
	  </nav>
	 
	
		<div class="modal fade" tabindex="-1" role="dialog" id="settings">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="settingsModalLabel">Change Password</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<form>
							<div class="form-group">
								<input type="password" name="current password" class="form-control" placeholder="Current Password" required>
							</div>
							<div class="form-group">
								<input type="password" name="new password" class="form-control" placeholder="New Password" required>
							</div>
							<div class="form-group">
								<input type="password" name="confirm password" class="form-control" placeholder="Confirm Password" required>
							</div>
							<div class="text-center">
							<button type="submit" class="btn btn-outline-primary">Save changes</button>
							</div>
						</form>	
					</div>
				</div>
			</div>
		</div>
    <!-- END nav -->
	
	  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_9.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Enroll</h1>
             <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="index.php">Programme <i class="ion-ios-arrow-forward"></i></a></span> <span>Enroll <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
<section class="ftco-section">
	<div>
		<div class="heading-section mb-5 text-center">      	
			<h2 class="mb-4">Programme Enrollment Form</h2>
			<p>Give your child the best learning environment!</p>
		</div>
		<form class="offset-4" id="enrollForm" action="php/enrol.php" method="POST">
			<div class="form-group">
				<label>Programme Name</label>
				<input type="name" name="p_name" class="form-control" value="Music Class" readonly>
			</div>
	
			<div class="form-group">
				<label>Select Programme Type</label>
				<select class="custom-select custom-select-sm" name="selectedProgramme" id="selectedProgramme" onchange="getTotal()" required>
				  <option selected>Programme Type</option>
				  <option value="little">Musical Literature for little kids (ages 3-5)</option>
				  <option value="junior">The Odyssey. An adventure for kids (ages 4-8)</option>
				  <option value="intermediate">The World of William Shakespeare (ages 9-12)</option>
				</select>
			</div>
	
			<div class="form-group">
				<label>Programme Package</label>
				<select class="custom-select custom-select-sm" name="selectedPeriod" id="selectedPeriod" onchange="getTotal()" required>
				  <option selected>Period of time</option>
				  <option value="1 month" >1 month</option>
				  <option value="6 months">6 months (10% discount)</option>
				  <option value="12 months">12 months (30% discount)</option>
				</select>
			</div>
	
			<div class="form-group">
				<label>Child's Name</label>
				<input type="name" name="c_name" class="form-control" placeholder="Name as in MyKID" required>
			</div>
			
			<div class="form-group">
				<label>MyKID No.</label>
				<input type="tel" name="c_ic" pattern="[0-9]{6}-[0-9]{2}-[0-9]{4}" class="form-control" placeholder="xxxxxx-xx-xxxx" required>
			</div>
			
			<div class="form-group">
				<label>Total Payable Amount</label>
			
				<div id="total">RM 0.00</div>
				<input type="hidden" name="total" id="total" value="">
			</div>
			
			<div class="form-group">
				<label for="educationlevel">Payment Type</label>
				<select name="payment_type" class="custom-select custom-select-sm" required>
				  <option selected>Select payment type</option>
				  <option value="Cash">Cash</option>
				  <option value="Online Banking">Online Banking</option>
				</select>
			</div>
			<div class="text-center">
				<button type="submit" class="btn btn-primary" onclick="setTotal()"> Submit</button>
			</div>
	  </form>
	  </div>
	  </section>
	  
<script>

	var programme_prices = new Array();
		programme_prices["little"]=180;
		programme_prices["junior"]=200;
		programme_prices["intermediate"]=220;
		
	function getProgrammePrice(){
		var programmePrice=0;
		var form=document.forms["enrollForm"];
		var selectedProgramme=form.elements["selectedProgramme"];
		
		programmePrice=programme_prices[selectedProgramme.value];
		
		return programmePrice;
		
		
	}
	
	var periods = new Array();
		periods["1 month"]=1;
		periods["6 months"]=6;
		periods["12 months"]=12;
	
	function getPeriod(){
		var period=0;
		var form=document.forms["enrollForm"];
		var selectedPeriod=form.elements["selectedPeriod"];
		
		period=periods[selectedPeriod.value];
		
		return period;
	}
	
	function getTotal(){
		var programmeFee=0;
		if(getPeriod()==1){
			programmeFee=getProgrammePrice();
		}else if(getPeriod()==6){
			programmeFee=getProgrammePrice()*getPeriod()*0.9;
		}else{
			programmeFee=getProgrammePrice()*getPeriod()*0.7;
		}
		
		document.getElementById('total').innerHTML = "RM " + programmeFee;
		return programmeFee;
	 }
	 
	 function setTotal(){
		document.enrollForm.total.value = getTotal();
		document.forms["enrollForm"].submit();
	 }
	 
	  
</script>
	  
 <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script src="js/dropdown.js"></script>
</body>
	 <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-3 ">
          <div class="col-md-6 col-lg-4">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">7-1,Jalan PJS 11/28, Bandar Sunway, 46150 Petaling Jaya, Selangor</span></li>
	                <li><a href="tel:03-5611 8888"><span class="icon icon-phone"></span><span class="text">03-5611 8888</span></a></li>
	                <li><a href="mailto:kidsplanet@gmail.com"><span class="icon icon-envelope"></span><span class="text">kidsplanet@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="index.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="about.html"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                <li><a href="courses.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Program</a></li>
				<li><a href="job.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Job Opportunities</a></li>
                <li><a href="Profile.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Profile</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Subscribe Us!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
           
          </div>
        </div>
        
        </div>
    </footer>
</html>
