<?php

session_start();
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

      <!-- Customer Content -->
      <div class="admin-content">
        <div class="content">
          <h2 class="page-title">Modify Flight</h2>

          <form action="adminModifyFlightPost.php" method="post" class="fmform">
        <div>
            <label>Id</label><br><br>
            <input type="text" name="id" class="usertext-input">
            <br><br>
        </div><br>
        <div>
            <label>Flight Name</label><br><br>
            <input type="text" name="name" class="usertext-input">
            <br><br>
        </div><br>
        <div>
            <label>Date of Journey</label><br><br>
            <input type="date" name="doj" class="usertext-input">
            <br><br>
        </div><br>
        <div>
            <label>Source</label><br><br>
            <input type="text" name="source" class="usertext-input">
            <br><br>
        </div><br>
        <div>
            <label>Destination</label><br><br>
            <input type="text" name="destination" class="usertext-input">
            <br><br>
        </div><br>
        <div>
            <label>Departure Time</label><br><br>
            <input type="text" name="dtime" class="usertext-input">
            <br><br>
        </div><br>
        <div>
            <label>Arrival Time</label><br><br>
            <input type="text" name="atime" class="usertext-input">
            <br><br>
        </div><br>
        <div>
            <label>Duration</label><br><br>
            <input type="text" name="duration" class="usertext-input">
            <br><br>
        </div><br>
        <div>
            <label>No. of Stoppages</label><br><br>
            <input type="number" name="stoppages" class="usertext-input">
            <br><br>
        </div><br>
        <br><br>
        <div>
        <button type="submit" class="btn btn-big" >Update</button>
          <a href="adminFlightDetails.php" class="btn btn-big">Go Back</a>
          
        </div>

    </form>
            
        </div>
      </div>
      <!-- // Customer Content -->

      <img src="" alt="" />
    </div>
    <!-- // Page Wrapper -->

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Custom Script -->
    <script src="js/scripts.js"></script>
  </body>
</html>
