<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directory page</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,s600,700,800,900" rel="stylesheet">

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

<!--my bootstrap files -->
<link rel="stylesheet" href="mybootstrapfiles/directory.css">
  <link rel="stylesheet" href="mybootstrapfiles/bootstrap.min.css">
    <script src="mybootstrapfiles/jquery.min.js">
    </script>
    <script src="mybootstrapfiles/popper.min.js"></script>
    <script src="mybootstrapfiles/bootstrap.min.js"></script>
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
	          <li class="nav-item"><a href="home.php" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="directory.php" class="nav-link"><span>Directory</span></a></li>
	          <li class="nav-item"><a href="home.php#practice-section" class="nav-link"><span>President Message</span></a></li>
	          <li class="nav-item"><a href="home.php#member-section" class="nav-link"><span>Working Members</span></a></li>
	          <li class="nav-item"><a href="home.php#gallery-section" class="nav-link"><span>Gallery</span></a></li>
	          <li class="nav-item"><a href="home.php#contact-section" class="nav-link"><span>Contact</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- modal start-->
    <div class="modal fade show"  id="mymodal">
      <div class="modal-dialog modal-dialog-scrollable modal-lg">
          <div class="modal-content">
                      <div class="modal-header" style="background:palegreen;">
                        <h1 style="color:white">Family Detail</h1>
                        <button class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body p-0" style="white-space:nowrap;">
                      </div>
              <div class="modal-footer" style="background:palegreen;">
                <button class="btn btn-danger" data-dismiss="modal">close</button>
              </div>
          </div>
      </div>
    </div>
     <!-- modal End-->

	  <section class="hero-wrap js-fullheight" style="background-image: url('images/asian-family-portrait-three-generation-32002850.jpg');" data-section="home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Enter You Want To Search</h1>
            <form class="form-wrap mt-4" name="f1">
                <div class="btn-group" role="group" aria-label="Basic example">
                  <select class="btn-group1" name="selectcol" id="selectcol">
                    <option value="">Select Option</option>
                    <option value="firstname">First Name</option>
                    <option value="lastname">Last Name</option>
                    <option value="mobile">Mobile</option>
                    <option value="gotra">Gotra</option>
                  </select>
                    <input type="text" name="searchval" id="searchval" placeholder="Enter Value" class="btn-group2" />
                    
                    <button type="submit" name="Btn_search" id="Btn_Search" onclick="SearchValue()" class="btn-form">SEARCH</button>
                </div>
            </form>
          </div>
        </div>
        
      </div>
    </section>

        <div class="container">
        <div class="row">
        <?php
            $MyQuery="SELECT * FROM membertb where `memberid`=`familyhead_memberid`";
            if(isset($_GET['selectcol']))
            {
              $MyQuery=$MyQuery." and ".$_GET['selectcol']."='".$_GET['searchval']."'";
            }         
            $sql=$conn->query($MyQuery);
            while($row=$sql->fetch())
            {
              $imagepath=$row["image_path"];
              $firstname=$row["firstname"];
              $middelname=$row["middelname"];
              $lastname=$row["lastname"];
              $relation=$row["relationid"];
              $relationship=$row["relationship"];
              $fathername=$row["father_name"];
              $husbandname=$row["husband_name"];
              $designation=$row["designation"];
              $where=$row["where_place"];
              $occupation=$row["occupation"];
              $qualification=$row["qualification"];
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
              $dob=$row["dob"];
              $currentdate=date("y-m-d");
          $age=date_diff(date_create($dob),date_create($currentdate));
        ?>
            <div class="col-lg-6">
              <div class="media border mr-3 mt-3 p-4">
                <img src="<?php echo $imagepath; ?>" class="mr-3 mt-3 rounded" width=125px>
                <div class="media-body">
                  <h5><?php echo $firstname." ".$middelname." ".$lastname;  ?></h5>
                  <h6><?php if($relation=="s/o" OR $relation=="d/o"){ echo $relation." ".$fathername;} if($relation=="w/o"){echo $relation." ".$husbandname;} ?></h6>
                  <?php echo "<b>age: </b>".$age->format("%y"); ?><br>
               <p><big><b>Address:-</big></b><?php echo $address."<b> near:- </b> ".$nearby."<b> Post Office:- </b>".$postoffice; ?>
          <?php
          if($society!="") 
          {
            echo "<b> Society:- </b>".$society;
          }
          if($colony!="")
          {
            echo "<b> Colony:- </b>". $colony;
          }
          if($village!="")
          {
            echo "<b> Village:- </b>".$village;
          }
          if($city!="")
          {
            echo "<b> City:- </b>".$city;
          }
          echo "<b> Distt:- </b>".$distt."<b> State:- </b>".$state."<b> Pincode:- </b>".$pincode."<b> Country:- </b>".$country;
          ?></p>        
                <button class="rounded font-weight-bold"  onclick="familydetail('<?php echo $row['memberid'] ?>')" data-toggle="modal" data-target="#mymodal" >family details</button>
              </div>
          </div>
        </div>
        <?php
           }
           ?>
       </div>
      </div>
      <script>
    function familydetail(input){
     var xhttp= new XMLHttpRequest();
     xhttp.onreadystatechange=function(){
       if(this.readyState==4 && this.status==200){
         document.getElementsByClassName("modal-body")[0].innerHTML=this.responseText;
       }
     };
       xhttp.open("GET","http://localhost/xampp/website/neutral-master/familydetail.php?id="+input,true);
       xhttp.send();

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
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  
  <script src="js/main.js"></script>
  <script>
    function SearchValue()
    {
      //alert(document.f1.selectcol.value);
      //alert(document.f1.searchval.value);
      window.location="directory.php?selectcol="+document.f1.selectcol.value+"&searchval="+document.f1.searchval.value;

    }
  </script>
</body>
</html>