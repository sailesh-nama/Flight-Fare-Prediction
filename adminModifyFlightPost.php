<?php
session_start();

header('location:adminModifyFlight.php');

$con=mysqli_connect('localhost','root');
if($con){
    echo "connection done";
}else{
    echo "no connection";
}

mysqli_select_db($con,'flightrecords');



$i=$_POST['id'];
$n=$_POST['name'];
$j=$_POST['doj'];
$s=$_POST['source'];
$d=$_POST['destination'];
$dt=$_POST['dtime'];
$at=$_POST['atime'];
$dr=$_POST['duration'];
$st=$_POST['stoppages'];

$p=" delete from flight where id = '$i'; ";
$result=mysqli_query($con,$p);
$q="insert into flight(id, name, doj, sourcea, destination, dtime, atime, duration, stops) values ('$i','$n','$j','$s','$d','$dt','$at','$dr','$st') ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);

if($num==1){
    $_SESSION['username']=$uname;
    $_SESSION['email']=$mail;
    header('location:adminFlightDetails.php');
}else{
    // echo '<script>alert("User not found")</script>';
    header('location:invalid.php');
}



?>
