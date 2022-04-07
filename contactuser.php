
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
              <li role="presentation"><a href="booksuser.php" >Shopping</a></li>
			  <li role="presentation"><a href="paymentpage.php">Payment</a></li>
              <li role="presentation"><a href="contactuser.php"  class="active">About/Contact Us</a></li>
			   <li role="presentation"><a href="feedback.php">Feedback?</a></li>
			   <li role="presentation"><a href="profile.php"><?php echo $_SESSION['user_username'] ?></a></li>
			  <li role="presentation"><a href="logout.php">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!--/.container-->
    </nav>
    <!--/nav-->
  </header>
  <!--/header-->
  <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.6109337043167!2d101.63986901426298!3d2.927643755292034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdb6e4a9d3b7a1%3A0xd0f74e8ad10f1129!2sMultimedia+University+-+MMU+Cyberjaya!5e0!3m2!1sen!2smy!4v1562309315549!5m2!1sen!2smy" width="1350" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>
  <section class="contact-page">
    <div class="container">
      <div class="text-center">
        <h2>Meet The Founders and Developers of Orm!</h2>
      </div>
      <!--/.row-->
        <br/> <br/>
       <div class="container" >
         <img src="img/danial.jpg"  style="width:200px;margin-left:180px;border-radius:80%;"/>
        <img src="img/azryl.jpg"  style="width:200px;margin-left:60px;border-radius:80%;"/>
        <img src="img/raj.jpeg"  style="width:200px;margin-left:60px;border-radius:80%;"/>
   
      
       <div class="text-center">
       <h4 style="margin-left:220px;float:left;"><b>Danial Haikal</b></h4><h4 style="margin-right:280px;float:right;"><b>Keseveraj</b></h4>
           <h4 style="margin-right:160px;float:right;"><b>Azryl Aiman</b></h4>
      </div>
        <div class="text-center">
       <h4 style="margin-left:160px;float:left;">Founder/Developer Of Orm!</h4><h4 style="margin-right:240px;float:right;">Developer Of Orm!</h4>
           <h4 style="margin-right:100px;float:right;">Developer Of Orm!</h4>
        </div><br/>
           
                 <div class="text-center">
            <br/><br/>
             <br/><br/>  
                 <br/><br/>
             <br/><br/>
            
           <h3>Follow us on twitter</h3>
            <ul class="social-network" style="margin-left:70px;">
            <li><a href="https://twitter.com/Orm76022268" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter" ></i></a></li>
            </ul>
           </div>
       </div>
         </div>
      <br/<br/><br/><br/<br/><br/>
       <div class="container" style="border:2px dashed #1E90FF;">
        <br/>
        <br/>
           <h4 style="margin-left:180px;float:left;"><b><u>Location & Hours</u></b></h4>
           <h4 style="margin-right:180px;float:right;"><b><u>Contact</u></b></h4>
           
           <br/><br/>
           <h4 style="margin-left:170px;float:left;">Multimedia University</h4>
           <h4 style="margin-right:50px;float:right;">Email us at orm.business99@gmail.com</h4>
           <br/><br/>
           <h4 style="margin-left:70px;float:left;">Persiaran Multimedia, 63100 Cyberjaya, Selangor</h4>
           <h4 style="margin-right:110px;float:right;">Call us at +60132439265</h4>
           <br/><br/>
           <h4 style="margin-left:120px;float:left;">Monday to Friday (8.00am-5.00pm)</h4>
           <br/><br/>
           <h4 style="margin-left:155px;float:left;">Saturday (8.00am-6.00pm)</h4>
           <br/><br/>
           <h4 style="margin-left:170px;float:left;"><i><b>Closed on Sundays</b></i></h4>
           
        <br/>
        <br/>
        <br/>
        <br/>
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
