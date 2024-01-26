<?php
session_start();
include('../auth.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      type="text/css"
      href="../../assets/stylesheets/index.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../../assets/stylesheets/events.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../../assets/stylesheets/eventDetails.css"
    />
    <title>Fashion School</title>
  </head>

  <body>
    <div class="container">
      <div id="navbar">
        <div id="logo">
          <img src="../../assets/images/logos/My_logo_2.png" alt="logo" />
        </div>
        <ul>
          <li class="nav_Links"><a href="../index.php">Home</a></li>
          <li class="nav_Links"><a href="../events.php">Events</a></li>
          <li class="nav_Links"><a href="../index.php">Contact</a></li>
        </ul>

        <div id="auth">
          <ul>
          <li class="nav_Links">
          <a href="reservations.php"><button class="wireframe_btn">View booked events</button></a>
          <a href="../logout.php">
                <button class="logout_btn">Log Out</button>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <header>
      <h1 id="HeadEr">Fashion School Enrollment Event</h1>
    </header>
    <div class="event_headers">
      <img
        id="runway_image"
        src="https://res.cloudinary.com/dbkjh2ws8/image/upload/v1702780711/KF7013/pexels-karolina-grabowska-4219101_ytip8i.jpg"
        alt="fashionImg"
      />
      <h2>
        Join us for an exciting event to explore and enroll in our fashion
        school programs!
      </h2>
    </div>

    <section id="event-details">
      <h2>Event Details</h2>
      <p><b>Date:</b> Saturday 11th Dec, 2023</p>
      <p><b>Location:</b> 4 Proctor ST. Walker. Conference Hall 2</p>
      <p><b>Time:</b> 10:00 - 12:00</p>
      <p>
        Meet representatives from top fashion schools, learn about programs, and
        enroll on the spot!
      </p>
    </section>

    <section id="activities">
      <h2>Activities</h2>
      <ul>
        <li>Interactive Workshops</li>
        <li>Portfolio Reviews</li>
        <li>Q&A Sessions with School Representatives</li>
        <li>On-Site Enrollment</li>
      </ul>
      <div>
        <a href="tickets.php">
          <button class="location_btn">Buy Tickets</button>
        </a>
      </div>
    </section>

    <section id="contact">
      <h2>Contact Information</h2>
      <p>
        For more information, contact us at
        <a href="mailto:theocathyn@gmail.com">theocathyne@gmail.com</a>
      </p>
      <p>Call us on +44712345678</p>
      <a href="../events.php"><button class="location_btn" > &larr; Back to events</button></a>

    </section>
  </body>
</html>
