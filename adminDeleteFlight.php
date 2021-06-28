<?php
session_start();
header('location:adminFlightDetails.php');


$con=mysqli_connect('localhost','root');
if($con){
    echo "connection done";
}else{
    echo "no connection";
}

mysqli_select_db($con,'flightrecords');



$fid=$_POST['flightid'];

$q=" delete from flight where id = '$fid' ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);


if($num==1){
    // echo "duplicate data";
    // echo '<script>alert("Email already registered")</script>';
    header('location:adminFlightDetails.php');
}

?>
