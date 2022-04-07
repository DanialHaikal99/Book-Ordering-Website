<?php 
include ("dbconnect.php"); 
?>



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
    .notification {
  background-color: #555;
  color: white;
  text-decoration: none;
  padding: 15px 26px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
}

.notification:hover {
  background: red;
}

.notification .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: #4682B4;
  color: white;
}
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
             <li role="presentation"><a href="indexuser.php" >Home</a></li>
              <li role="presentation"><a href="booksuser.php" class="active">Shopping</a></li>
			  <li role="presentation"><a href="paymentpage.php">Payment</a></li>
              <li role="presentation"><a href="contactuser.php">About/Contact Us</a></li>
			   <li role="presentation"><a href="feedback.php">Feedback?</a></li>
			   <li role="presentation"><a href="profile.php"><?php echo $_SESSION['user_username'] ?></a></li>
               <li role="presentation"><a href="cart.php">Cart</a></li>
                <li role="presentation"><a href="logout.php">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!--/.container-->
    </nav>
    <!--/nav-->
   </header>
   <div class="gallery">
    <div class="text-center">
      <h2>Books</h2>
      <p style="color:black;">All of these books are certified and are 100% licensed from their respective companies.<br> We hope you enjoy the books we have here. </p>
        <br/>
        <form action="booksuser.php" style="color:black;" method="POST">
            <select name="genre">
            <option value="all">All</option>
            <option value="fantasy">Fantasy</option>
            <option value="fiction">Fiction</option>
            <option value="romance">Romance</option>
            </select>
            <input type="submit" value="Sort" name="Submit">
        </form>
     </div>
	   <br/>
  <!--/header-->

		<div class="container">
            <?php
				if(isset($_GET['book_id'])) {
					$book_id = $_GET['book_id'];
					$query = "SELECT * FROM orm_book WHERE book_id = '$book_id'";
					$result = mysqli_query($connection, $query);
					while($row = mysqli_fetch_array($result)) {
						$book_id = $row['book_id'];
						$book_title = $row['book_title'];
						$book_price = $row['book_price'];
						
					}
				}
			?>
            
      <?php
	  
        if(isset($_POST['genre']) && $_POST['genre'] == 'all') 
        {   
	       $sql = "select * from orm_book  order by book_id desc";  
        }     
        else if( isset($_POST['genre']) && $_POST['genre']  == 'fantasy') 
        {   
	       $sql = "SELECT * FROM orm_book WHERE book_genre = 'fantasy'";  
        }         
        else if( isset($_POST['genre']) && $_POST['genre']  == 'fiction') 
        {   
	       $sql = "SELECT * FROM orm_book WHERE book_genre = 'fiction'";  
        } 
        else if( isset($_POST['genre']) && $_POST['genre']  == 'romance') 
        {   
	       $sql = "SELECT * FROM orm_book WHERE book_genre = 'romance'";  
        }
        else
        {
            $sql = "select * from orm_book  order by book_id desc";
        }
         
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

		// if no records are found
		if(mysqli_num_rows($result) == 0) 
		{
            
		?>
            
			<div><p>No Records Found</p></div>
            
		<?php
            
		} 
			
		else{
			// if got records found use looping to display the results
			while($row = mysqli_fetch_assoc($result)) {
	
			
		?>
            
            
	  <div class="col-md-4" >
             <br><br>
          <img src="<?php echo $row['book_image']; ?>" class="img-responsive" style="width:80%;margin-left:40px;"/>
            <br>
           <div class="btn-gamp" style="margin-left:50px;"><a style="width:50%;height:9%;float:left;" href="percybookpageuser.php?code=<?php echo $row['book_id'];?>">Learn More</a></div>
          
          <form method='POST' action='cart.php?action=addCart&book_id=<?php echo $row["book_id"]; ?>'>
              
		<p style="color:black;float:left;margin-left:140px;">Quantity: <input type='number' name='gadget_quantity' value='0' style="width:20%;color:black;margin-left:5px;" min="1" max=""></p>
		<input type='submit' name='addCart' style='width:30%;height:9%;background-color:#65AAF0;color:white;font-size:1em;margin-left:10px;' value='Add to Cart'>
		<input type='hidden' name='hidden_name' value="<?php echo $row["book_title"];?>">	
		<input type='hidden' name='hidden_price' value="<?php echo $row["book_price"];?>">
              
	    </form>
           
      </div>
		<?php 
			}//while end bracket
			}//Else end bracket
		?>
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