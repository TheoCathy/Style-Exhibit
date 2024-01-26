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

<header>
    <div class="container">
        <div id="navbar">
            <div id="logo">
                <img src="../assets/images/logos/My_logo_2.png" alt="logo" />
            </div>
            <ul>
                <li class="nav_Links"><a href="../contents/index.php">Home</a></li>
                <li class="nav_Links"><a href="../contents/events.php">Events</a></li>
                <li class="nav_Links"><a href="../contents/index.php#ticket_booking">Contact</a></li>
            </ul>
            <div id="auth"> 
                <ul>
                    <li class="nav_Links">
                        <?php
                        session_start();
                        if (isset($_SESSION['customerID'])) {
                            // User is logged in, show Logout button and reservation button
                            echo '<a href="../contents/eventDetails/reservations.php"><button class="wireframe_btn">View booked events</button></a>';
                            echo '<a href="logout.php"><button class="logout_btn">Logout</button></a>';

                        } else {
                            // User is not logged in, show Sign Up / Login button
                            echo '<a href="../contents/signUp.php"><button class="wireframe_btn">Sign Up / Login</button></a>';
                        }
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
