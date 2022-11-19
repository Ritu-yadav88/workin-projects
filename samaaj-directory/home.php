<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>samaaj directory home page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="mybootstrapfiles/directory.css">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="home.php">Neutral</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="directory.php" class="nav-link"><span>Directory</span></a></li>
	          <li class="nav-item"><a href="#practice-section" class="nav-link"><span>President Message</span></a></li>
	          <li class="nav-item"><a href="#member-section" class="nav-link"><span>Working Members</span></a></li>
	          <li class="nav-item"><a href="#gallery-section" class="nav-link"><span>Gallery</span></a></li>
	          <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
   

	  <section class="hero-wrap js-fullheight" style="background-image: url('images/asian-family-portrait-three-generation-32002850.jpg');" data-section="home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Welcome To Our Website</h1>
            <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">This Website shows family details.if you enter your family details You Can see your family details in this website.</p>
          </div>
          </div>
        </div>
      </div>
    </section>

   
    <section class="ftco-section ftco-no-pb ftco-services" id="practice-section">
      <div class="container">
      	<div class="row justify-content-center pb-5">
          <div class="col-md-10 heading-section text-center ftco-animate">
            <h2 class="mb-4">President Message</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-md-5 col-lg-3 ftco-animate py-4 nav-link-wrap">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link px-4 py-1 active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true"><span class="mr-3 flaticon-ideas"></span> President Message</a>

              <a class="nav-link px-4 py-1" href="directory.php" target="_self" ><span class="mr-0 flaticon-analysis"></span> Family Members Details</a>
              
              <a class="nav-link px-4 py-1" href="#member-section" role="tab"><span class="mr-3 flaticon-innovation"></span> Working Members</a>

              <a class="nav-link px-4 py-1" href="#gallery-section"><span class="mr-2 flaticon-idea"></span> Annual Function -2019</a>

              <a class="nav-link px-4 py-1" href="#gallery-section" role="tab" ><span class="mr-2 flaticon-idea"></span> Annual Function -2020</a>

              <a class="nav-link px-4 py-1" href="#gallery-section"><span class="mr-2 flaticon-idea"></span> Annual Function -2021</a>
            </div>
          </div>

<?php
$sql=$conn->query("SELECT * FROM `membertb` WHERE post='president';");
while($row=$sql->fetch())
{
  $imagepath=$row["image_path"];
  $firstname=$row["firstname"];
  $middelname=$row["middelname"];
  $lastname=$row["lastname"];
?>
          <div class="col-md-7 col-lg-9 ftco-animate p-4 p-md-5 d-flex align-items-center">
            
            <div class="tab-content pl-lg-4" id="v-pills-tabContent">

              <div class="tab-pane fade show active py-0 py-lg-5" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
              	<div class="d-lg-flex">
	              	<div class="icon-law mr-md-4 mr-lg-5">
                    <span><img src="<?php echo $imagepath; ?>" width="175" height="175" /></span>
                    <h5 style="text-transform:capitalize;color:#6E5773;"><?php echo $firstname," ".$middelname." ".$lastname; ?></h5>
		              </div>
		              <div class="text">
		                <h2 class="mb-4">Dear Members,</h2>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
		                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
		                <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
	                </div>
                </div>
                </div>
               </div>
            </div>
<?php
 }
?>
          </div>
        </div>
      </div>
    </section>
		
    <section class="ftco-section bg-light" id="member-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-10 heading-section text-center ftco-animate">
            <h2 class="mb-1">Our Main Working members</h2>
          </div>
        </div>
    <div class="row">
	<?php
