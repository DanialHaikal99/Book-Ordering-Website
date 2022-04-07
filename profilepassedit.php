<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
	include ('dbconnect.php');

include ("checksession.php");
    
    $session = $_SESSION['user_username'];
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
        <div class="navbar-collapse collapse">
          <div class="menu">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation"><a href="indexuser.php">Home</a></li>
              <li role="presentation"><a href="booksuser.php">Shopping</a></li>
			  <li role="presentation"><a href="paymentpage.php">Payment</a></li>
              <li role="presentation"><a href="contactuser.php">About/Contact Us</a></li>
			   <li role="presentation"><a href="feedback.php">Feedback?</a></li>
			   <li role="presentation"><a href="profile.php"  class="active"><?php echo $_SESSION['user_username'] ?></a></li>
			  <li role="presentation"><a href="logout.php">Logout</a></li>
              </ul>
        </div>
      </div>
      <!--/.container-->
    </nav>
    <!--/nav-->
  </header>
  <!--/header-->

  <section class="contact-page">
      <div class="container">
          <?php
		$sql="select * from orm_user where user_username='$session'";
		$resu=$conn->query($sql);
		if(empty(mysqli_num_rows($resu))){
			echo "session lost ERROR : $sql". $conn->error;
		}else{
			while($row=mysqli_fetch_assoc($resu)){
			$cid		= $row["user_id"];		
			$cusername	= $row["user_username"];	
            $password		= $row["user_password"];
			}
		}
	?>
          
           
          <?php
          
          if(isset($_POST['submit'])) {
              if(isset($_POST['edit'])){
	$password1 	= $_POST['password1'];   
              $cid			= $_POST['edit'];
			$cusername		= $_POST['edit2'];	
              }
              
            $sql="select * from orm_user where user_id='$cid'";
		$resul=$conn->query($sql);
              
					$queryu ="update orm_user set user_password='$password1' where user_id = '$cid' and user_username = '$cusername'";
					$inuser = mysqli_query($conn,$queryu);
				
				
}
		?>
           <div class="text-center" >
          <div ><a href="profile.php" style="background-color:#65AAF0;color:white;border:none;">Back</a>
          </div>
          <br/>
      <form name="editprofile" enctype="multipart/form-data" action="profilepassedit.php" method="post">
           <div class="btn-gamp"><button name="submit" type="submit" style="background-color:limegreen;color:white;border:none;margin-left:10px;">Submit</button></div>
      <div class="text-center" style="background-color:#e0e0e0;width:50%;margin-left:300px;border-radius: 15px;">
        <h2 >Password Info</h2>
          <br/>
          <img src="img/userprofile.png" width="100px" height="100px" >
          <br/><br/>
           
          <h4 >Password  <br/><br/><input type="password" class="form-control" placeholder="<?php echo $password; ?>" name="password1" style="width:330px;border-color:black;margin-left:130px;"></h4><br/>
          <input type="hidden" name="edit" value="<?php echo $cid; ?>" style="color:black;">
          <input type="hidden" name="edit2" value="<?php echo $cusername; ?>" style="color:black;">
          </div>
          </form>
      </div>
          
   <br><br><br>
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
