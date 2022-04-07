
<!DOCTYPE html>
<html lang="en">
<?php
	include ('dbconnect.php');
if(isset($_POST['submit'])) {
    
	
	$name		= $_POST['name'];
	$email		= $_POST['email'];
	$subject		= $_POST['subject'];
	$message	= $_POST['message']; 
    
    $query = "INSERT INTO orm_feedback(feedback_name, feedback_email, feedback_subject , feedback_message) 
							VALUES ('$name', '$email', '$subject', '$message')";
    
   $result = mysqli_query($conn, $query);
}
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
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
  <header id="header">
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
            <a href="indexuser.php">
              <h1>Orm!</h1>
            </a>
          </div>
        </div>
           <?php 
session_start();
?>
        <div class="navbar-collapse collapse">
          <div class="menu">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation"><a href="indexuser.php" >Home</a></li>
              <li role="presentation"><a href="booksuser.php">Shopping</a></li>
			  <li role="presentation"><a href="paymentpage.php">Payment</a></li>
              <li role="presentation"><a href="contactuser.php">About/Contact Us</a></li>
			   <li role="presentation"><a href="feedback.php" class="active">Feedback?</a></li>
			   <li role="presentation"><a href="profile.php"><?php echo $_SESSION['user_username'] ?></a></li>
			  <li role="presentation"><a href="logout.php">Logout</a></li>
        </div>
      </div>
      <!--/.container-->
    </nav>
    <!--/nav-->
  </header>
  <!--/header-->

  <section class="contact-page">
    <div class="container">
      <div class="text-center">
        <h2>Drop Your Message About The Website Here</h2>
      </div>
      <div class="row contact-wrap">
        <div class="col-md-6 col-md-offset-3">
          <form   method="POST" action="feedback.php">
            <div class="form-group">
              <input type="text" name="name" class="form-control"  placeholder="Your Name" />
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email"  placeholder="Your Email" />
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" placeholder="Subject" />
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message"  placeholder="Message"></textarea>
            </div>
            <div class="text-center"><button type="submit" name="submit"  class="btn btn-primary btn-lg" >Submit
                Message</button></div>
          </form>
        </div>
      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
  </section>
  <!--/#contact-page-->


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
  <script src="contactform/contactform.js"></script>

</body>

</html>
