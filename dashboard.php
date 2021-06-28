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
    
    <!-- Flash cards CSS -->
    <link rel="stylesheet" href="css/customerhome.css" />

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

     <!-- Customer Content -->
     <div class="admin-content">
      <div class="content">
        <div class="skill-card one">
          <header class="skill-card__header"><img class="skill-card__icon" src="images/offers.png" alt="offer Logo" /></header>
          <section class="skill-card__body">
            <h2 class="skill-card__title">Offers</h2><span class="skill-card__duration">Limited Time Only</span>
            <ul class="skill-card__knowledge">
              <li>5% off on all domestic flights.</li>
              <!-- <li>10% off on International flights.</li> -->
              <li>20% off for first flight booking.</li>
            </ul>
          </section>
        </div>
        <div class="skill-card two">
          <header class="skill-card__header"><img class="skill-card__icon" src="images/stats.png" alt="stats Logo" /></header>
          <section class="skill-card__body">
            <h2 class="skill-card__title">Stats</h2><span class="skill-card__duration">Do you Know ?</span>
            <ul class="skill-card__knowledge">
              <li>1M+ customers</li>
              <li>500k+ predictions</li>
              <li>10k+ bookings</li>
              <li>200+ airlines</li>
            </ul>
          </section>
        </div>
        <div class="skill-card three">
          <header class="skill-card__header"><img class="skill-card__icon" src="images/tieups.png" alt="tieups Logo" /></header>
          <section class="skill-card__body">
            <h2 class="skill-card__title">Tie-Ups</h2><span class="skill-card__duration">Airline partners</span>
            <ul class="skill-card__knowledge">
              <li>Indigo</li>
              <li>Air India</li>
              <li>Jet Airways</li>
              <li>Spice Jet</li>
            </ul>
          </section>
        </div>
        <div class="skill-card four">
          <header class="skill-card__header"><img class="skill-card__icon" src="images/milestones.png" alt="miletones Logo" /></header>
          <section class="skill-card__body">
            <h2 class="skill-card__title">Milestones</h2><span class="skill-card__duration">Our Achievements</span>
            <ul class="skill-card__knowledge">
              <li>2021 Feb - Ideation</li>
              <li>2021 Mar - Development</li>
              <li>2021 Apr - Design</li>
              <li>2021 May - Completion</li>
            </ul>
          </section>
        </div>
        <div class="skill-card five">
          <header class="skill-card__header"><img class="skill-card__icon" src="images/sponsers.png" alt="sponsors Logo" /></header>
          <section class="skill-card__body">
            <h2 class="skill-card__title">Sponsors</h2><span class="skill-card__duration">Our Supporters</span>
            <ul class="skill-card__knowledge">
              <li>Make My Trip</li>
              <li>GoIbibo</li>
              <li>Ixigo</li>
              <li>Airbnb</li>
            </ul>
          </section>
        </div>
        <div class="skill-card six">
          <header class="skill-card__header"><img class="skill-card__icon" src="images/founders.png" alt="founders Logo" /></header>
          <section class="skill-card__body">
            <h2 class="skill-card__title">Creaters</h2><span class="skill-card__duration">Give them a follow</span>
            <ul class="skill-card__knowledge">
              <li>Rahul Srivastava</li>
              <li>
                <a href="https://www.linkedin.com/in/rahul-sriv">
                   <i class="fab fa-linkedin fa-lg"></i>
                </a>
                <a href="https://www.facebook.com/profile.php?id=100051113870106">
                   <i class="fab fa-facebook-square fa-lg"></i>
                </a>
              </li>
              
              <li>Sailesh Nama</li>
              <li>
                <a href="https://www.linkedin.com/in/sailesh-n-6b8540118">
                   <i class="fab fa-linkedin fa-lg"></i>
                </a>
                <a href="https://www.instagram.com/sailesh_nama/">
                   <i class="fab fa-instagram fa-lg"></i>
                </a>
                <a href="https://www.facebook.com/sailesh.nama">
                   <i class="fab fa-facebook-square fa-lg"></i>
                </a>
              </li>
            </ul>
          </section>
        </div>
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
