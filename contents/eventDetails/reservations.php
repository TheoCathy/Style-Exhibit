<?php
session_start();
include('../connect.php')
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
    <title>Event reservations</title>
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
          <a href="../logout.php">
                <button class="logout_btn">Log Out</button>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <h1 h1 id="HeadEr">Your Booking Reservations</h1>
    

    <div class="booking-container" id="bookingContainer">
    <?php
        // Check if user is logged in
        if (isset($_SESSION['customerID'])) {
            $customerID = $_SESSION['customerID'];

            // Fetch bookings for the logged-in user from the database
            $query = "SELECT b.number_people, e.event_title, e.event_date, b.total_booking_cost, b.booking_notes 
                      FROM booking b
                      INNER JOIN events e ON b.eventID = e.eventID
                      WHERE b.customerID = $customerID";

            $result = $conn->query($query);

            // Check if there are bookings
            if ($result && $result->num_rows > 0) {
                // Iterate through the database results and generate booking items
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="booking-item">';
                    echo '<div class="booking-details">';
                    echo '<div>';
                    echo '<strong>Title of Event:</strong> ' . $row['event_title'] . '<br>';
                    echo '<strong>Number of Tickets:</strong> ' . $row['number_people'] . '<br>';
                    echo '<strong>Date:</strong> ' . $row['event_date'] . '<br>';
                    echo '<strong>Total Price:</strong> £' . $row['total_booking_cost'] . '<br>';
                    echo '<strong>Booking Notes:</strong> ' . $row['booking_notes'] . '<br>';
                    echo '</div>';
                    echo '<div class="booking-status">Booking Confirmed</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                // if no bookings found
                echo '<h5>You do not have any events booked. Kindly purchase tickets and come back to view.</h5>';
            }
        } else {
            // if User is not logged in
            echo '<p>Please log in to view your bookings.</p>';
        }

        $conn->close();
        ?>
        <div> <a href="../events.php"><button class="wireframe_btn" > &larr; Back to events</button></a></div>
    </div>
</body>
</html>
