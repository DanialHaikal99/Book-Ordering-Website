<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Orm! Online Bookstore</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <header id="header" >
    <nav class="navbar navbar-default navbar-static-top" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
          <div class="navbar-brand">
            <a href="index.php"><h1>Orm!</h1></a>
          </div>
        </div>
        <div class="navbar-collapse collapse">
          <div class="menu">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation"><a href="index.php" class="active">Home</a></li>
              <li role="presentation"><a href="books.php">Shopping</a></li>
              <li role="presentation"><a href="contact.php">About/Contact Us</a></li>
			  <li role="presentation"><a href="loginform.php">Login</a></li>
			  <li role="presentation"><a href="registerform.php">Register</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!--/.container-->
    </nav>
    <!--/nav-->
  </header>
  <!--/header-->

  <div class="slider">
    <div id="about-slider">
      <div id="carousel-slider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators visible-xs">
          <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-slider" data-slide-to="1"></li>
          <li data-target="#carousel-slider" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="item active">
            <img src="img/superman.png" class="img-responsive" alt="">
            <div class="carousel-caption">
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                <h2><span>Welcome to our website!</span></h2>
              </div>
              <div class="col-md-10 col-md-offset-1">
                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                  <p>We sell comics and teenage novels</p>
                </div>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                <form class="form-inline">
                  <div class="form-group">
                      <div class="btn btn-primary btn-lg"><a href="books.php">Learn More</a></div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="item">
            <img src="img/newarrival1.png" class="img-responsive" alt="">
            <div class="carousel-caption">
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">
                <h2 style="background-color:#e0e0e0;">New Book Arrivals</h2>
              </div>
              <div class="col-md-10 col-md-offset-1">
                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                  <p>These are the new additions in our roster of books, The Iconic Superhero, Superman! Superman Special #1:Escape From Dinosaur Island! The Hit Novel turned Movie, The Fault In Our Stars and The World's Beloved Caped Crusader Batman Rebirth Issue #1</p>
                </div>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">
                <form class="form-inline">
                  <div class="form-group">
                    <div class="btn btn-primary btn-lg"><a href="books.php">Learn More</a></div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="img/sunset.png" class="img-responsive" alt="">
            <div class="carousel-caption">
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                <h2>We are an independent team of people</h2>
              </div>
              <div class="col-md-10 col-md-offset-1">
                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                  <p>Our Books are at cheap prices and are 100% certified</p>
                </div>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                <form class="form-inline">
                  <div class="form-group">
                    <div class="btn btn-primary btn-lg"><a href="books.php">Learn More</a></div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>

        <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
      </div>
      <!--/#carousel-slider-->
    </div>
    <!--/#about-slider-->
  </div>
  <!--/#slider-->

  <div class="about">
    <div class="container">
      <div class="text-center">
        <h2>We strive to be a platform to go-to, to get comics and teenage novels </h2>
        <div class="col-md-10 col-md-offset-1">
          <p style="color:black;">We offer the best comic books and teenage novels for the best price there is in the market, our books are 100% certified from the
		  respective companies</p>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-6" style="margin-left:115px;">
          <div class="btn-gamp" ><a href="contact.php">Learn More</a></div>
        </div>

      </div>
    </div>
  </div>
  <hr>

  <section class="action">
    <div class="container">
      <div class="left-text hidden-xs" style="margin-left:320px;">
	  <h4>Book Of The Day</h4>
	  <img src="img/superman.png" alt="" class="img-responsive" />
		<h3>SUPERMAN SPECIAL #1</h3>
        <p><em style="color:black;">“THE PROMISE”! Superman’s world is about to change in a big way, but before it does, the Man of Steel has some unfinished 
		business to attend to…on Dinosaur Island! Superman and a forgotten soldier of the past take one last trip together into the abyss 
		of tomorrow, as Captain Storm now stands face-to-face with the world of today! This extra-sized special also features stories by 
		writers Mark Russell and Ian Flynn with art by Kaare Andrews and Bryan Hitch!</p>
      </div>
	  
    </div>
  </section>

  <div class="gallery">
    <div class="text-center">
      <h2>Recently Added</h2>
    </div>
    <div class="container">
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="img/10.supes.jpg" alt="" class="img-responsive" />
          <figcaption>
            <p style=";">Join Superman's Wild Adventure in Dinosaur Island.</p>
          </figcaption>
        </figure>
      </div>
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="img/8.fault.jpg" alt="" class="img-responsive" />
          <figcaption>
            <p>Need an emotional read?Look no further to John Green's Masterpiece</p>
          </figcaption>
        </figure>
      </div>
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="img/9.bat.jpg" alt="" class="img-responsive" />
          <figcaption>
            <p>Batman returns to gotham with new tricks,heroes and villains? Stay-tuned.</p>
          </figcaption>
        </figure>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <h4>About Us</h4>
        <p>We are a group of independent people who loves comic books and teenage novels</p>
        <div class="contact-info">
          <ul>
            <li><i class="fa fa-home fa"></i>Persiaran Multimedia, 63100 Cyberjaya, Selangor</li>
            <li><i class="fa fa-phone fa"></i> +60 013 2439 265</li>
            <li><i class="fa fa-envelope fa"></i> orm.business99@gmail.com</li>
          </ul>
        </div>
      </div>


    </div>
  </footer>

  <div class="sub-footer">
    <div class="container">
      <div class="social-icon">
        <div class="col-md-4">
          <ul class="social-network">
            <li><a href="https://twitter.com/Orm76022268" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
          </ul>
        </div>
      </div>

      <div class="col-md-4 col-md-offset-4">
      </div>
    </div>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script>
    wow = new WOW({}).init();
  </script>
</body>

</html>
