<?php
session_start();


$con=mysqli_connect('localhost','root');
if($con){
    // echo "connection done";
}else{
    echo "no connection";
}

mysqli_select_db($con,'flightrecords');


$mail=$_POST['email'];
$pswd=$_POST['password'];


$q=" select * from login where email = '$mail' && password = '$pswd' ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
while ($row = $result->fetch_assoc()) {
    $getName=$row["username"];
    $getEmail=$row["email"];
}
// $q2=" select username from login where email = '$mail' && password = 'pswd' ";
// $getName=mysqli_query($con,$q);

if($num==1 && $getEmail=="shyam@gmail.com"){
    $_SESSION['username']=$getName;
    $_SESSION['email']=$getEmail;
    header('location:adminDashboard.php');
}
else if($num==1){
    $_SESSION['username']=$getName;
    $_SESSION['email']=$getEmail;
    header('location:dashboard.php');
}else{
    // echo '<script>alert("User not found")</script>';
    header('location:invalid.php');
}

?>
