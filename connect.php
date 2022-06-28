<?php
$con=new mysqli( getenv('MYSQL_HOST'), getenv('DB_USER'), getenv('DB_PASSWORD'), getenv('DB_NAME'));

if(!$con){
   die(mysqli_error($con));
}


?>
