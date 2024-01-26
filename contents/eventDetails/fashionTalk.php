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

    <title>Fashion Talk</title>
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
                <button class="logout_btn" onclick="location.href='../logout.php'" >Log Out</button>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    
    <header>
      <h1 id="HeadEr">Panel disscussion by CEOs</h1>
    </header>
    <div class="talk_speakers">
      <img
        id="speakers_image"
        src="https://res.cloudinary.com/dbkjh2ws8/image/upload/v1702916433/KF7013/WhatsApp_Image_2023-12-18_at_15.38.01_vdvqzn.jpg"
        alt="CEO_pics"
      />
      <img
        id="speakers_image"
        src="https://res.cloudinary.com/dbkjh2ws8/image/upload/v1702898259/KF7013/WhatsApp_Image_2023-12-15_at_06.51.17_sxxjw1.jpg"
        alt="CEO_pics"
      />
      <img
        id="speakers_image"
        src="https://res.cloudinary.com/dbkjh2ws8/image/upload/v1702897854/KF7013/WhatsApp_Image_2023-12-14_at_20.29.18_lvnpxa.jpg"
        alt="CEO_pics"
      />
      <img
        id="speakers_image"
        src="https://res.cloudinary.com/dbkjh2ws8/image/upload/v1702898337/KF7013/WhatsApp_Image_2023-12-18_at_11.15.54_2_glbdgg.jpg"
        alt="CEO_pics"
      />
    </div>
    <div class="event_headers">
      <h2>
        Join us for an inspiring evening of fashion talks by CEOs of our
        partnering brands!
      </h2>
    </div>

    <section id="event-details">
      <h2>Event Details</h2>
      <p><b>Date:</b> Saturday 11th Dec, 2023</p>
      <p><b>Location:</b> 4 Proctor ST. Walker. Conference Hall 2</p>
      <p><b>Time:</b> 12:00 - 13:00</p>
      <p>
        Engage in a panel discussion with our industry pacesetters, gain
        insights, and network with professionals!
      </p>
    </section>

    <section id="speakers">
      <h2>Featured Speakers</h2>
      <ul>
        <li>Geneveive Okoro - CEO of CheersToEvolving</li>
        <li>Ogechi Welechi - CEO of Gech</li>
        <li>Walter Ogboka - CEO of Luka</li>
        <li>Akin Jonez - CEO of Jonez</li>
      </ul>
    </section>

    <section id="topics">
      <h2>Discussion Topics</h2>
      <ul>
        <li>The Future of Sustainable Fashion</li>
        <li>Innovations in Fashion Technology</li>
        <li>The Impact of Social Media on Fashion Trends</li>
        <li>Questions and Answers</li>
      </ul>
    </section>
    <div class= "ticket-div">
        <a href="tickets.php">
          <a href="../events.php"><button class="location_btn" > &larr; Back to events</button></a>
          <button class="location_btn">Buy Tickets</button>
        </a>
        </div>
  </body>
</html>
