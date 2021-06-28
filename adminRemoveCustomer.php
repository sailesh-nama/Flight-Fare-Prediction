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
          <h2 class="page-title">Customer Details</h2>

            <table>

                 <tr>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Gender</th>
                    <th>Profession</th>
                </tr>

                <?php

                    $con=mysqli_connect('localhost','root');
                    if($con){
                        // echo "connection done";
                    }else{
                        echo "no connection";
                    }

                    mysqli_select_db($con,'flightrecords');

                    $q=" select * from profile ";
                    $result=mysqli_query($con,$q);
                    $num=mysqli_num_rows($result);
                    while ($row = $result->fetch_assoc()) {

                ?>

                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['mobile'];?></td>
                    <td><?php echo $row['gender'];?></td>
                    <td><?php echo $row['profession'];?></td>
                </tr>

                <?php
                    }
                 ?>

            </table>
         <br><br><br>
         <form action="adminDeleteUser.php" method="post" class="dform">
        <div>
            <label>Enter User ID</label><br><br>
            <input type="text" name="userid" class="usertext-input">
            <br><br>
        </div><br>
        <br>
        <button type="submit" class="btn btn-big" >Delete</button>
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
