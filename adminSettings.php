<?php

session_start();
if(!isset($_SESSION['email'])){
    header('location:login.php');
}

if(!isset($_SESSION['username'])){
    header('location:login.php');
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
          <li><a href="adminDashboard.php">Home</a></li>
          <li><a href="adminProfile.php">Profile</a></li>
          <li><a href="adminSettings.php">Settings</a></li>
          <li><a href="adminCustomerDetails.php">Customer Details</a></li>
          <li><a href="adminFlightDetails.php">Flight Details</a></li>
          <li><a href="http://127.0.0.1:5000/">Predict Prices</a></li>
          <li><a href="adminPurchase.php">Book Tickets</a></li>
          <li><a href="adminFeedback.php">View Feedback</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
      <!-- // Left Sidebar -->

      <!-- Admin Content -->
      <div class="admin-content">

<div class="content">

    <h2 class="page-title">Update Profile</h2>

    <form action="adminUpdate.php" method="post" class="uform">
        <div>
            <label>Username</label><br><br>
            <input type="text" name="username" class="usertext-input" value="<?php echo $_SESSION['username'];?>" readonly>
            <br><br>
        </div><br>
        <div>
            <label>Email</label><br><br>
            <input type="email" name="email" class="usertext-input" value="<?php echo $_SESSION['email'];?>" readonly>
            <br><br>
        </div><br>
        <div>
            <label>Mobile</label><br><br>
            <input type="text" name="mobile" class="usertext-input" placeholder="999999999">
            <br><br>
        </div><br>
        <div>
            <label>Gender</label><br><br>
            <!-- <input type="text" name="gender" class="usertext-input" value=" <?php echo "$getGender";?>" disabled> -->
            <select id="gender" name="gender" class="usertext-input" unselected>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
            <br><br>
        </div><br>
        <div>
            <label>Date Of Birth</label><br><br>
            <input type="date" name="dob" class="usertext-input" placeholder="dd-mm-yyyy">
            <br><br>
        </div><br>
        <div>
            <label>Profession</label><br><br>
            <input type="text" name="profession" class="usertext-input" placeholder="Your profession">
            <br><br>
        </div><br>
        <br><br>
        <div>
        <button type="submit" class="btn btn-big" >Update</button>
          <a href="adminDashboard.php" class="btn btn-big">Go Back</a>
          
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
