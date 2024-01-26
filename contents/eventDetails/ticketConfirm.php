<?php
session_start();
include('../auth.php');
include('../connect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Ticket Confirmation</title>
</head>
<body>

<section class="form_model">
      <div class="form-container2">
        <form>
          <h2 id="tickets_header">Thank you for purchasing a ticket!</h2>
          <h2 id="tickets_header">Your Reservation have been booked.</h2>
          <div>
            <button class="location_btn" type="button" onclick="redirect()">Ok</button>
          </div>
        </form>
      </div>
    </section>
    <script>
    function redirect() {
        window.location.href = '../../contents/events.php';
    }
</script>
</body>
</html>