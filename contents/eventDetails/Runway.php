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
    <title>Runway</title>
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
      <h1 id="HeadEr">Runway Fashion Show</h1>
    </header>
    <div class="event_headers">
      <img
        id="runway_image"
        src="https://res.cloudinary.com/dbkjh2ws8/image/upload/v1702779886/KF7013/pexels-nappy-3011499_snestj.jpg"
        alt="RunwayImage"
      />
      <h2>The best of the Winter collection 2023 from your favorites</h2>
    </div>

    <section id="event-details" class="content-section">
      <h2>Event Details</h2>
      <p><b>Date:</b> Saturday 11th Dec, 2023</p>
      <p><b>Location:</b> 4 Proctor ST. Walker. Conference Hall 2</p>
      <p><b>Time:</b> 14:00 - 15:00</p>
      <p>
        Join us for an exciting runway event showcasing the latest trends in
        fashion. Experience a night of glamour and style!
      </p>
    </section>

    <section id="vip-seating" class="content-section">
      <h3>Executive Seating</h3>
      <p>
        Exclusive front-row seating for early birds and executives. Limited
        availability, reserve your seat now!
      </p>
      <!-- <div>
        <a href="tickets.php">
          <button class="location_btn">Buy Tickets</button>
        </a>
      </div> -->
      <div  >
      <?php
      include('booking_btn.php');
      ?>
    </div>
   
    </section>

    <section id="event-gallery" class="content-section">
      <h2>Event Gallery</h2>
      <div class="image-container">
        <div class="img_cont">
          <img
            src="https://res.cloudinary.com/dbkjh2ws8/image/upload/v1702780217/KF7013/IMG_4315_dhi3so.jpg"
            alt="Runway Image"
            class="brand"
          />
          <img
            src="https://res.cloudinary.com/dbkjh2ws8/image/upload/v1702779950/KF7013/knitwear-7506177_1280_x3dnfj.jpg"
            alt="Runway Image"
            class="brand"
          />

          <img
            src="https://res.cloudinary.com/dbkjh2ws8/image/upload/v1702779864/KF7013/pexels-nappy-3048347_wjoaqy.jpg"
            alt="Runway Image"
            class="brand"
          />

          <img
            src="https://res.cloudinary.com/dbkjh2ws8/image/upload/v1702898340/KF7013/WhatsApp_Image_2023-12-18_at_11.15.54_c8yzwr.jpg"
            alt="Runway Image"
            class="brand"
          />
          <img
            src="https://res.cloudinary.com/dbkjh2ws8/image/upload/v1702779936/KF7013/fashion-7506175_1280_yr0ha3.jpg"
            alt="Runway Image"
            class="brand"
          />
          <img
            src="https://res.cloudinary.com/dbkjh2ws8/image/upload/v1702780213/KF7013/IMG_4309_ypytbm.jpg"
            alt="Runway Image"
            class="brand"
          />
          <img
            src="https://res.cloudinary.com/dbkjh2ws8/image/upload/v1702898935/KF7013/WhatsApp_Image_2023-12-18_at_11.28.30_cr4tdx.jpg"
            alt="Runway Image"
            class="brand"
          />
          <img
            src="https://res.cloudinary.com/dbkjh2ws8/image/upload/v1702779929/KF7013/fashion-7506154_1280_dv4ijd.jpg"
            alt="Runway Image"
            class="brand"
          />
        </div>
      </div>
    </section>
    <div class= "ticket-div">
        <a href="tickets.php">
          <a href="../events.php"><button class="location_btn" > &larr; Back to events</button></a>
          <button class="location_btn">Buy Tickets</button>
        </a>
        </div>
  </body>
</html>
