<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Flight Hint</title>
    <link rel="stylesheet" href="css/mainStyle.css" type="text/css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
  <a name="home"></a>
    <header>
      <section class="navsection">
        <div class="logo">
          <h2>Flight Hint : Flight Fare Prediction Web Application</h2>
        </div>
        <nav>
          <a href="#home">Home</a>
          <a href="#about">About</a>
          <a href="#features">Features</a>
          <a href="login.php">Dashboard</a>
          <a href="#feedback">Feedback</a>
          <a href="#contact">Contact</a>
        </nav>
      </section>
      <main>
        <div class="leftside">
          <h4>Welcome to</h4>
          <h1>Flight Hint</h1>
          <h2>Predict. Plan. Purchase.</h2>
          <br />
          <a href="login.php" class="btn" target="_blank"
            >Get Started</a
          >
        </div>
        <div class="rightside">
          <img src="images/speed_test.svg" alt="speed_test" />
        </div>
      </main>
    </header>
    <a name="about"></a>
    <div class="curved">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#92acd3"
          fill-opacity="1"
          d="M0,160L26.7,186.7C53.3,213,107,267,160,266.7C213.3,267,267,213,320,208C373.3,203,427,245,480,261.3C533.3,277,587,267,640,224C693.3,181,747,107,800,90.7C853.3,75,907,117,960,160C1013.3,203,1067,245,1120,218.7C1173.3,192,1227,96,1280,96C1333.3,96,1387,192,1413,240L1440,288L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"
        ></path>
      </svg>
      <h1>About</h1>
      <p>
        <img src="images/journey.svg" alt="speed_test" class="imgshow" />
        As air travel is getting more and more popular these days, getting a
        flight ticket at a reasonable price is a major concern as the flight
        ticket prices are known to vary unexpectedly. The factors involved in
        pricing dynamically change over time and make the price fluctuate. Many
        airlines change ticket prices for their revenue management. Predicting
        the optimal timing for airline ticket purchasing from the consumer’s
        perspective is therefore challenging. Buyers usually have insufficient
        information about future price movements and fluctuations, as a result
        of which it is very hard for the client to buy an air ticket at the most
        reduced cost.<br />To solve this problem, flight travellers and
        customers can make use of Flight Hint to predict flight fare for a
        period of time and plan their travel accordingly <br />as per their
        budget. Happy Journey :)
      </p>
    </div>
    <br /><br />
    <a name="features"></a>
    <div class="break"></div>
    <div class="instr">
      <div class="container">
        <h2>Features :</h2>
        <ul type="disc">
          <li>
            <p>
              Flight details of all domestic flights along with departure and
              arrival date and time
            </p>
          </li>
          <li>
            <p>
              The customer can predict flight fares for multiple dates and
              multiple airlines
            </p>
          </li>
          <li>
            <p>Expected price is shown along with 10 days graphical analysis</p>
          </li>
          <li>
            <p>
              Predictions made are based on reliable historical data hence are
              accurate
            </p>
          </li>
          <li>
            <p>
              The prediction will help a traveller to decide a specific airline
              as per his/her budget
            </p>
          </li>
          <li>
            <p>
              The customer can analyze and plan the travel accordingly and
              decide whether to buy now or wait
            </p>
          </li>
        </ul>
      </div>
    </div>

    <div class="tags">
      <div class="box">
        <div class="polaroid">
          <img
            src="https://image.freepik.com/free-vector/business-people-planning-illustration-cartoon-employee-character-team-working-together-business-plan-scheduling-week-month-task-office-planner-calendar-concept-white_213110-445.jpg"
            alt="5 Terre"
            width="100%"
          />
          <div class="container2">
            <h3>Plan</h3>
            <br />
            <p></p>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="polaroid">
          <img
            src="https://static.vecteezy.com/system/resources/previews/000/542/374/non_2x/vector-online-flight-booking-illustration.jpg"
            alt="5 Terre"
            width="100%"
          />
          <div class="container2">
            <h3>Predict</h3>
            <br />
            <p></p>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="polaroid">
          <img
            src="https://image.freepik.com/free-vector/ticket-booking-online-service-illustration-flight-booked-through-mobile-application-book-purchase-travel-internet_121223-708.jpg"
            alt="5 Terre"
            width="100%"
          />
          <div class="container2">
            <h3>Purchase</h3>
            <br />
            <p></p>
          </div>
        </div>
      </div>
    </div>
    <a name="feedback"></a>
    <div class="break"></div>
    <img src="images/message_sent_1030.svg" alt="" class="imgfeed" />
    <div class="feed">
      <div class="feedback">
        <h1>Was the Prediction Helpful? Give your Feedback</h1>
        <form action="feedback.php" method="post">
          <input type="text" class="input-field" placeholder="Your Name" name="name" />
          <input type="email" class="input-field" placeholder="Your Email" name="email" />
          <input type="text" class="input-field" placeholder="Subject" name="subject"/>
          <textarea
            type="text"
            class="text-field"
            placeholder="Your Message"
            name="message"
          ></textarea>
          <br /><br />
          <button class="btn1" onclick='alert("Feedback submitted successfully")'>Submit</button>
        </form>
      </div>
    </div>
    <a name="contact"></a>
    <div class="break"></div>
    <div class="foot">
      <footer class="footer">
        <div class="con">
          <div class="row">
            <div class="footer-col">
              <h4>Contact Us</h4>
              <ul>
                <li><a href="#">+91 99775 99775</a></li>
                <li><a href="#">+91 55664 55664</a></li>
                <li><a href="#">flighthint@gmail.com</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>Address</h4>
              <ul>
                <div class="add">
                  C-521 <br />GTB Nagar<br />Prayagraj<br />Uttar Pradesh
                </div>
              </ul>
            </div>
            <div class="footer-col">
              <h4>Quick links</h4>
              <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="login.php">Dashboard</a></li>
                <li><a href="#about">About</a></li>
                <!-- <li><a href="login.php">Get Started</a></li> -->
                <li><a href="#features">Features</a></li>
                <li><a href="#feedback">Feedback</a></li>
              </ul>
            </div>

            <div class="footer-col">
              <h4>Follow Us</h4>
              <div class="social-links">
                <a href="#"
                  ><i class="fa fa-facebook-official" aria-hidden="true"></i
                ></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"
                  ><i class="fa fa-instagram" aria-hidden="true"></i
                ></a>
                <a href="#"
                  ><i class="fa fa-youtube-play" aria-hidden="true"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
        <p class="copyright">All rights reserved. Flight Hint © 2021</p>
      </footer>
    </div>
  </body>
</html>
