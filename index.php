<!DOCTYPE html>
<html lang="en">
    <head>
    <title>KidsPlanet</title>
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
						<form action="php/login_inc.php" method="POST">
								<div class="form-group">
									<input type="text" name="username" class="form-control" placeholder="Username" required>
								</div>
								<div class="form-group">
									<input type="password" name="pwd" class="form-control" placeholder="Password" required>
								</div>
								<div class="text-center">
									<button type="submit" name="login" class="btn btn-outline-primary" >Sign in</button>
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
						<form action="php/signup_inc.php" method="POST">
								<div class="form-group">
									
									<input type="text" name="username" class="form-control" placeholder="Username" required >
								</div>
								<div class="form-group">
									
									<input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
								</div>
								<div class="form-group">
									
									<input type="name" name="fullname" class="form-control" placeholder="Full Name" required>
								</div>
								<div class="form-group">
					
									<input type="email" name="email" class="form-control" placeholder="Email" required>
								</div>
								<div class="text-center">
									<button type="submit" name="signup" class="btn btn-outline-primary">Sign Up</button>
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
						<form action-"reset-password.php" method="POST">
							<div class="form-group">
								<input type="password" name="pwd" class="form-control" placeholder="Current Password" required>
							</div>
							<div class="form-group">
								<input type="password" name="new_password" class="form-control" placeholder="New Password" required>
							</div>
							<div class="form-group">
								<input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required>
							</div>
							<div class="text-center">
							<button type="submit" name="changePwd" class="btn btn-outline-primary">Save changes</button>
							</div>
						</form>	
					</div>
				</div>
			</div>
		</div>
    <!-- END nav -->
	

	<section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(images/bg_1.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
            <h1 class="mb-4">Kids Are The Best <span>Explorers In The World</span></h1>
            <p><a href="about.html" class="btn btn-secondary px-4 py-3 mt-3">Read More</a></p>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
            <h1 class="mb-4">Perfect Learned<span> For Your Child</span></h1>
            <p><a href="about.html" class="btn btn-secondary px-4 py-3 mt-3">Read More</a></p>
          </div>
        </div>
        </div>
      </div>
    </section>

    <section class="ftco-services ftco-no-pb">
			<div class="container-wrap">
				<div class="row no-gutters">
          <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-teacher"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Certified Teachers</h3>
                <p>We only employ dedicated, passionate, experienced qualified staff who are committed to their own professional development.We have effective mentoring programs that support all educators to continue their own learning.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-reading"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Special Education</h3>
                <p>Learning, guiding and intentional teaching through play with lots of encouragement in a positive learning atmosphere.Interesting content and a variety of themes and topics offered throughout the year.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-fifth">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-books"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Book &amp; Library</h3>
                <p>A quality book collection should include a wide variety of books including a mix of factual books, picture books, storybooks, audio book, and poetry books are provided for children to develop your children a positive relationship with books and reading.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-diploma"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Certification</h3>
                <p>As the one of the ISO-certified kids learning centre, we ensure safety standards are constantly monitored, observed and maintained.</p>
              </div>
            </div>      
          </div>
        </div>
		</div>
	</section>
    

		
  
<!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">03-5611 8888</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">kidsplanet@gmail.com</span></a></li>
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
                  <input type="submit" name="subscribe" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
           
          </div>
        </div>
        
        </div>
    </footer>
</html>