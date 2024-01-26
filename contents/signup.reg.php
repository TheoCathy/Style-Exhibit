<?php
    session_start();
    include ('connect.php');
    

    // Function to validate password
 function validatePassword($password) {

   // Trim entire passwords for the spaces provided
   $password = trim($password);

  // Min and max length of the password
  $minLength = 8;
  $maxLength = 20;

  // Check if the password meets the minimum and maximum length requirements
  if (strlen($password) < $minLength || strlen($password) > $maxLength) {
      return "Password must be between $minLength and $maxLength characters.";
  }

  if (!preg_match('/[A-Z]/', $password)) {
    return "Password must contain at least one uppercase letter.";
}

// Check if the password contains at least one lowercase letter
if (!preg_match('/[a-z]/', $password)) {
    return "Password must contain at least one lowercase letter.";
}

// Check if the password contains at least one digit
if (!preg_match('/\d/', $password)) {
    return "Password must contain at least one digit.";
}

// Check if the password contains at least one special character
if (!preg_match('/[!@#$%^&*(),.?":{}|<>]/', $password)) {
    return "Password must contain at least one special character.";
}
// Convert special characters to HTML entities
$password = htmlspecialchars($password, ENT_QUOTES, 'UTF-8');

  return true;
}

$errors = array(); // Initialize the errors array
    
    // <!-- Including php code to add users information to the database and store -->
 
            // receiving inputs from customer
       
          $passwrd =  $_POST['password'];
          $forename = isset($_POST['name']) ? trim($_POST['name']) : '';
          $surname = isset($_POST['customer_surname']) ? trim($_POST['customer_surname']) : '';
          $email = isset($_POST['email']) ? trim($_POST['email']) : '';
          $passwrd_2 = isset($_POST['password_2']) ? trim($_POST['password_2']) : '';
          $dob = isset($_POST['date_of_birth']) ? trim($_POST['date_of_birth']) : '';

          // Validate and sanitize inputs
          $forename = htmlspecialchars($forename, ENT_QUOTES, 'UTF-8');
          $surname = htmlspecialchars($surname, ENT_QUOTES, 'UTF-8');
          $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
          $passwrd_2 = htmlspecialchars($passwrd_2, ENT_QUOTES, 'UTF-8');
          $dob = htmlspecialchars($dob, ENT_QUOTES, 'UTF-8');
 
        // to validate the form to ensure its properly filled
        if (empty( $forename))  {array_push($errors, "Name is required");}
        if (empty( $surname))  {array_push($errors, "Name is required");}
        if (empty( $email))  {array_push($errors, "Please fill email section");}
        if (empty( $passwrd))  {array_push($errors, "Please set a password");}
        if ($passwrd != $passwrd_2)  {array_push($errors, "Passwords doesn't match");}
        if (empty( $dob))  {array_push($errors, "Filled is requried");}

        // Validation checks
       $passwordValidationResult = validatePassword($passwrd);
      if ($passwordValidationResult !== true) {
          // Password validation failed
            array_push($errors, $passwordValidationResult);
        }
      // Checking to ensure details don't exist in the database
$customer_check_query = "SELECT * FROM customers WHERE customer_email ='$email' LIMIT 1";
$result = mysqli_query($conn, $customer_check_query);

if ($result && mysqli_num_rows($result) > 0) {
    $customer = mysqli_fetch_assoc($result);

    // Functions to carry out if email exists
    if ($customer && $customer["customer_email"] === $email) {
        array_push($errors, "Email already exists!");
    }
}

      // if no errors encounted, then register user
      if (count($errors) === 0){
    $hashedPassword = password_hash($passwrd, PASSWORD_DEFAULT);

        $sql = "INSERT INTO `customers` ( `password_hash`, `customer_forename`, `customer_surname`,`customer_email`, `date_of_birth`) VALUES
        ('$hashedPassword', '$forename', '$surname', '$email', '$dob');";
        if (mysqli_query($conn, $sql)) {
            // here I included a JS script tag to notify users upon successful or failed registration attempt-- ;

            echo "<script>
                    alert('You have succesfully Signed Up. Thank you!');
                    window.location.href = './events.php';
                  </script>";
                    // Fetch the customer ID after successful Signup
                 $customerID = mysqli_insert_id($conn);

                //   Setting a session for the Registered user
                $_SESSION['customerID'] = $customerID;
                //  header("Location: events.php");
                echo "<script>
                    alert('You have succesfully Signed Up. Thank you!');
                    window.location.href = './events.php';
                  </script>";
            exit(); 
        } else { 
           
            echo "<script>
                    alert('Sign Up failed ☹️ . Please try again.');
                    window.location.href = './signUp.php';
                  </scrip>";

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
            <h2>Error(s)</h2>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><strong><?php echo $error; ?></strong></li>
                <?php endforeach; ?>
            </ul>
            <a href="signUp.php"><button class="wireframe_btn">OK</button></a>
    </div>

    <?php endif; ?>

</body>
</html>