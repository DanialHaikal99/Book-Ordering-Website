<!DOCTYPE html>
<?php 
    include('dbconnect.php');
    session_start();
	
?>
<html lang="en">
<head>
    <style>
        #customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
        #customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #65AAF0;
  color: white;
}
    </style>
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
                <li role="presentation"><a href="cart.php">Cart</a></li>
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
       <?php

if(isset($_POST['submit'])) {
	

	$name		= $_POST['name'];
	$email		= $_POST['email'];
	$address	= $_POST['address']; 
	$phone		= $_POST['phone'];
    $bank		= $_POST['bank'];
     $bankname		= $_POST['bankname'];
    $book		= $_POST['book'];
	
	$sql = "select * from orm_order";
	$resultemail = mysqli_query($conn,$sql);
		
	
	
				$query = "INSERT INTO orm_order(order_name, order_email, order_address, order_phone, order_bank , order_bankname , order_book) 
							VALUES ('$name', '$email', '$address', '$phone', '$bank', '$bankname', '$book')";
				$inuser = mysqli_query($conn,$query);

				
				if(($inuser)== FALSE){
					echo"Error : $query".$conn->error;
				}else{
				echo "
					<p>	Registered Successfully	</p>
					<a href='paymentnext.php'>Continue</a>
					";
                }
	
	
}?>
  <div style="background-color:#e0e0e0;border:2px solid grey;">
  <h2>Order Form</h2>
   
    <?php
echo "<p style=color:black;>You made this order on " . date("d/m/Y") . "</p>";
?>
      <h5 style="margin-left:10px;"><span style="color:red;">Disclaimer:</span>Order is only accepted if user already has account.</h5>
      <h5 style="margin-left:10px;"><span style="color:red;">Alert:</span>Do not close this page if you are do not remember your order, please right click the word below to refer.</h5>
      <a href="cart.php" target="_blank" style="color:lime;"><b>Refer Your Cart Here</b></a><br/>
  <form class="needs-validation" name="orderform" enctype="multipart/form-data" action="self_delivery.php" method="post">
      <input type="name" class="form-control"  placeholder="Enter your full name" name="name" style="width:530px;border-color:black;margin-left:10px;"  required><br/>
      <input type="email" class="form-control"  placeholder="Enter your email" name="email" style="width:530px;border-color:black;margin-left:10px;" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required><br/>
      <input type="address" class="form-control"  placeholder="Enter your address" name="address" style="width:530px;border-color:black;margin-left:10px;"  required><br/>
      <input type="tel" class="form-control"  placeholder="Enter your phone number. Format:(012-5432-274)" name="phone" style="width:530px;border-color:black;margin-left:10px;"  pattern="[0-9]{3}-[0-9]{4}-[0-9]{3}" required><br/>
      <input type="tel" class="form-control"  placeholder="Enter your bank account number." name="bank" style="width:530px;border-color:black;margin-left:10px;"   required><br/>
      <input type="name" class="form-control"  placeholder="Enter your bank name." name="bankname" style="width:530px;border-color:black;margin-left:10px;"   required><br/>
      <input type="name" class="form-control"  placeholder="Enter the books you've purchase here." name="book" style="width:530px;border-color:black;margin-left:10px;"   required>
      <h5 style="margin-left:10px;">^ Preferably put in this format (Ex:- 2 walking dead, 3 fault in our stars)</h5>
      <hr>
  </div>
      <br><br>
      <div class="btn-gamp" ><input type="submit" name="submit" value="Submit" style="background-color:#65AAF0;margin-left:1126px;width:10%;height:50px;";></div>
   </form>
     


  <br/>
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
