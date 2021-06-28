<?php
session_start();
header('location:index.php');


$con=mysqli_connect('localhost','root');
if($con){
    echo "connection done";
}else{
    echo "no connection";
}

mysqli_select_db($con,'flightrecords');



$n=$_POST['name'];
$m=$_POST['email'];
$s=$_POST['subject'];
$g=$_POST['message'];

$q=" insert into feedback(name,email,subject,message) values('$n','$m','$s','$g') ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);


?>
