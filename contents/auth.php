<?php
 include ('connect.php');


// To check if a user is Signed up in and carry out a funtion 
if (!isset($_SESSION['customerID'])) {
    //  JS script to show a notification and redirect back to the page
    echo "<script>
            alert('Login or Sign Up to view details of this event or To buy Tickets');
            window.location.href = '../signUp.php';
          </script>";
    exit();
}



