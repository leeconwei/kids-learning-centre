<?php 
session_start();
      if (empty($_SESSION['username']))
   {
      header('Location: ../index.php');
      // Immediately exit and send response to the client and do not go furthur in whatever script it is part of.
      exit();
   }
?>

<!DOCTYPE html>
<html>
<head>
<title>KidsPlanet - Edit Information</title>
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
<div class="login d-flex justify-content-end ">
   <a class=" a-1" href="#signin" data-toggle="modal" data-target=".log-sign" > Log in | Sign Up</a>
   </div>
   <div class="modal fade bs-modal-sm log-sign" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="bs-example bs-example-tabs">
					
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					
					<ul id="myTab" class="nav nav-tabs">
						<li id="tab1" class="active tab-style"><a href="#signin" data-toggle="tab">Log In</a></li>
						<li id="tab2" class="tab-style"><a href="#signup" data-toggle="tab">Sign Up</a></li>
					</ul>
				</div>
				
				<div class="modal-body">
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="signin">
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
					
						<div class="tab-pane fade in" id="signup">
							<form>
								<div class="form-group">
									
									<input type="text" class="form-control" placeholder="Username" required>
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
		</div>
	</div>
 <!-- END login singnup-->
 
 <!--nav bar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
	
	    <div class="container d-flex align-items-center">
	    	<a class="navbar-brand" href="index.html">KidsPlanet</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <!-- <p class="button-custom order-lg-last mb-0"><a href="appointment.html" class="btn btn-secondary py-2 px-3">Make An Appointment</a></p> -->
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="index.html" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	        	<li class="nav-item dropdown">
					<a href="courses.html" class="nav-link">Programme</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<li><a href="Daycare.html" class="dropdown-item">Daycare</a></li>
						
						<li><a href="weekends.html" class="dropdown-item">Weekends Programme</a></li>
									
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
						
						<li><a href="custInfo.php" class="dropdown-item">Personal Information</a></li>
									
						<li><a href="programEnroll.html" class="dropdown-item">Program Enrolled</a></li>
									
						<li><a href="Payment.html" class="dropdown-item">Payment</a></li>

						<li><a href="#settings" class="dropdown-item" data-toggle="modal" data-target="#settings">Change Password</a></li>
						<li><a href="php/logout.php" class="dropdown-item">Logout</a></li>
					</ul>				
				</li>
			</ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
	    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_10.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Personal Information</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Profile <i class="ion-ios-arrow-forward"></i></a></span> <span>Personal Information <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

<section class="ftco-section"><div>
	          <div class="heading-section mb-5 text-center">
	          	
	            <h2 class="mb-4">Edit Profile</h2>
	            <p>Do provide us your latest information ;)</p>
	          </div>
			  
<?php
	include('php/dbh.php');
		$sql="SELECT * from users where username=".$_SESSION['username']; ;
		$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
		$row=mysqli_num_rows($result);

		while($row=mysqli_fetch_assoc($result))
		{

?>
			  			  
<form class="offset-4" method="POST">
<div class="text-center">
<div class="image-upload">
  <label for="file-input">
  <div class="imagecontainer">
    <img src="images/author.jpg" class="rounded-circle" style="width: 200px; height: 200px; object-fit:cover">
	<div class="textoverlay">
    <div class="imagetext">Change Photo</div>
  </div>
  </div>
  </label>
  <input id="file-input" type="file" accept="image/*"/>
</div>
</div>
  <div class="form-group"> 
	<!--<p><?php if(isset($message)) echo $message;?></P>-->
	<label for="username">Username</label>
	<?php echo$row['username'];?>
 
	
	</div>
	<div class="form-group">
	<label for="nric">NRIC</label>
    <!--<input type="tel" name="ic" pattern="[0-9]{6}-[0-9]{2}-[0-9]{4}" class="form-control" placeholder="xxxxxx-xx-xxxx">-->
	<?php echo$row['nric'];?>
	</div>
	
	<div class="form-group">
	<label for="contactno">Contact Number</label>
    <?php echo$row['contactno'];?>
	</div>
	
    <div class="form-group">
	  <label for="email">Email address</label>
    <?php echo$row['email'];?>
   
  </div>
  <div class="form-group">
    <label for="address">Full Address</label>
    <?php echo$row['homeadd'];?>
  </div>

	<div class="text-center">
  <button type="submit" name="submit" class="btn btn-primary"><a href="Edit.php">Edit</button>
	</div>
	  </form>
	  <?php } ?>
	  		 
	  </div></section>

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
                <li><a href="index.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="about.html"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                <li><a href="courses.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Program</a></li>
				<li><a href="job.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Job Opportunities</a></li>
                <li><a href="Profile.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Profile</a></li>
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
