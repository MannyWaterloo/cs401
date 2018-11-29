<?php session_start(); ?>
<head>
  <script src="jquery-3.3.1.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Black+Han+Sans" rel="stylesheet">
<title>Gray Water</title>
<link href="style.css" type="text/css" rel="stylesheet" />
<link rel="icon" type="image/ico" href="favicon.ico"/>
</head>

  <div id="navDiv">
    <!-- <a href="index.php"><img src="mylogo.png"/> -->
      <img src="mylogo.png"/>
      <ul class="navBar">
          <li class = "navItem"><a href="index.php">Home</a></li>
          <li class = "navItem"><a href="https://robertsspaceindustries.com/orgs/GRAYWATER">Org Page</a></li>
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

  <script>
    $(function(){
        $('a').each(function(){
            if ($(this).prop('href') == window.location.href) {
                $(this).addClass('active'); $(this).parents('li').addClass('active');
            }
        });
    });
</script>
