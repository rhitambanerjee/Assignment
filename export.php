<?php
include 'connect.php';
$sql="select * from `information`";
$res=mysqli_query($con,$sql);
$html='<table><tr><td>Person_Location</td>
<td>match_count</td>
<td>time_taken(s)</td>
<td>miles_travelled</td>
<td>fuel_used</td>
<td>number_vehicles</td>
<td>registration_id</td></tr>';
while($row=mysqli_fetch_assoc($res)){
   $html.='<tr><td>'.$row['location'].'</td><td>'.'<td>'.$row['matchcount'].'</td><td>'.'<td>'.$row['timetaken'].'</td><td>'.'<td>'.$row['milestravelled'].'</td><td>'.'<td>'.$row['fuelused'].'</td><td>'.'<td>'.$row['numbervehicles'].'</td><td>'.'<td>'.$row['registrationid'].'</tr></td>';
}
$html.='</table>';
header('Content-Type:application/xls');
header('content-Disposition:attachment;filename=report.xls');
echo $html;
?>