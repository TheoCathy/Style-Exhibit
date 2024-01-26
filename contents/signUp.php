<?php
    include ('connect.php');
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
        <title>Login/Sign Up</title>
      </head>
    
      <body>
        <div class="container">
          <div id="navbar">
            <div id="logo">
              <img src="../assets/images/logos/My_logo_2.png" alt="logo" />
            </div>
            <ul>
              <li class="nav_Links"><a href="../contents/index.php">Home</a></li>
              <li class="nav_Links">
                <a href="../contents/events.php">Events</a>
              </li>
              <li class="nav_Links">
                <a href="../contents/index.php#ticket_booking">Contact</a>
              </li>
            </ul>
    
            <div id="auth">
              <ul>
                <li class="nav_Links">
                  <a href="../contents/login.php">
                    <button class="wireframe_btn">Sign Up/ Login</button>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <section class="form_model">
          <div class="form-container">
            <div class="tail-layout">
              <p><button class="login_btn">Sign Up</button></p>
              <p>
                <a href="../contents/login.php"
                  ><button class="login_btn">Login</button></a
                >
              </p>
            </div>
          </div>
          <div class="form-container2">
    
            <form action = "signup.reg.php" method="POST">
               <div class="form-item">
                 <input
                   id="customer_forename"
                   name="name"
                   type="text"
                   required
                   placeholder="First Name"
                 />
               </div>
               <div class="form-item">
                 <input
                   id="customer_surname"
                   name="customer_surname"
                  required
                   type="text"
                   placeholder="Surname"
                 />
               </div>
               <div class="form-item">
               <input
                   id="customer_email"
                   name="email"
                  required
                   type="email"
                   placeholder="Email Address"
                 />
               </div>
               <div class="form-item" id="password">
                 <input
                   id="password"
                   name="password"
                  required
                   type="password"
                   placeholder="Password"
                />
              </div>
              <div class="form-item" id="password_2">
                <input
                  id="password_2"
                  name="password_2"
                  required
                  type="password"
                  placeholder="Confirm Password"
                />
              </div>
              <div class="form-item">
                <input
                  type="date"
                  id="date_of_birth"
                  name="date_of_birth"
                required
                />
                <span id="ageError" style="color: red;"></span>
              </div>
              <div>
                <p>Already have an account?</p>
                <a href="./Login.php" id="anchor_tag"> Login here </a>
             </div>
              <div>
                <button class="location_btn" type="submit" name= "submit">Submit</button>
                <button class="location_btn">Reset</button>
              </div>
            </form>
          </div>
        </section>
              <script>
        document.getElementById("date_of_birth").addEventListener("input", function () {
          validateDateOfBirth();
        });

        function validateDateOfBirth() {
          var dobInput = document.getElementById("date_of_birth");
          var ageError = document.getElementById("ageError");

          // Get the selected date from the input
          var selectedDate = new Date(dobInput.value);

          // Get the current date
          var currentDate = new Date();

          // Calculate the age
          var age = currentDate.getFullYear() - selectedDate.getFullYear();

          // Check if the user is at least 18 years old
          if (age < 18) {
            ageError.textContent = "You must be 18 or older to register";
            dobInput.setCustomValidity("You must be 18 or older to register");
          } else {
            ageError.textContent = "";
            dobInput.setCustomValidity("");
          }
        }
</script>
      </body>
    </html>
    