<?php
session_start();



$con=mysqli_connect('localhost','root');
if($con){
    echo "connection done";
}else{
    echo "no connection";
}

mysqli_select_db($con,'flightrecords');



$uname=$_POST['username'];
$mail=$_POST['email'];
$pswd=$_POST['password'];
$cnfpswd=$_POST['confirm-password'];

$q=" select * from login where email = '$mail' ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);


if($num==1){
    // echo "duplicate data";
    // echo '<script>alert("Email already registered")</script>';
    header('location:invalid2.php');
}else{
    $qy=" insert into login(username,email,password) values('$uname','$mail','$pswd') ";
    mysqli_query($con,$qy);
    header('location:login.php');
}

?>
