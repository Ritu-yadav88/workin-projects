<?php
session_start();
if(empty($_SESSION['Uname']))
{
  echo "<script>window.location='login.php';</script>";
}
include "connect.php";
if(isset($_POST["save"]))
{
  $memberid=$_POST["memberid"];
  $firstname=$_POST["firstname"];
  $middlename=$_POST["middlename"];
  $lastname=$_POST["lastname"];
  $relationid=$_POST["relationid"];
  $relationship=$_POST["relationship"];
  $fathername=$_POST["fathername"];
  $mothername=$_POST["mname"];
  $husbandname=$_POST["hname"];
  $mobile=$_POST["mobile"];
  $email=$_POST["emailid"];
  $dob=$_POST["dob"];
  $qualification=$_POST["qualification"];
  $designation=$_POST["designation"];
  $where=$_POST["where"];
  $occupation=$_POST["occupation"];
  $achivements=$_POST["achivements"];
  $gender=$_POST["gender"];
  $maritalstatus=$_POST["maritalstatus"];
  $wifename=$_POST["wifename"];
  $caste=$_POST["caste"];
  $religion=$_POST["religion"];
  $gotra=$_POST["gotra"];
  $nativeplace=$_POST["nativeplace"];
  $address=$_POST["address"];
  $nearby=$_POST["nearby"];
  $society=$_POST["society"];
  $colony=$_POST["colony"];
  $village=$_POST["village"];
  $city=$_POST["city"];
  $postoffice=$_POST["postoffice"];
  $distt=$_POST["distt"];
  $state=$_POST["state"];
  $pincode=$_POST["pincode"];
  $country=$_POST["country"];
  $createdatetime=$_POST["createdatetime"];
  $userid=$_POST["userid"];
  $familyheadid=$_POST["familyheadid"];
  $post=$_POST["post"];
  $priority=$_POST["priority"];

  $upload="images/";
  $allowfiletype=["jpg","png","jpeg","JPG","JPEG","PNG"];
  $filename=$_FILES["file1"]["name"];
  $tempfilename=$_FILES["file1"]["tmp_name"];
  $filesize=$_FILES["file1"]["size"];
  $originalpath=$upload.$filename;
  $filetype=pathinfo($originalpath,PATHINFO_EXTENSION);
     if(!empty($filename))
     {
      if(in_array($filetype,$allowfiletype))
       {
          if($filesize<100000000)
          {
            if(move_uploaded_file($tempfilename,$originalpath))
            {
              $imagename="$filename";
              $imagetype="$filetype";
              $imagesize="$filesize";
              $imagepath="$originalpath";
            }
          }
       }
     }
  try{
   $sql="INSERT INTO `membertb`(`memberid`, `firstname`, `middelname`, `lastname`, `relationid`, `relationship`, `father_name`, `mothername`, `husband_name`, `mobile`, `email`, `dob`, `qualification`, `designation`, `where_place`, `occupation`, `achivements`, `gender`, `marital_status`, `wifename`, `caste`, `religion`, `gotra`, `nativeplace`, `address`, `nearby`, `society_name`, `colony`, `village`, `post_office`, `city`, `distt`, `state`, `pincode`, `country`, `image_name`, `image_type`, `image_size`, `image_path`, `priority`, `create_date_and_time`, `user_id`, `familyhead_memberid`,`post`) VALUES ('$memberid','$firstname','$middlename','$lastname','$relationid','$relationship','$fathername','$mothername', '$husbandname','$mobile','$email','$dob','$qualification','$designation','$where','$occupation','$achivements','$gender','$maritalstatus','$wifename','$caste','$religion','$gotra','$nativeplace','$address','$nearby','$society','$colony','$village','$postoffice','$city','$distt','$state','$pincode','$country','$imagename','$imagetype','$imagesize','$imagepath','$priority','$createdatetime','$userid','$familyheadid','$post')";
    $conn->exec($sql);
    echo "<script>alert('Tank you for filling out your information')</script>";
  }
  catch(PDOException $e)
  {
    echo "failed: ".$e->getMessage();
  }
  $conn=null;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mybootstrapfiles/directory.css">
  <link rel="stylesheet" href="mybootstrapfiles/bootstrap.min.css">
    <script src="mybootstrapfiles/jquery.min.js">
    </script>
    <script src="mybootstrapfiles/popper.min.js"></script>
    <script src="mybootstrapfiles/bootstrap.min.js"></script>
    <script src="mybootstrapfiles/form_related.js"></script>
</head>
<body style="background-color:#6E5773;">
  <div class="container bg-light p-5" id="memberform">
    <form method="POST" action="#" name="samaajform" enctype="multipart/form-data" onsubmit="return validationimage()">
      <div class="form-row">
        <div class="col-md-6 form-group">
         <label>Member Id</label><input type="text" class="form-control" name="memberid" onkeyup="numberonly(this)" required>
        <label id="number"style="color:red;"></label>
        </div>
        <div class="col-md-6 form-group">
          <label>Firstname:</label><input type="text" class="form-control" name="firstname" onkeyup="letteronly(this)" required>
          <label id="letter1" style="color:red;"></label>
        </div>
        <div class="col-md-6 form-group">
          <label>Middlename:</label><input type="text" class="form-control" name="middlename" onkeyup="letteronly(this)">
          <label id="letter2" style="color:red;"></label>
        </div>
        <div class="col-md-6 form-group">
          <label>Lastname:</label><input type="text" class="form-control" name="lastname" onkeyup="letteronly(this)">
          <label id="letter3" style="color:red;"></label>
        </div>
        <div class="col-md-6 form-group">
          <label>Relation</label>
          <select name="relationid" class="form-control">
            <option>Select</option>
            <option value="s/o">s/o</option>
            <option value="d/o">d/o</option>
            <option value="w/o">w/o</option>
          </select>
        </div>
        <div class="col-md-6 form-group">
          <label>Relationship</label><input type="text" class="form-control" name="relationship" onkeyup="textonly(this)" required>
          <label class="relationship" style="color:red;"></label>
        </div>
        <div class="col-md-6 form-group">
          <label>Father Name</label><input type="text" class="form-control" name="fathername" onkeyup="textonly(this)" required>
          <label class="mfname" style="color:red;"></label>
        </div>
        <div class="col-md-6 form-group">
          <label>Mother Name:</label><input type="text" class="form-control" name="mname" onkeyup="textonly(this)" required>
          <label class="mfname" style="color:red;"></label>
        </div>
        <div class="col-md-6 form-group">
          <label>Husband Name:</label><input type="text" class="form-control" name="hname" onkeyup="textonly(this)">
          <label class="mfname" style="color:red;"></label>
        </div>
        <div class="col-md-6 form-group">
          <label>Mobile Number:</label><input type="text" class="form-control" name="mobile" onkeyup="numberonly(this)" maxlength=10 required>
          <label id="mobilenumber" style="color:red;"></label>
        </div>
        <div class="col-md-6 form-group">
          <label>Email Id:</label><input type="email" class="form-control" name="emailid">
        </div>
        <div class="col-md-6 form-group">
          <label>Date-Of-Birth:</label><input type="text" class="form-control" name="dob" onkeyup="dateofbirth(this)" required>
          <label id="d_o_b" style="color:red;"></label>
        </div>
        <div class="col-md-6 form-group">
          <label>Qualification:</label><input type="text" class="form-control" name="qualification" required>
        </div>
        <div class="col-md-6 form-group">
          <label>Designation:</label><input type="text" class="form-control" name="designation" required>
        </div>
        <div class="col-md-6 form-group">
          <label>Where Enter Place:</label><input type="text" class="form-control" name="where">
        </div>
        <div class="col-md-6 form-group">
          <label>Occupation:</label><input type="text" class="form-control" name="occupation">
        </div>
        <div class="col-md-6 form-group">
          <label>achivements:</label><br><textarea name="achivements" class="form-control"></textarea>
        </div>
        <div class="col-md-6 form-group">
          <label>gender</label>
          <select class="form-control" name="gender">
            <option>Select:</option>
            <option value="male">male</option>
            <option value="female">female</option>
          </select>
        </div>
        <div class="col-md-6 form-group">
          <label>Marital Status</label>
          <select class="form-control" name="maritalstatus">
            <option>Select</option>
            <option value="married">married</option>
            <option value="unmarried">unmarried</option>
          </select>
        </div>
        <div class="col-md-6 form-group">
          <label>Wife Name:</label><input type="text" class="form-control" onkeyup="textonly(this)" name="wifename">
          <label class="mfname" style="color:red;"></label>
        </div>
        <div class="col-md-6 form-group">
          <label>Category:</label>
          <select name="caste" class="form-control">
            <option>Select</option>
            <option value="General">General</option>
            <option value="OBC">OBC</option>
            <option value="SC">SC</option>
            <option value="ST">ST</option>
            <option value="BC_A">BC_A</option>
            <option value="BC_B">BC_B</option>
          </select>
        </div>
        <div class="col-md-6 form-group">
          <label>Religion:</label><input type="text" class="form-control" name="religion" required>
        </div>
        <div class="col-md-6 form-group">
          <label>Gotra:</label><input type="text" class="form-control" name="gotra" required>
        </div>
        <div class="col-md-6 form-group">
          <label>Native Place:</label><input type="text" class="form-control" name="nativeplace" required>
        </div>
        <div class="col-md-6 form-group">
          <label>Address:</label><input type="text" class="form-control" name="address" required>
        </div>
        <div class="col-md-6 form-group">
          <label>Nearby:</label><input type="text" class="form-control" name="nearby">
        </div>
        <div class="col-md-6 form-group">
          <label>Society:</label><input type="text" class="form-control" name="society">
        </div>
        <div class="col-md-6 form-group">
          <label>Colony:</label><input type="text" class="form-control" name="colony">
        </div>
        <div class="col-md-6 form-group">
          <label>Village:</label><input type="text" class="form-control" name="village">
        </div>
        <div class="col-md-6 form-group">
          <label>City:</label><input type="text" class="form-control" name="city">
        </div>
        <div class="col-md-6 form-group">
          <label>Post Office:</label><input type="text" class="form-control" name="postoffice" required>
        </div>
        <div class="col-md-6 form-group">
          <label>District:</label><input type="text" class="form-control" name="distt" required>
        </div>
        <div class="col-md-6 form-group">
          <label>Select State:</label>
          <select class="form-control" name="state">
            <option>Select</option>
            <option value="Andhra Pardesh">Andhra Pardesh</option>
            <option value="Arunachal Pardesh">Arunachal Pardesh</option>
            <option value="Assam">Assam</option>
            <option value="Bihar">Bihar</option>
            <option value="Chhattisgarh">Chhattisgarh</option>
            <option value="Goa">Goa</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Haryana">Haryana</option>
            <option value="Himachal Pardesh">Himachal Pardesh</option>
            <option value="Jammu And Kashmir">Jammu And Kashmir</option>
            <option value="Jharkhand">Jharkhand</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Kerala">Kerala</option>
            <option value="Madhya Pradesh">Madhya Pradesh</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Manipur">Manipur</option>
            <option value="Meghalaya">Meghalaya</option>
            <option value="Mizoram">Mizoram</option>
            <option value="Nagaland">Nagaland</option>
            <option value="Odisha">Odisha</option>
            <option value="Punjab">Punjab</option>
            <option value="Rajasthan">Rajasthan</option>
            <option value="Sikkim">Sikkim</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Telangana">Telangana</option>
            <option value="Tripura">Tripura</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
            <option value="Uttarakhand">Uttarakhand</option>
            <option value="West Bengal">West Bengal</option>
          </select>
        </div>
        <div class="col-md-6 form-group">
          <label>Pincode:</label><input type="text" class="form-control" name="pincode" onkeyup="numberonly(this)" required>
          <label id="pin" style="color:red;"></label>
        </div>
        <div class="col-md-6 form-group">
          <label>Country:</label><input type="text" class="form-control" name="country" required>
        </div>
        <div class="col-md-6 form-group">
          <label>Create-Date-And-Time:</label><input type="text" class="form-control" name="createdatetime" onkeyup="create(this)" required>
          <label id="c_d_t" style="color:red;"></label>
        </div>
        <div class="col-md-6 custom-file" style="margin-top:33px;">
          <input type="file" name="file1" class="custom-file-input" id="file">
          <label class="custom-file-label for="file" >Upload Image:</label>
        </div>
        <div class="col-md-6 form-group">
          <label>User Id:</label><input type="text" class="form-control" name="userid">
        </div>
        <div class="col-md-6 form-group">
          <label>Family Head Memberid:</label><input type="text" class="form-control" name="familyheadid">
        </div>
        <div class="col-md-6 form-group">
          <label>Post:</label><input type="text" class="form-control" name="post">
        </div>
        <div class="col-md-6 form-group">
          <label>Priority:</label><input type="text" class="form-control" name="priority">
        </div>
      </div>
      <div class="form-group" style="margin-left:40%;margin-top:3%;">
        <input type="submit" class="btn btn-success btn-lg" name="save">
        <input type="reset" class="btn btn-danger btn-lg" name="reset" onclick="return confirm('if you press ok everything is clear in your form');">
        <input type="button" class="btn btn-primary btn-lg" name="logout" value="logout" onclick="window.location='logout.php';">
      </div>
    </form>
  </div>     
</body>
<script>
  function validationimage()
{
  var img=document.forms["samaajform"]["file1"];
  var validext=['jpeg','png','jpg','JPG','JPEG','PNG'];
  if(img.value!='')
  {
    var img_ext=img.value.substring(img.value.lastIndexOf('.')+1);
    var result=validext.includes(img_ext);
    if(result==false)
    {
      alert("This Type of File is not allowed please select an image with extention jpg , png, jpeg");
      return false;
    }
    else{
      if(parseFloat(img.files[0].size/(1024*1024))>=2)
      {
        alert("file size must be less then 2 mb and your file is: "+ img.files[0].size/(1024*1024)+"mb");
        return false;
      }
    }
  }
  else{
     alert("please select an image");
     return false;
  }
  return confirm('please check all details are correct');
  return true;
}

</script>
</html>