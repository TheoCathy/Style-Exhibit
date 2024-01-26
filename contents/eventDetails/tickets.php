<?php
session_start();
include('../auth.php');
include('../connect.php');

?>

<?php 
    // DEFINING VARIABLES
    $ticketPurchase = false;

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $number_people = $_POST['NumPeople'];
  $total_booking_cost = $_POST['cost'];
  $booking_notes = $_POST['notes'];
  $customerID = $_SESSION['customerID'];
  $eventID = $_POST['options'];

$eventID = mysqli_real_escape_string($conn, $eventID);
$customerID = mysqli_real_escape_string($conn, $customerID);
$number_people = mysqli_real_escape_string($conn, $number_people);
$total_booking_cost = mysqli_real_escape_string($conn, $total_booking_cost);
$booking_notes = mysqli_real_escape_string($conn, $booking_notes);


  // Funtion to remove the £ in the total amount in order to save to db
  $final_total = str_replace('£', '', $total_booking_cost);

  
  
 // Insert the booking details into the booking table
 $sql = "INSERT INTO `booking` (`eventID`, `customerID`, `number_people`, `total_booking_cost`, `booking_notes`) 
     VALUES ('$eventID', '$customerID', '$number_people', '$final_total', '$booking_notes')";
           
 $result = mysqli_query($conn, $sql);

 if ($result) {
  $ticketPurchase = true;
}
}

// Redirect if booking is successful
if ($ticketPurchase) {
  header("Location: ticketConfirm.php");
  exit();
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      type="text/css"
      href="../../assets/stylesheets/index.css "
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../../assets/stylesheets/events.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Mada:wght@200;300;400;500;800&family=Mouse+Memoirs&family=Poppins:ital,wght@0,200;0,400;1,700&display=swap"
      rel="stylesheet"
    />
    <title>TICKETS</title>
  </head>

  <body>
    <div class="container">
       <div id="navbar">
        <div id="logo">
          <img src="../../assets/images/logos/My_logo_2.png" alt="logo" />
        </div>
        <ul>
          <li class="nav_Links"><a href="../index.html">Home</a></li>
          <li class="nav_Links">
            <a href="../events.php">Events</a>
          </li>
          <li class="nav_Links">
            <a href="../index.html">Contact</a>
          </li>
        </ul>

        <div id="auth">
          <ul>
            <li class="nav_Links">
              <a href="../logout.php">
                <button
                  class="logout_btn"
                >
                  Log Out
                </button>
              </a>
            </li>
          </ul>
        </div>
      </div> 
    </div>

    <section class="form_model">
      <div class="form-container2">
        <form method="post">
          <h2 id="tickets_header">Get your tickets and book your reservation!</h2>
          <div class="form-item">
            <!-- The events dropdown are dynamically  gotten from the db  -->
            <?php
$sql = "SELECT eventID, event_title, price_per_person FROM events";

if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        echo "<div class='form-item'>
                <select
                    id='eventSelect'
                    name='options'
                    onchange='updateCost(this)'
                    placeholder='Event to book:'
                >";
        while ($row = mysqli_fetch_array($result)) {
            $eventID = $row['eventID'];
            $eventTitle = $row['event_title'];
            echo "<option value='$eventID'>$eventTitle</option>";
        }
        echo "</select>
              </div>
              <div class='form-item'>
                <input
                    id='NumPeople'
                    name='NumPeople'
                    required
                    type='number'
                    min='1'
                    max='10'
                    placeholder='Number of People'
                    onchange='updateCost()'
                />
              </div>
              <div class='form-item'>
                <input
                    id='cost'
                    name='cost'
                    readonly
                    type='text'
                    placeholder='Total Cost'
                    
                />
      
              </div>";
    } else {
        echo "No events found";
    }
} else {
    echo "Error executing query: " . mysqli_error($conn);
}
?>
          </div>
          <div class="form-item">
            <textarea placeholder="Booking Notes..." id ="notes" name="notes"></textarea>
          </div>
          <div>
            <button class="location_btn" type="submit">
              Confirm
            </button>
            <button class="location_btn" type="reset">Cancel</button>
          </div>
        </form>
        <div> <a href="../events.php"><button class="wireframe_btn" > &larr; Back to events</button></a></div>
      </div>
      
    </section>

   <!-- JS code to auto populate the ticket prices depending on users choice -->
<script>
        function updateCost() {
        var eventSelect = document.getElementById("eventSelect");
        var numPeopleInput = document.getElementById("NumPeople");
        var totalCostInput = document.getElementById("cost");

        var selectedEventOption = eventSelect.options[eventSelect.selectedIndex];
        var selectedEventID = selectedEventOption.value;
        var selectedEventTitle = selectedEventOption.text;

        var defaultPrices = {
            <?php
            mysqli_data_seek($result, 0); // Reset result pointer to the beginning
            while ($row = mysqli_fetch_array($result)) {
                $eventID = $row['eventID'];
                $pricePerPerson = $row['price_per_person'];
                echo "'$eventID': $pricePerPerson, ";
            }
            ?>
        };

        var numPeople = numPeopleInput.value;
        var totalPrice = "£" + (defaultPrices[selectedEventID] * numPeople).toFixed(2);

        totalCostInput.value = totalPrice;
    }
</script>
  </body>
</html>
