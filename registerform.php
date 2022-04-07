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
              <li role="presentation"><a href="index.php">Home</a></li>
              <li role="presentation"><a href="books.php">Shopping</a></li>
              <li role="presentation"><a href="contact.php">About/Contact Us</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!--/.container-->
    </nav>
    <!--/nav-->
  </header>
  <!--/header-->
  <div class="about">
    <div class="container">
      <div class="text-center">
        <h2>Fill in your details to register</h2>
		<br/>
        <div class="" >
		<div class="container">
  <form name="regfrm" enctype="multipart/form-data" action="register.php" method="post">
    <div class="form-group">
      <label  style="color:black;">Name:</label>
      <input type="name" class="form-control" placeholder="Enter your full name" name="name" style="width:530px;border-color:black;margin-left:300px;">
    </div>
	 <div class="form-group">
      <label style="color:black;">Address:</label>
      <input type="address" class="form-control"  placeholder="Enter your address" name="address" style="width:530px;border-color:black;margin-left:300px;">
    </div>
	 <div class="form-group">
      <label style="color:black;">Phone:</label>
      <input type="name" class="form-control"  placeholder="Enter your phone number. Format:(012-5432-274)" name="phone" style="width:530px;border-color:black;margin-left:300px;" pattern="[0-9]{3}-[0-9]{4}-[0-9]{3}" required>
    </div>
	 <div class="form-group">
      <label style="color:black;">Email:</label>
      <input type="email" class="form-control"  placeholder="Enter your email" name="email" style="width:530px;border-color:black;margin-left:300px;" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
    </div>
	  <div class="form-group">
      <label  style="color:black;">Username:</label>
      <input type="username" class="form-control"  placeholder="Enter your username" name="username" style="width:530px;border-color:black;margin-left:300px;">
    </div>
    <div class="form-group">
      <label style="color:black;">Password:</label>
      <input type="password" class="form-control"  placeholder="Enter password" name="pass1" style="width:530px;border-color:black;margin-left:300px;">
    </div>
	  <div class="form-group">
      <label style="color:black;">Re-Type Password:</label>
      <input type="password" class="form-control"  placeholder="Enter password" name="pass2" style="width:530px;border-color:black;margin-left:300px;">
    </div>
	<br/>
        <div class="col-md-6 col-sm-6 col-xs-6" style="margin-left:105px;">
          <div style="color:black;margin-left:350px;"><input type="submit" name="submit" value="Submit" style="background-color:white;width:100px;height:30px;"></div>
        </div>
  </form>
</div>
        </div>
		

      </div>
    </div>
  </div>
  <hr>


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
