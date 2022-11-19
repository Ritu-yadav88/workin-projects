<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>family details</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
        <div class="row">
          <?php
          if(isset($_GET["id"]) && $_GET["id"]!="")
          {
          $sql=$conn->query("SELECT A.memberid,A.firstname,A.middelname,A.lastname,A.relationid,A.relationship,A.father_name,A.mothername, A.husband_name, A.mobile,A.email,A.dob,A.qualification,A.designation, A.where_place, A.occupation, A.achivements,A.gender,A.marital_status,A.wifename,A.caste,A.religion,A.gotra,A.nativeplace,A.address,A.nearby, A.society_name,A.colony,A.village, A.post_office,A.city,A.distt,A.state,A.pincode,A.country,A.image_name, A.image_type,A.image_size,A.image_path,A.priority,A.create_date_and_time,A.user_id,A.familyhead_memberid FROM membertb A, membertb B 
          WHERE A.familyhead_memberid=B.memberid AND B.memberid=".$_GET["id"]);
          ?>
           <div class="col">
            <table class="table table-hover table-borderless bg-primary text-white text-capitalize">
            <tr>
              <th>name</th>
              <th>Relation </th>
              <th>age</th>
              <th>Qualification</th>
              <th>Designation</th>
              <th>Occupation</th>
              <th>gender</th>
              <th>Marital-Status</th>
              <th>phone number</th>
            </tr>
           <?php
          while($row=$sql->fetch())
          {
            $firstname=$row["firstname"];
            $middelname=$row["middelname"];
            $lastname=$row["lastname"];
            $relationid=$row["relationid"];
            $relationship=$row["relationship"];
            $fathername=$row["father_name"];
            $mname=$row["mothername"];
            $husbandname=$row["husband_name"];
            $mobile=$row["mobile"];
            $email=$row["email"];
            $qualification=$row["qualification"];
            $designation=$row["designation"];
            $where=$row["where_place"];
            $occupation=$row["occupation"];
            $achivements=$row["achivements"];
            $gender=$row["gender"];
            $maritalstatus=$row["marital_status"];
            $wifename=$row["wifename"];
            $caste=$row["caste"];
            $religion=$row["religion"];
            $gotra=$row["gotra"];
            $nativeplace=$row["nativeplace"];
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
            $createdateandtime=$row["create_date_and_time"];
            $dob=$row["dob"];
            $currentdate=date("y-m-d");
          $age=date_diff(date_create($dob),date_create($currentdate));
          ?>
            <tr>
            <td><?php echo $firstname." ".$middelname." ".$lastname; ?></td>
             <td><?php echo $relationship;?></td>
             <td><?php echo $age->format("%y"); ?></td>
             <td><?php echo $qualification;?></td>
             <td><?php echo $designation;?></td>
             <td><?php echo $occupation;?></td>
             <td><?php echo $gender;?></td>
             <td><?php echo $maritalstatus;?></td>
             <td><?php echo $mobile;?></td>
          <?php
        }
      }
      ?>
       </tr>
      </table>
      </div>
      </div>
      </body>
      </html>
         
           
          
           
          
          
          
           
         
            
          
          
          
         
         
            
       
         
          
           
          
          
          
            
          
         
          
             
             
             
           
          
          
          
           
          
         
          
          
         
          
          
          
         
          
         
         