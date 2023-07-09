<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Main Page (default)-->
    <title>Wired</title>
    <link rel="icon" href="images/logo.png">

    <!-- resets browser defaults -->
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <!-- custom styles -->
    <link rel="stylesheet" type="text/css" href="css/parking.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!--footer icons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/v4-shims.css">

    <!--typography: Raleway from Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
</head>


<body>
  <!-- Navigation-->

  <nav class="navbar-area">

    <div class="site-navbar">
      <!-- site logo -->
      <a href="index.html" class="site-logo"><img src="images/logo.png" alt="logo"></a>

      <!-- site menu/nav -->
      <ul>
        <li class="nav-list"><a href="promotion.php">PROMOTIONS</a></li>
        <li class="nav-list"><a href="reservation.php">CONCESSIONS</a></li>
        <li class="nav-list"><a href="parking.html">PARKING</a></li>
        <li class="nav-list"><a href="social_feed.php">SOCIALIZE</a></li>
        <li class="nav-list"><a href="about.html">ABOUT US</a></li>
        <li class="nav-list"><a href="faq.php">NEED HELP?</a></li>

        <li class="search-bar">
          <a href="search_page.html"><img src="images/search-icon.png" style="width: 25px;"></a>
        </li>
        <li class="login-btn">
          <a href="login.html" class="login-button"><p>Log In</p></a>
        </li>

      </ul>

      <!-- nav-toggler for mobile version only -->
      <button class="nav-toggler">
        <span></span>
      </button>
    </div>

  </nav>



  <section id="banner" class="d-flex align-items-center">
    <div class="container">
      <div class="row align-items-center">
		    <div class="col-md-8">
          <h1 id=parking-banner-title>Find the <b>BEST SPOT</b></h1>
          <h4 id=parking-banner-subtitle>for your vehicle</h4>
        </div>
        <div class="col-md-4">
        </div>
      </div>
    </div>
  </section>

  <!--section-->
  <section id="section1" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12" id="reserved">
          <?php
          //uncomment to show errors
          //ini_set('display_errors', '1');
          //ini_set('display_startup_errors', '1');
          //error_reporting(E_ALL);

          $conn = mysqli_connect("db.luddy.indiana.edu", "i494f20_team70", "my+sql=i494f20_team70","i494f20_team70");
          if (!$conn) {
            die("Failed to connect to MySQL: " . mysqli_connect_error());
          }
          $time = date("Y-m-d");
          mysqli_query($conn,"INSERT INTO parking VALUES('$_POST[name]','$_POST[email]','$_POST[slot]', '$time')");

          echo "<p>Your reservation has been saved.</p><br><a href='index.html'>Return</a>";
          ?>
        </div>
      </div>
    </div>
  </section>

    <!--footer-->
    <footer class ="footer-container" >
      <div class="container" >
        <div class="row">

          <div class="col-md-6">

            <h5>Wired &copy; 2020</h5>

            <p>cgkang@iu.edu	&ensp; 812)351-0448 	&ensp; Bloomington, IN</p>

          </div>

          <div class="col-md-6">

            <a href=""><i class="fa fa-facebook-square"></i></a>
            <a href=""><i class="fa fa-instagram"></i></a>
            <a href=""><i class="fa fa-linkedin"></i></a>
            <a href=""><i class="fa fa-github"></i></a>

          </div>
        </div>
      </div>
    </footer>

    <!--navigation bar JavaScript-->
    <script src="js/login-nav.js"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6O3iaVi2tw5pSaCQIvasIapCJ62PSo7E&callback=initMap&libraries=&v=weekly"
      async
    ></script>
</body>
</html>
