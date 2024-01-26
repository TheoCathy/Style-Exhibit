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
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-xwB/Jvf1P9PmIkKr5v8CkQ5WMib7zsdUjQF5cNK7OeyG8/6iLJS6I8Jhj2EZtwFtUnnvsmuP+iDzP+vQZb5/Sw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

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

    <title>Login</title>
  </head>

  <body>
    <!--  -->
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
          <p>
            <a href="../contents/signUp.php"
              ><button class="login_btn">Sign Up</button></a
            >
          </p>
          <p><button class="login_btn">Login</button></p>
        </div>
      </div>
      <div class="form-container2">
        <form action = "login.reg.php" method="post" >
          <h2 id="tickets_header">Welcome back!</h2>
          <div class="form-item" id="customer_email">
            <input
              id="customer_email"
              name="customer_email"
              type="email"
              required
              placeholder="Enter email"
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
            <i
              id="password-toggle"
              class="fas fa-eye-slash"
              onclick="togglePasswordVisibility()"
            ></i>
          </div>
          <div>
            <p>Don't have an account?</p>
            <a href="./signUp.php" id="anchor_tag"> SignUp here </a>
          </div>

          <div>
            <button class="location_btn" type="submit" >Submit</button>
            <button class="location_btn" type ="reset" >Reset</button>
          </div>
        </form>
      </div>
    </section>
    <script>
      function togglePasswordVisibility() {
        var passwordInput = document.getElementById("password");
        var passwordToggle = document.getElementById("password-toggle");

        if (passwordInput.type === "password") {
          passwordInput.type = "text";
          passwordToggle.classList.remove("fa-eye-slash");
          passwordToggle.classList.add("fa-eye");
        } else {
          passwordInput.type = "password";
          passwordToggle.classList.remove("fa-eye");
          passwordToggle.classList.add("fa-eye-slash");
        }
      }
    </script>
  </body>
</html>
