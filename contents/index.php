<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      type="text/css"
      href="../assets/stylesheets/index.css "
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../assets/stylesheets/events.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Mada:wght@200;300;400;500;800&family=Mouse+Memoirs&family=Poppins:ital,wght@0,200;0,400;1,700&display=swap"
      rel="stylesheet"
    />
    <title>Styles Exhibit</title>
  </head>

  <body>
    <header>
     
      <?php
      include('header.php');
      ?>
    </header>
    <div class="Hero">
      <div class="hero_container">
        <div id="Hero_text">
          <h1>A Style for every Story!</h1>
          <p>
            Beauty within the walls and fabrics of our great designers.<br />
            Come and experices the rebirth of style!
          </p>
        </div>
        <div class="location">
          <h3 id="info">DATE TIME AND VENUE</h3>
          <p>Saturday 9th Dec, 2023</p>
          <p>10:00 Conference Hall 2</p>
          <p>4 Proctor ST. Walker. Newcastle NE63DX</p>
          <div>
            <a href="../contentssignUp.php">
              <button class="location_btn">Sign Up</button>
            </a>

            <a href="../contents/eventDetails/tickets.php">
              <button class="location_btn">Buy Tickets</button>
            </a>
          </div>
        </div>
      </div>
      <svg id="waves" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffe1d4"
          fill-opacity="1"
          d="M0,160L48,165.3C96,171,192,181,288,176C384,171,480,149,576,165.3C672,181,768,235,864,224C960,213,1056,139,1152,133.3C1248,128,1344,192,1392,224L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </div>
    <section>
      <div class="event_section">
        <div>
          <h1 class="event_title">EVENTS & ACTIVITIES</h1>
        </div>
        <div class="event_card">
          <div>
            <p class="event_note">
              You won't want to miss this incredible event that is coming to
              Newcastle! In addition to the main Runway event showcasing styles
              from renowned brands like Cheers to Evolving, Gech, Luka, Jonez,
              and many more theres also networking opportunities, and fashion
              talks, product display for sale, giveaways, fun and many more. Get
              your tickets now by clicking the link below.
            </p>
            <a href="../contents/eventDetails/tickets.php">
              <button class="event_btn_">Buy Tickets</button></a
            >
          </div>
          <img src="../assets/images/jonesImg.jpeg" alt="Img" />
        </div>
        <div>
          <div class="event_card">
            <img src="../assets/images/african.jpg" alt="Img" />
            <div>
              <p class="event_note">
                Do you run a fashion company and would like to take part in this
                event, or are you a fashion school looking to enrol new
                students? Of course, there are opportunities for you to Book a
                stall and turn up on the day of the event with products ready to
                be put up sale or your team prepared to conduct some recruiting
                and counselling!
              </p>
              <a href="../contents/signUp.php">
                <button class="event_btn_">Sign Up</button></a
              >
            </div>
          </div>
        </div>
        <div class="event_btn">
          <a href="../contents/events.php">
            <button class="event_btn_view">View More...</button>
          </a>
        </div>
      </div>
    </section>
    <div class="ticket_booking">
      <h3>Get Your Tickets here</h3>
      <p>
        Made up your mind to be part of this spectacular event? <br />
        Get your ticket now!
      </p>
      <div class="event_book_btn">
        <a href="../contents/signUp.php">
          <button class="event_btn_">Sign Up</button></a
        >
        <a href="../contents/eventDetails/tickets.php">
          <button class="event_btn_">Buy Tickets</button></a
        >
      </div>
    </div>

    <div class="partners">
      <h2 id="parter_text">Our Partners</h2>
      <img
        class="partner_logo"
        src="../assets/images/logos/CTE_Logo.jpeg"
        alt="logo"
      />
      <img
        class="partner_logo"
        src="../assets/images/logos/Gech_Logo.jpeg"
        alt="logo"
      />
      <img
        class="partner_logo"
        src="../assets/images/logos/Luka Logo.png"
        alt="logo"
      />
      <img
        class="partner_logo"
        src="../assets/images/logos/Jonez_Logo.jpeg"
        alt="logo"
      />
    </div>
    <section class="ticket_booking" id="ticket_booking">
      <div>
        <h2>For more inquires</h2>
        <p>Email Us: <span>theodoranneoma@gmail</span></p>
        <p>Phone:<span> +447424346916</span></p>
        <p>We will be more happy to assist you</p>
      </div>
      <div>
        <a
          href="https://docs.google.com/document/d/1q5-vNu4e28QwxdxJUtknC8Zo7m2Kev85xq21Q0Hz2UE/edit?usp=sharing"
          target="_blank"
          ><button class="wireframe_btn">Attributions and Credits</button>
        </a>
      </div>
    </section>
    <footer class="footer">
      <p>© Styles Exhibition 2023</p>
      <p>® Designed and Developed by Theodora</p>
    </footer>
  </body>
</html>
