 <?php
session_start();
	include ('dbconnect.php');
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
      <div class="navbar-collapse collapse">
          <div class="menu">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation"><a href="indexuser.php">Home</a></li>
              <li role="presentation"><a href="booksuser.php">Shopping</a></li>
			  <li role="presentation"><a href="paymentpage.php">Payment</a></li>
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
 <div class="container">
  <div class="gallery">
<div class="text-center">
    
    <h3>Instructions To Transfer To Our Cimb Account Through <span style="color:yellow;font-weight:bold;">Maybank</span></h3>
    <br><br>
     <h5> Below the instructions there is a button that will proceed you to Maybank2U</h5>
    <br>
     <h5><b>1. Login to your respective Maybank2U account, then click pay and transfer when you are logged-in and click transfer afterwards</b></h5><br>
     <h5><b>2. Insert our bank account number(as pictured below) <br><br>Disclaimer:-THIS IS OUR ONLY BANK ACCOUNT, ANY WRONG TRANSFERS ARE NOT VERIFIED BY THE DEVELOPERS OF THIS WEBSITE <br><br><i>-MUHAMMAD DANIAL HAIKAL - 7066058630 -CIMB-</i></b></h5>
    <br>
    <img src="img/maybank.PNG" class="img-responsive" style="width:80%;margin-left:130px;border: 2px solid black;"/>
    <br><br>
    <h4><b>Our Admins Will Check Your Transfer after you uploaded your proof of payment at the payment page.<br><br> <i>Please click the proof of payment below after making your payment and upload proof of payment on the payment page provided in our website.</i></b></h4>
    <br><br>
    <div class="btn-gamp" onclick="myFunctiona()"><a href="paymentpage.php" style="color:white;background-color:#00BFFF;margin-right:300px;margin-left:10px;text-decoration:none;" target="_blank"><b>Proof Of Payment</b></a></div>
    
       <script>
     function myFunctiona() {
     confirm("You will be directed to payment page, Please upload your proof of payment here (Transfer Screenshot) . If you haven't pay through cimb clicks please pay first before uploading in the payment page");
      }
	  </script>

    <div class="btn-gamp" onclick="myFunction()"><a href="https://www.maybank2u.com.my/home/m2u/common/login.do" style="background-color:yellow;margin-left:200px;"; target="_blank"><b>Maybank</b></a></div>
     <br><br>    <br><br>
     <script>
     function myFunction() {
     confirm("You will be directed to a new tab(Maybank), Please make sure you have read the instructions before proceeding. If you have not read the instructions you can refer this current tab");
      }
	  </script>
   
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
