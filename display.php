<?php
include 'connect.php';

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
   <div class="container">
   <table class="table">
         <thead>
            <tr>
               <th scope="col">Person_Location</th>
               <th scope="col">match_count</th>
               <th scope="col">time_taken(s)</th>
               <th scope="col">miles_travelled</th>
               <th scope="col">fuel_used</th>
               <th scope="col">number_vehicles</th>
               <th scope="col">registration_id</th>
               <th scope="col">operations</th>
            </tr>
         </thead>
         <tbody>
            <?php
            $sql="select * from `information`";
            $result=mysqli_query($con,$sql);
            if($result){
               while($row=mysqli_fetch_assoc($result)){
                  $id=$row['id'];
                  $personlocation=$row['location'];
                  $matchcount=$row['matchcount'];
                  $timetaken=$row['timetaken'];
                  $milestravelled=$row['milestravelled'];
                  $fuelused=$row['fuelused'];
                  $numbervehicles=$row['numbervehicles'];
                  $registrationid=$row['registrationid'];
                  echo '<tr>
                  <th scope="row">'.$personlocation.'</th>
                  <td>'.$matchcount.'/1000</td>
                  <td>'.$timetaken.'</td>
                  <td>'.$milestravelled.'</td>
                  <td>'.$fuelused.'</td>
                  <td>'.$numbervehicles.'</td>
                  <td>'.$registrationid.'</td>
                  <td>
                  <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                  <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                  </td>
               </tr>';
               }
            }
            
            ?>
      </tbody>
   </table>
   <button class="btn btn-primary"><a href="user.php" class="text-light">Add New</a></button>
   <button class="btn btn-primary"><a href="export.php" class="text-light">Export</a></button>
   </div>
</body>
</html>