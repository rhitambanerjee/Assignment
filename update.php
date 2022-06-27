<?php

include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from `information` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$location=$row['location'];
$matchcount=$row['matchcount'];
$timetaken=$row['timetaken'];
$milestravelled=$row['milestravelled'];
$fuelused=$row['fuelused'];
$numbervehicles=$row['numbervehicles'];
$registrationid=$row['registrationid'];


if(isset($_POST['submit'])){
   $location=$_POST['location'];
   $matchcount=$_POST['matchcount'];
   $timetaken=$_POST['timetaken'];
   $milestravelled=$_POST['milestravelled'];
   $fuelused=$_POST['fuelused'];
   $numbervehicles=$_POST['numbervehicles'];
   $registrationid=$_POST['registrationid'];


   $sql="update `information` set id=$id,location='$location',matchcount=$matchcount,timetaken=$timetaken,milestravelled=$milestravelled,fuelused=$fuelused,numbervehicles=$numbervehicles,registrationid=$registrationid where id=$id";
   $result=mysqli_query($con,$sql);
   if($result){
      // echo 'updated successfully';
      header('location:index.php');
   }
   else{
      die(mysqli_error($con));
   }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Demo</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
   <div class="container my-5">
      <form method="post">
         <div class="form-group">
         <label>Person_Location</label>
         <input type="text" class="form-control" placeholder="Enter location" name="location" autocomplete="off" value=<?php echo $location?>>
         </div>
         <div class="form-group">
         <label>match_count</label>
         <input type="text" class="form-control" placeholder="Enter match count" name="matchcount" autocomplete="off" value=<?php echo $matchcount?>>
         </div>
         <div class="form-group">
         <labe>time_taken(s)</label>
         <input type="text" class="form-control" placeholder="Enter time taken" name="timetaken" autocomplete="off" value=<?php echo $timetaken?>>
         </div>
         <div class="form-group">
         <label>miles_travelled</label>
         <input type="text" class="form-control" placeholder="Enter miles travelled" name="milestravelled" autocomplete="off" value=<?php echo $milestravelled?>>
         </div>
         <div class="form-group">
         <label>fuel_used</label>
         <input type="text" class="form-control" placeholder="Enter fuel used" name="fuelused" autocomplete="off" value=<?php echo $fuelused?>>
         </div>
         <div class="form-group">
         <label>number_vehicles</label>
         <input type="text" class="form-control" placeholder="Enter number vehicles" name="numbervehicles" autocomplete="off" value=<?php echo $numbervehicles?>>
         </div>
         <div class="form-group">
         <label>registration_id</label>
         <input type="text" class="form-control" placeholder="Enter registration id" name="registrationid" autocomplete="off" value=<?php echo $registrationid?>>
         </div>
         <button type="submit" class="btn btn-primary" name="submit">Update</button>
      </form>
   </div>
</body>
</html>
