<?php
session_start();
include('connect.php'); 

$errors = array(); // Initialize the errors array


// Check if the login form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $email = mysqli_real_escape_string($conn, $_POST['customer_email']); 
    $passwrd = $_POST['password'];

    //VALIDATIONS
    if (empty( $email))  {array_push($errors, "email required");}
    if (empty( $passwrd))  {array_push($errors, "password required");}

    if (count($errors) === 0){
    // Retrieve user details from the database
    $query = "SELECT * FROM customers WHERE customer_email = '$email'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Check if a user with the given email exists
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);

            // Verify the password
            if (password_verify($passwrd, $row['password_hash'])) {
                // Password is correct, start a session
                $_SESSION['customerID'] = $row['customerID'];
                $_SESSION['email'] = $row['customer_email'];
                // Set a session timeout (e.g., 30 minutes)
                $sessionTimeout = 1800; // 30 minutes in seconds
                ini_set('session.gc_maxlifetime', $sessionTimeout);
                
                // Set session cookie parameters with the same timeout
                session_set_cookie_params($sessionTimeout);
                
                // Regenerate session ID periodically to enhance security
                if (isset($_SESSION['last_activity']) && time() - $_SESSION['last_activity'] > $sessionTimeout) {
                    session_regenerate_id(true);
                }
                
                // Update last activity timestamp
                $_SESSION['last_activity'] = time();

                echo "<script>
                alert('login Successful');
                window.location.href = './events.php';
              </script>";
                exit();
            
            } else {
                echo '<p>Incorrect password. Please try again.</p>
                <a href="login.php"><button class="wireframe_btn">OK</button></a>';
            }
            
        } else {
            echo '<p>User with the provided email does not exist.</p>
            <a href="login.php"><button class="wireframe_btn">OK</button></a>';
        }
    } else {
        echo "Error in database query: " . mysqli_error($conn);
    }
        }
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
          href="../assets/stylesheets/index.css "
        />
<body>

    <!-- Display errors to the user -->
    <?php if (!empty($errors)): ?>
        <div class="error-messages">
            <h2>Errors:</h2>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><strong><?php echo $error; ?></strong></li>
                <?php endforeach; ?>
            </ul>
            <button onclick="window.location.href='login.php'">OK</button>
    </div>

    <?php endif; ?>

</body>
</html>