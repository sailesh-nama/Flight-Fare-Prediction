<?php
session_start();

header('location:settings.php');

$con=mysqli_connect('localhost','root');
if($con){
    echo "connection done";
}else{
    echo "no connection";
}

mysqli_select_db($con,'flightrecords');



$uname=$_POST['username'];
$mail=$_POST['email'];
$mob=$_POST['mobile'];
$gen=$_POST['gender'];
$doba=$_POST['dob'];
$pr=$_POST['profession'];

$p=" delete from profile where email = '$mail'; ";
$result=mysqli_query($con,$p);
$q="insert into profile(username, email, mobile, gender, dob, profession) values('$uname','$mail','$mob','$gen','$doba','$pr') ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);

if($num==1){
    $_SESSION['username']=$uname;
    $_SESSION['email']=$mail;
    header('location:profile.php');
}else{
    // echo '<script>alert("User not found")</script>';
    header('location:invalid.php');
}



?>
