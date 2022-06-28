<?php

include 'connect.php';
if(isset($_POST['submit'])){
   $location=$_POST['location'];
   $matchcount=$_POST['matchcount'];
   $timetaken=$_POST['timetaken'];
   $milestravelled=$_POST['milestravelled'];
   $fuelused=$_POST['fuelused'];
   $numbervehicles=$_POST['numbervehicles'];
   $registrationid=$_POST['registrationid'];


   $sql="insert into `information` (location,matchcount,timetaken,milestravelled,fuelused,numbervehicles,registrationid) values('$location','$matchcount','$timetaken','$milestravelled','$fuelused','$numbervehicles','$registrationid')";
   $result=mysqli_query($con,$sql);
   if($result){
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
         <input type="text" class="form-control" placeholder="Enter location" name="location" autocomplete="off" required>
         </div>
         <div class="form-group">
         <label>match_count</label>
         <input type="number" class="form-control" pattern="[0-9]+" placeholder="Enter match count" name="matchcount" autocomplete="off" required>
         </div>
         <div class="form-group">
         <labe>time_taken(s)</label>
         <input type="number" class="form-control" pattern="[0-9]+" placeholder="Enter time taken" name="timetaken" autocomplete="off" required>
         </div>
         <div class="form-group">
         <label>miles_travelled</label>
         <input type="number" class="form-control" pattern="[0-9]+" placeholder="Enter miles travelled" name="milestravelled" autocomplete="off" required>
         </div>
         <div class="form-group">
         <label>fuel_used</label>
         <input type="number" class="form-control" pattern="[0-9]+" placeholder="Enter fuel used" name="fuelused" autocomplete="off" required>
         </div>
         <div class="form-group">
         <label>number_vehicles</label>
         <input type="number" class="form-control" pattern="[0-9]+" placeholder="Enter number vehicles" name="numbervehicles" autocomplete="off" required>
         </div>
         <div class="form-group">
         <label>registration_id</label>
         <input type="number" class="form-control" pattern="[0-9]+" placeholder="Enter registration id" name="registrationid" autocomplete="off" required>
         </div>
         <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>
   </div>
</body>
</html>
