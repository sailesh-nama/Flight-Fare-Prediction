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
          <li><a href="dashboard.php">Home</a></li>
          <li><a href="profile.php">Profile</a></li>
          <li><a href="settings.php">Settings</a></li>
          <li><a href="http://127.0.0.1:5000/">Predict Prices</a></li>
          <li><a href="purchase.php">Book Tickets</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
      <!-- // Left Sidebar -->

        <style>
            .usertext-input{
                width: 300px;
            }
            .getBox{
                float: left;
                padding-right:47px;
                
            }
            label{
                font-size:20px;
            }
        </style>

      <!-- Customer Content -->
      <div class="admin-content">
        <div class="content">
          <h2 class="page-title">View Available Flights</h2>
            <br>
            <br>
          <form action="viewFlight.php" method="post">
              <div class="getBox">
                <label>Source</label><br><br>
                <select name="src" class="usertext-input">
                    <option value="Delhi">Delhi</option>
                    <option value="Kolkata">Kolkata</option>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Chennai">Chennai</option>
                </select>
              </div>
              <div class="getBox">
                <label>Destination</label><br><br>
                <select name="dest" class="usertext-input">
                    <option value="Cochin">Cochin</option>
                    <option value="Delhi">Delhi</option>
                    <!-- <option value="New Delhi">New Delhi</option> -->
                    <option value="Hyderabad">Hyderabad</option>
                    <option value="Kolkata">Kolkata</option>
                </select>
              </div>
              <div class="getBox">
                <label>Date Of Journey</label><br><br>
                <input type="date" name="doj" class="usertext-input" placeholder="dd-mm-yyyy">
              </div>
              <div class="getBox">
                  <br><br>
              <button type="submit" class="btn btn-big" >View Flights</button>
              <a href="dashboard.php" class="btn btn-big">Go Back</a>
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
