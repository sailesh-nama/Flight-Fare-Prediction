<?php
session_start();
header('location:adminCustomerDetails.php');


$con=mysqli_connect('localhost','root');
if($con){
    echo "connection done";
}else{
    echo "no connection";
}

mysqli_select_db($con,'flightrecords');



$uid=$_POST['userid'];

$q=" select email from profile where id = '$uid' ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
while ($row = $result->fetch_assoc()) {
    $getEmail=$row["email"];
}
$q=" delete from  profile where email = '$getEmail' ";
$result=mysqli_query($con,$q);
$p=" delete from  login where email = '$getEmail' ";
$result=mysqli_query($con,$p);
$num=mysqli_num_rows($result);


if($num==1){
    // echo "duplicate data";
    // echo '<script>alert("Email already registered")</script>';
    header('location:adminCustomerDetails.php');
}

?>