$sql=$conn->query("SELECT * FROM `membertb` WHERE post!='' ORDER BY priority ASC;
");
while($row=$sql->fetch())
          {
			$firstname=$row["firstname"];
      $middelname=$row["middelname"];
      $lastname=$row["lastname"];
			$mobile=$row["mobile"];
			$post=$row["post"];
			$imagepath=$row["image_path"];
?>

					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<h4 align=center style="text-transform:capitalize;font-weight:bold;"><?php echo $post;?></h4>
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(<?php echo $imagepath;?>)";></div>
							</div>
							<div class="text d-flex align-items-center pt-3 text-center">
								<div>
									<h3 class="mb-2"><?php echo $firstname." ".$middelname." ".$lastname; ?></h3>
									<span class="position mb-4"><?php echo "phone no:"." ". $mobile;?></span>
									<div class="faded">
										<ul class="ftco-social text-center">
			                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              </ul>
		              </div>
		            </div>
					</div>
						</div>
						</div>
			<?php
			}
			?>
					


    </section>
    <section class="ftco-section" id="gallery-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-10 heading-section text-center ftco-animate">
            <marquee  bgcolor="#6E5773" style="color:white;"><span >This is All About The Annual Function</span></marquee>
            <h2 class="mb-0">Our Gallery</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
          		<div class="text">
          			<h3 class="heading" align="center"><a href="annualpics.php">Annual Function - 2019</a></h3>
          		</div>
              <a href="annualpics.php" class="block-20" style="background-image: url('images/photos/1280px-thumbnail.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <div class="d-flex align-items-center mt-4 meta">
	                <p class="mb-0"><a href="annualpics.php" class="btn btn-primary">View More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
          		<div class="text">
              <h3 class="heading" align="center"><a href="annualpics.php">Annual Function - 2020</a></h3>
          		</div>
              <a href="annualpics.php" class="block-20" style="background-image: url('images/photos/maxresdefault.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <div class="d-flex align-items-center mt-4 meta">
	                <p class="mb-0"><a href="annualpics.php" class="btn btn-primary">View More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
          		<div class="text">
              <h3 class="heading" align="center"><a href="annualpics.php">Annual Function - 2021</a></h3>
          		</div>
              <a href="annualpics.php" class="block-20" style="background-image: url('images/photos/Speech-on-Annual-Function.png');">
              </a>
              <div class="text mt-3 float-right d-block">
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <div class="d-flex align-items-center mt-4 meta">
	                <p class="mb-0"><a href="annualpics.php" class="btn btn-primary">View More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php
    $sql=$conn->query("select * from membertb where post='president';");
    while($row=$sql->fetch())
    {
      $address=$row["address"];
      $nearby=$row["nearby"];
      $society=$row["society_name"];
      $colony=$row["colony"];
      $village=$row["village"];
      $postoffice=$row["post_office"];
      $city=$row["city"];
      $distt=$row["distt"];
      $state=$row["state"];
      $pincode=$row["pincode"];
      $country=$row["country"];
      $mobile=$row["mobile"];
      $email=$row["email"];
    ?>
    <section class="ftco-section contact-section ftco-no-pb bg-light" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-10 heading-section text-center ftco-animate">
            <span class="subheading">Contact</span>
            <h2 class="mb-4">Contact Us</h2>
            <p>You Can Contact Us From Monday to Friday From 9:00 AM to 5 PM.</p>
          </div>
        </div>
        <div class="row d-flex contact-info mb-5">
          <div class="col-md-6 col-lg-4 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-phone2"></span>
          		</div>
          		<h3 class="mb-4"> President Contact Number</h3>
	            <h4><a href="tel://1234567920"><?php echo $mobile; ?></a></h4>
	          </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<h3 class="mb-4">Email Address</h3>
	            <h5><a href="mailto:info@yoursite.com"><?php echo $email; ?></a></h5>
	          </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-globe"></span>
          		</div>
          		<h3 class="mb-4">Website</h3>
	            <h4><a href="#">yoursite.com</a></h4>
	          </div>
          </div>
        </div>
    </section>
    <?php
    }
    ?>
		

    <footer class="ftco-footer ftco-section p-1 mt-0">
    <div class="row">
    <div class="col-md-12">
    <h2 style="color:white;">About <span>Neutral</span></h2>
    <ul style="display:flex;list-style:none;text-align:right;">
      <li style="padding:20px;color:white;font-size:20px;" ><a href="#home.php">Home</a></li>
      <li style="padding:20px;color:white;font-size:20px;" ><a href="#practice-section">President Message</a></li>
      <li style="padding:20px;color:white;font-size:20px;" ><a href="#directory.php">Family Details</a></li>
      <li style="padding:20px;color:white;font-size:20px;" ><a href="#member-section">Working Members</a></li>
      <li style="padding:20px;color:white;font-size:20px;" ><a href="#gallery-section">Gallery</a></li>
      <li style="padding:20px;color:white;font-size:20px;" ><a href="#contact-section">Contact Us</a></li>
    </ul>
  </div>
  </div>
     </footer>
    
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <!-- Modal -->
    <div class="modal fade" id="modalAppointment" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalAppointmentLabel">Appointment</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="#">
              <div class="form-group">
                <label for="appointment_name" class="text-black">Full Name</label>
                <input type="text" class="form-control" id="appointment_name">
              </div>
              <div class="form-group">
                <label for="appointment_email" class="text-black">Email</label>
                <input type="text" class="form-control" id="appointment_email">
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="appointment_date" class="text-black">Date</label>
                    <input type="text" class="form-control" id="appointment_date">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="appointment_time" class="text-black">Time</label>
                    <input type="text" class="form-control" id="appointment_time">
                  </div>
                </div>
              </div>
              

              <div class="form-group">
                <label for="appointment_message" class="text-black">Message</label>
                <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary">
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>


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
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>
</html>