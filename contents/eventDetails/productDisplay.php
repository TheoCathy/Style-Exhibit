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

    <title>Product Display</title>
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
                <button class="logout_btn" onclick="location.href='../logout.php'">Log Out</button>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <header>
      <h1 id="HeadEr">Fashion Brand Stalls</h1>
    </header>
    <div class="event_headers">
      <h2>Discover the creativity and originality of top fashion brands!</h2>
    </div>

    <section id="brand-stalls">
      <div class="brand">
        <img
          src="https://res.cloudinary.com/dbkjh2ws8/image/upload/v1702898335/KF7013/WhatsApp_Image_2023-12-18_at_11.15.54_1_hoyugv.jpg"
          alt="Product_img"
        />
        <h2>Jonez</h2>
      </div>

      <div class="brand">
        <img
          src="https://res.cloudinary.com/dbkjh2ws8/image/upload/v1702780139/KF7013/IMG_4297_oa1ogm.jpg"
          alt="Product_img"
        />
        <h2>Gech Styles</h2>
      </div>

      <div class="brand">
        <img
          src="https://res.cloudinary.com/dbkjh2ws8/image/upload/v1702780257/KF7013/IMG_4300_iabmsj.jpg"
          alt="Product_img"
        />
        <h2>Luka</h2>
      </div>
      <div class="brand">
        <img
          src="https://res.cloudinary.com/dbkjh2ws8/image/upload/v1702780162/KF7013/IMG_4299_uz4xqg.jpg"
          alt="Product_img"
        />
        <h2>Gech Styles</h2>
      </div>

      <div class="brand">
        <img
          src="https://res.cloudinary.com/dbkjh2ws8/image/upload/v1702780257/KF7013/IMG_4301_tu0dgh.jpg"
          alt="Product_img"
        />
        <h2>Luka</h2>
      </div>
      <div class="brand">
        <img
          src="https://res.cloudinary.com/dbkjh2ws8/image/upload/v1702899896/KF7013/WhatsApp_Image_2023-12-18_at_11.41.35_zl8xl0.jpg"
          alt="Product_img"
        />
        <h2>CheersToEvolving</h2>
      </div>
      <div class="brand">
        <img
          src="https://res.cloudinary.com/dbkjh2ws8/image/upload/v1702900195/KF7013/WhatsApp_Image_2023-12-18_at_11.49.37_a4g9rz.jpg"
          alt="Product_img"
        />
        <h2>Jonez</h2>
      </div>
      <div class="brand">
        <img
          src="https://res.cloudinary.com/dbkjh2ws8/image/upload/v1702900201/KF7013/WhatsApp_Image_2023-12-18_at_11.48.40_wgdzqv.jpg"
          alt="Product_img"
        />
        <h2>CheersToEvolving</h2>
      </div>
      <div class="brand">
        <img
          src="https://res.cloudinary.com/dbkjh2ws8/image/upload/v1702898279/KF7013/WhatsApp_Image_2023-12-15_at_08.17.43_xcnqge.jpg"
          alt="Product_img"
        />
        <h2>Gech Styles</h2>
      </div>

      <div>
        <a href="tickets.php">
          <button class="location_btn">Buy Tickets</button>
        </a>
      </div>
    </section>
  </body>
</html>
