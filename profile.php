<?php

session_start();
if(!isset($_SESSION['email'])){
    header('location:profile.php');
}
if(!isset($_SESSION['username'])){
    header('location:profile.php');
}
    $getName=" ";
    $getEmail=" ";
    $getMobile=" ";
    $getGender=" ";
    $getDob=" ";
    $getProfession=" ";

$con=mysqli_connect('localhost','root');
if($con){
    // echo "connection done";
}else{
    echo "no connection";
}
$mail=$_SESSION['email'];
mysqli_select_db($con,'flightrecords');
$qr=" select * from profile where email='$mail' ";
$result=mysqli_query($con,$qr);
$num=mysqli_num_rows($result);
if($num==1){
while ($row = $result->fetch_assoc()) {
    $getName=$row["username"];
    $getEmail=$row["email"];
    $getMobile=$row["mobile"];
    $getGender=$row["gender"];
    $getDob=$row["dob"];
    $getProfession=$row["profession"];
}
}
?>






<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
      crossorigin="anonymous"
    />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Candal|Lora"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap"
      rel="stylesheet"
    />

    <!-- Custom Styling -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- Admin Styling -->
    <link rel="stylesheet" href="css/admin.css" />

    <title>Customer-Home</title>
  </head>

  <body>
    <header>
      <div class="logo">
        <h1 class="logo-text">Flight Hint</h1>
      </div>
      <i class="fa fa-bars menu-toggle"></i>
      <ul class="nav">
        <li>
          <a href="#">
            <i class="fa fa-user"></i>
            <?php
            echo $_SESSION['username'];

          ?>
          </a>
        </li>
      </ul>
    </header>

    <!-- Customer Page Wrapper -->
    <div class="admin-wrapper">
      <!-- Left Sidebar -->
      <div class="left-sidebar">
      <ul>
          <li><a href="dashboard.php">Home</a></li>
          <li><a href="profile.php">Profile</a></li>
          <li><a href="settings.php">Settings</a></li>
          <li><a href="http://127.0.0.1:5000/">Predict Prices</a></li>
          <li><a href="purchase.php">Book Tickets</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
      <!-- // Left Sidebar -->

      <!-- Admin Content -->
      <div class="admin-content">

<div class="content">

    <h2 class="page-title">View Profile</h2>

    <form>
        <div>
            <label>Username</label><br><br>
            <input type="text" name="username" class="usertext-input" value="<?php echo $_SESSION['username'];?>" disabled>
            <br><br>
        </div><br>
        <div>
            <label>Email</label><br><br>
            <input type="email" name="email" class="usertext-input" value="<?php echo $_SESSION['email'];?>" disabled>
            <br><br>
        </div><br>
        <div>
            <label>Mobile</label><br><br>
            <input type="text" name="mobile" class="usertext-input" value=" <?php echo "$getMobile";?>" disabled>
            <br><br>
        </div><br>
        <div>
            <label>Gender</label><br><br>
            <input type="text" name="gender" class="usertext-input" value=" <?php echo "$getGender";?>" disabled>
            <br><br>
        </div><br>
        <div>
            <label>Date Of Birth</label><br><br>
            <input type="text" name="dob" class="usertext-input" value=" <?php echo "$getDob";?>" disabled>
            <br><br>
        </div><br>
        <div>
            <label>Profession</label><br><br>
            <input type="text" name="profession" class="usertext-input" value=" <?php echo "$getProfession";?>" disabled>
            <br><br>
        </div><br>
        <br><br>
        <div>
          <a href="dashboard.php" class="btn btn-big">Go Back</a>
          <a href="settings.php" class="btn btn-big">Update Profile</a>
        </div>

    </form>

</div>

</div>
<!-- // Admin Content -->



      <img src="" alt="" />
    </div>
    <!-- // Page Wrapper -->

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Custom Script -->
    <script src="js/scripts.js"></script>
  </body>
</html>
