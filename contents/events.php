<?php
    include ('connect.php');
?>
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../assets/stylesheets/index.css" />
    <title>Events</title>
  </head>

  <body>

    <div class="container">
      <?php
      include('header.php');
      ?>
    </div>
   
    <div class="container_event">
      <h1>Here are some more details to all the amazing activities</h1>
      <div class="card_contain">
        <!-- Including php code to retrive specific rows from mysql database -->
        <?php
        $sql ="SELECT event_title, description, event_date, price_per_person, event_imagepath, details_path FROM events ";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows( $result); 

// funtion to display retrived data

        if ($resultCheck > 0) {
          while ($row = $result->fetch_assoc()) {
              echo  '<div>
                 <a href="' . $row['details_path'] . '">
                   <div class="card">
                     <img
                       src="' . $row['event_imagepath'] . '"
                       alt="img"
                     />
                     <div class="card-content">
                       <div class="card-title">' . $row['event_title'] . '</div>
                       <div class="card-description">' . $row['description'] . '</div>
                       <hr />
                       <div class="event_Price">£' . $row['price_per_person'] . '</div>
                       <hr />
                       <div class="event_dateTime">' . $row['event_date'] . '</div>
                     </div>
                   </div>
                 </a>
                </div>';
          }
      }
      
        ?>
       
         </div>
        <!-- <div> -->
        <?php
            // session_start();

            if (!isset($_SESSION['customerID'])) {
                // User is not logged in, show Sign Up button else an ticket btn
                echo '<a href="../contents/signUp.php"><button class="location_btn">Sign Up</button></a>';
            } else {
                
               echo '<a href="../contents/eventDetails/tickets.php"><button class="location_btn">Buy Tickets</button></a>';
            }
            
            ?>
      </div>
    <!-- </div> -->

    <footer class="footer">
      <p>© Styles Exhibition 2023</p>
      <p>® Designed and Developed by Theodora</p>
    </footer>
  </body>
</html>
