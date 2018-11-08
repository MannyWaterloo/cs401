<?php session_start(); ?>
<head>
<title>Gray Water</title>
<link href="style.css" type="text/css" rel="stylesheet" />
<link rel="icon" type="image/ico" href="favicon.ico"/>
</head>
  <div>
    <img src="mylogo.png"/>
      <ul class="navBar">
          <li class = "navItem"><a href="index.php">Home</a></li>
          <li class = "navItem"><a href="about.php">About</a></li>
          <?php if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]) : ?>
              <li class = "navItem"><a href="logout.php">Logout</a></li>
           <?php else : ?>
              <li class = "navItem"><a href="login.php">Login</a></li>
           <?php endif; ?>
          <li class = "navItem"><a href="register.php">Register</a></li>
          <li class = "navItem"><a href="forum.php">Forum</a></li>
          <li class = "navItem"><a href="ship-roster.php">Ship Roster</a></li>
      </ul>
  </div>
