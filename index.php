<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NNH CONSTRUCTION</title>
    <link rel="stylesheet" href="/style.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
      integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" type="image/x-icon" href="/img/LOGO-NNH.png">
  </head>
  <body style="background-color: #f4faff">
    <section class="header">
      <!-- Navbar Section -->
      <nav class="navbar">
        <div class="navbar__container">
          <a href="/" id="navbar__logo"
            ><img id="logo" src="/img/LOGO-NNH.png"
          /></a>
          <div class="navbar__toggle" id="mobile-menu">
            <span class="bar"></span> <span class="bar"></span>
            <span class="bar"></span>
          </div>
          <ul class="navbar__menu">
            <li class="navbar__item">
              <a href="/" class="navbar__links">HOME</a>
            </li>
            <li class="navbar__item">
              <a href="/tech.html" class="navbar__links">ABOUT</a>
            </li>
            <li class="navbar__btn"><a href="/sign up page.html" class="button">Sign Up</a></li>
          </ul>
        </div>
      </nav>

      <!-- Hero Section -->
      <div class="main">
        <div class="main__container">
          <div class="main__content">
            <h1>WE SHAPE OUR BUILDINGS</h1>
            <h2>THERAFTER, THEY SHAPE US.</h2>
            <p>NNH Construciton.</p>
          </div>
          <div class="form">
            <h2>Login Here</h2>
            <p style="background-color:tomato;">
              <?php
                include_once("login.php");
                echo $error;
              ?>
            </p>
            <p style="background-color:tomato;">
              <?php
                include_once("login.php");
                echo $success;
              ?>
            </p>
            <form action="#" method="POST">
              <input type="email" name="email" placeholder="Enter your email here">
              <input type="password" name="password" placeholder="Enter your password here">
              <input type="submit" value="Login" class="btn" name="registrar"/>
            </form>
            <p class="link">Don't have an accout ?<br>
            <a href="/Sign up page.html">Sing up here</a></p>
          </div>
        </div>
      </div>
      <?php
            include_once("login.php"); ?>
    </section>
    <script src="/app.js"></script>
  </body>
</html>