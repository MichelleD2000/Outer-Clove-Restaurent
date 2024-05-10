<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Poppins&display=swap" rel="stylesheet">
    <title>The Outer Clove Restaurant</title>
     
  </head>
  <body>
  <div class="container-fluid">
    <div id="home">
      <nav class="navbar navbar-expand-lg px-5 pt-4">
        <a class="navbar-brand" href="index.php">The Outer Clove Restaurant
        <a class = "white-text">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <div></div>
          <div></div>
          <div></div>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-link active" href="index.php">HOME</a>
            <a class="nav-link" href="menu.php">MENU</a>
            <a class="nav-link" href="reservation.php">RESERVATIONS</a>
            <?php
            session_start();
            if (isset($_SESSION['name']))
              echo '<a class="nav-link" href="logout.php">LOGOUT</a>';
            else
              echo '<a class="nav-link" href="login.php">LOGIN</a>';
            ?>
            <a class="nav-link" href="contact.php">CONTACT</a>
            <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
          </div>
        </div>
      </nav>
      <div class="hometext d-none d-md-block">
    		<div data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1500">
    		<h1>A MULTI-CUISINE RESTAURANT</h1><br>
    		</div>
  	  </div>
      <div class="scrolldown d-none d-lg-block">
        <a href="#cards">
          <img src="images/scrolldown.gif">
        </a>
      </div>
    </div>
    <div class="row py-5" id="cards">
        <div class="col-12 col-md-4">
          <a href="menu.php">
          <div class="card m-4">
            <img class="card-img" src="../The Outer Clove Final/menu/drinks-glasses-new-year-eve-celebration_23-2150901948.webp" alt="Menu">
            <div class="card-img-overlay">
              <h4>Menu</h4>
            </div>
          </div>
        </a> 
        </div>
        <div class="col-12 col-md-4">
          <a href="login.php">
          <div class="card m-4">
            <img class="card-img" src="../The Outer Clove Final/menu/luxury-outdoor-living-area-background_1409-5429.webp" alt="Order Now">
            <div class="card-img-overlay">
              <h4>Login</h4>
            </div>
          </div>
        </a>
        </div>
        <div class="col-12 col-md-4">
          <a href="reservation.php">
          <div class="card m-4">
            <img class="card-img" src="../The Outer Clove Final/menu/contemporary-kitchen-design_1409-6268.webp" alt="Reservation">
            <div class="card-img-overlay">
              <h4>Book a Reservation</h4>
            </div>
          </div>
        </a>
        </div>
    </div>
  </div>
    <footer>
    <div class="container">
      <div class="row">
        <section class="col-md-4">
          <h4>Hours :</h4>
          <p>Mon - Thurs : 11:00am - 11:00pm<br>
          Fri - Sun : 09:00am - 11:30pm</p>
          <br>
        </section>
        <section class="col-md-4">
        <h4>Address :</h4>
           <p>921,Peradeniya Road, <br>
           Kandy,20000,Sri Lanka.</p>
          <br>
        </section>
        <section class="col-md-3 offset-md-1">
          <h4>Contact Us :</h4>
          <i class="fab fa-facebook"></i>
          <i class="fab fa-twitter"></i>
          <i class="fas fa-envelope"></i>
          <i class="fab fa-instagram"></i><br>
          <a href="mailto:theoutercloverestaurant@gmail.com">theoutercloverestaurant@gmail.com</a>
          <br>
        </section>
      </div>
      <div class="text-center">&copy; Copyright The Outer Clove Restaurant 2023</div>
    </div>
  </footer>
  </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
