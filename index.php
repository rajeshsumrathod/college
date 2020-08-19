<?php
$_SERVER = "localhost";
$username = "root";
$password = "";

 $con = mysqli_connect($_SERVER, $username,$password);
if(!$con){
die("Connection yo this database failed".mysqli_connect_error());
}
//echo "Success connection to database";

$sql = "INSERT INTO `trip` (`slno`, `Name`, `Age`, `Gender`, `Email`, `Phone`, `Other`) VALUES ('6', 'RajeshPooja', '23', 'Male', 'rajeshsumrathod@gmail.com', '8088799167', 'Hi Am Rathod')";


?>