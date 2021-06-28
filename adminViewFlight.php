<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}


$con=mysqli_connect('localhost','root');
if($con){
    // echo "connection done";
}else{
    echo "no connection";
}

mysqli_select_db($con,'flightrecords');



$s=$_POST['src'];
$d=$_POST['dest'];
$j=$_POST['doj'];

$q=" select * from flight where sourcea = '$s' and destination='$d' and doj='$j' ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);


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

        <style>
            .usertext-input{
                width: 300px;
            }
            .getBox{
                float: left;
                padding-right:47px;

            }
            /* label{
                font-size:20px;
            } */
            table{
                margin-top:50px;
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
              <a href="adminDashboard.php" class="btn btn-big">Go Back</a>
              <br><br>
              </div>

            </form>



            <table>
                <tr>
                    <td colspan="9">
                    <h2 class="page-title">Available Flight Details</h2>
                    </td>
                </tr>
                <tr>
                   <th>Id</th>
                   <th>Name</th>
                   <th>Date of Journey</th>
                   <th>Source</th>
                   <th>Destination</th>
                   <th>Departure Time</th>
                   <th>Arrival Time</th>
                   <th>Duration</th>
                   <th>Stoppages</th>
                </tr>

                <?php

                   while ($row = $result->fetch_assoc()) {

                ?>

                <tr>
                   <td><?php echo $row['id'];?></td>
                   <td><?php echo $row['name'];?></td>
                   <td><?php echo $row['doj'];?></td>
                   <td><?php echo $row['sourcea'];?></td>
                   <td><?php echo $row['destination'];?></td>
                   <td><?php echo $row['dtime'];?></td>
                   <td><?php echo $row['atime'];?></td>
                   <td><?php echo $row['duration'];?></td>
                   <td><?php echo $row['stops'];?></td>
                </tr>

                <?php
                   }
                ?>

            </table>

            <br>
            <br>
            <br>
            <form action="adminBookTicket.php" method="post" class="myform">
                <div class="getBox">
                    <label>Enter Flight ID</label>
                    <br>
                    <br>
                    <input type="text" name="flightid" class="usertext-input">
                    <br>
                    <br>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-big" >Book Ticket</button>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
            </form>
        </div>
        <br>
        <br>


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
