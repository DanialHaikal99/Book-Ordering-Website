<?php include 'filesLogic.php';
?>

<!DOCTYPE html>
<html lang="en">

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
  
  <style>
  </style>
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
            <a href="indexuser.php"><h1>ORM!</h1></a>
          </div>
        </div>
          <?php 
session_start();
?>
      <div class="navbar-collapse collapse">
          <div class="menu">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation"><a href="indexuser.php">Home</a></li>
              <li role="presentation"><a href="booksuser.php">Shopping</a></li>
			  <li role="presentation"><a href="paymentpage.php" class="active">Payment</a></li>
              <li role="presentation"><a href="contactuser.php">About/Contact Us</a></li>
			   <li role="presentation"><a href="feedback.php">Feedback?</a></li>
			   <li role="presentation"><a href="profile.php" ><?php echo $_SESSION['user_username'] ?></a></li>
			  <li role="presentation"><a href="logout.php">Logout</a></li>
        </div>
      </div>
      </div>
      <!--/.container-->
    </nav>
    <!--/nav-->
  </header>
  <!--/header-->

  <div class="gallery">
      
      <div class="text-center">
        <h2>Payment Page</h2>
        <h4><b>Alert: Please pay first through Cimb Clicks,Maybank2U Or Paypal before uploading here. Only Paypal,CimbClicks and Maybank2U are the method we accept. <b style="color:lime;">Please take note when your order is accepted, you will receive a phone call from admin confirming your order.</b></b></h4>
          <br><br>
      <div style="background-color:#e0e0e0;border:2px solid grey;" class="container">
          <h2>Upload Payment Proof Here</h2>
           <form action="paymentpage.php" method="post" enctype="multipart/form-data" >
          <input type="file" name="myfile" style="margin-left:480px;color:black;"> <br>
               <input type="submit" value="Submit" name="save" style="color:black;">
               <br><br>
          </form>
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
