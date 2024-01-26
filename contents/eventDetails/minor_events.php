<?php
session_start();
include('../auth.php');
include('../connect.php'); 
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
    <title>Event Details</title>
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

  <body>

    <?php
    

if (isset($_GET['eventID'])) {
    $eventID = $_GET['eventID'];

    
    $sql = "SELECT * FROM events WHERE eventID = $eventID";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $eventDetails = mysqli_fetch_assoc($result);
        // Display event details using $eventDetails
        echo " <h1 id='HeadEr'>{$eventDetails['event_title']}</h1>";
        echo " <div class='event_headers'>
        <img
        id='runway_image'
          src={$eventDetails['event_imagepath']}
          alt='img'
        />
        </div>";
        echo "<section id='event-details'><strong>EVENT DETAILS: </strong> {$eventDetails['description']}</section>";
        echo "<p id='event-details'><strong>EVENT DATE: </strong> {$eventDetails['event_date']}</p>";
       
    } else {
        echo "Event not found.";
    }
} else {
    echo "Invalid request.";
}
?>
    <div class= "ticket-div">
            
            <a href="../events.php"><button class="location_btn" > &larr; Back to events</button></a>
            <a href="tickets.php"><button class="location_btn">Buy Tickets</button>
            </a>
            </div>
    </body>
</html>
