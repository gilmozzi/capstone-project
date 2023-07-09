<!DOCTYPE html>
<html>
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
    <link rel="stylesheet" type="text/css" href="css/reservation.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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

   <!--banner-->
   <div class="banner">
    <div class="banner-content">
      <div class="banner-title">
        <p>Order <span>CONVENIENTLY</span></p>
      </div>
    </div>
  </div>

  <!--section-->

  <?php
    // (A) PROCESS RESERVATION
    if (isset($_POST['date'])) {
      require "reserve.php";
      if ($_RSV->save(
        $_POST['date'], $_POST['slot'], $_POST['name'],
        $_POST['email'], $_POST['tel'], $_POST['notes'])) {
        echo "<div class='ok'>Reservation saved.</div>";
      } else { echo "<div class='err'>".$_RSV->error."</div>"; }
    }
    ?>

  <section id="section-1">
    <div class="section-1-container">
      <div class="row">

        <div class="col-md-1">
        </div>

        <div class="col-md-5" id="reservation-title">
          <img src="images/order.png">
        </div>

        <div class="col-md-6" id="reservation-form">
          <h1 class="form-title">RESERVATION</h1>

          <div class="form-input">
          <form id="resForm" method="post" target="_self">
            <label for="res_name">Name</label>
            <br>
            <input type="text" required name="name" value="John Doe"/>
            <br>
            <label for="res_email">Email</label>
            <br>
            <input type="email" required name="email" value="john@doe.com"/>
            <br>
            <label for="res_tel">Telephone Number</label>
            <br>
            <input type="text" required name="tel" value="123456789"/>
            <br>
            <label for="res_food">Food Choice</label>
            <br>
            <input type="text" name="food" value="Pizza"/>
            <br>
            <label>Reservation Date</label>
            <br>
            <input type="date" required id="res_date" name="date" value="<?=date("Y-m-d")?>">
            <br>
            <label>Reservation Slot</label>
            <br>
            <select name="slot">
              <option value="3:00 PM">3:00 PM</option>
              <option value="3:30 PM">3:30 PM</option>
              <option value="4:00 PM">4:00 PM</option>
              <option value="4:30 PM">4:30 PM</option>
              <option value="5:00 PM">5:00 PM</option>
              <option value="5:30 PM">5:30 PM</option>
              <option value="6:00 PM">6:00 PM</option>
            </select>
            <br>
            <input type="submit" value="Submit" class="form-btn"/>
          </form>
          </div>
        </div>

      </div>
    </div>
  </section>

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
  <script src="js/nav.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</html>
