<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Login Page-->
    <title>Wired</title>
    <link rel="icon" href="images/logo.png">

    <!-- resets browser defaults -->
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <!-- custom styles -->
    <link rel="stylesheet" type="text/css" href="css/faq.css">

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

<!-- Main Welcome Banner -->
<div class="banner">
  <div class="row align-items-center" id="banner">
    <div class="col-md-3">

    </div>
    <div class="col-md-6">
      <h1>HAVE ANY <span class="banner-question">QUESTIONS?</span</h1>
    </div>
    <div class="col-md-3">

    </div>
  </div>
</div>

<section class="faq-content">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-2">
      </div>


      <div class="col-md-8" id="questions-container">


        <div class="row">
          <div class="question">
            <a class="button" href="#question1"><p>How can I contact to a system administrator?</p></a>
          </div>

          <div id="question1" class="overlay">
            <div class="answer-box">
              <h2>Answer</h2>
              <a class="close" href="#">&times;</a>
              <div class="answer">
                You can absolutely email on us (wired@gmail.com) or type and hit sumbit button at the bottom of this page!
              </div>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="question">
            <a class="button" href="#question2"><p>Am I able to cancel the reservation for the food or parking slot?</p></a>
          </div>

          <div id="question2" class="overlay">
            <div class="answer-box">
              <h2>Answer</h2>
              <a class="close" href="#">&times;</a>
              <div class="answer">
                Absolutely, there is a button said, "cancel your order" on the payment history page.
              </div>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="question">
            <a class="button" href="#question3"><p>Are there limits on uploading posts to the Socialize page?</p></a>
          </div>

          <div id="question3" class="overlay">
            <div class="answer-box">
              <h2>Answer</h2>
              <a class="close" href="#">&times;</a>
              <div class="answer">
                Nope, you can post how many you want, but we delete the post that have unnecessary or inappropriate content.
              </div>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="question">
            <a class="button" href="#question4"><p>Where can I reserve a parking slot?</p></a>
          </div>

          <div id="question4" class="overlay">
            <div class="answer-box">
              <h2>Answer</h2>
              <a class="close" href="#">&times;</a>
              <div class="answer">
                Here is the link -> <a href="parking.php">Parking page</a>
              </div>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="question">
            <a class="button" href="#question5"><p>How fast will my ordered food come?</p></a>
          </div>

          <div id="question5" class="overlay">
            <div class="answer-box">
              <h2>Answer</h2>
              <a class="close" href="#">&times;</a>
              <div class="answer">
                All restaurants are located in the stadium so approximately 10 - 15 min
              </div>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="question">
            <a class="button" href="#question6"><p>Can I sign up this website with  other than google account?</p></a>
          </div>

          <div id="question6" class="overlay">
            <div class="answer-box">
              <h2>Answer</h2>
              <a class="close" href="#">&times;</a>
              <div class="answer">
                Google accounts are only available for now, but we are planning to embed facebook, twitter, and other email accounts soon!
              </div>
            </div>
          </div>

        </div>

      </div>


      <div class="col-md-2">

      </div>
    </div>
  </div>

  <div class="your-question">
    <div class="question-wrap">
      <div class="asking-question">
          <div class="question-title">
            <h1>Ask Your <span>Question!</span></h1>
          </div>
          <div class="question-form">
            <form action="faq_submit.php" method="post" id="myQ">
              <input id="message" name="message" rows="4" placeholder="This question will be delivered to the manager"></input>
              <br>
              <div class="submit-button">
               <input type="submit" value="Submit" id="submit"/>
              </div>
            </form>
          </div>
      </div>
      <div class="asking-img">
        <img src="images/ask.png">
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
    <script src="js/non-banner-nav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
