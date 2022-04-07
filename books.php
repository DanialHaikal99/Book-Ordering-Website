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
            <a href="index.php"><h1>ORM!</h1></a>
          </div>
        </div>
        <div class="navbar-collapse collapse">
          <div class="menu">
            <ul class="nav nav-tabs" role="tablist">
          <li role="presentation"><a href="index.php">Home</a></li>
              <li role="presentation"><a href="books.php" class="active">Shopping</a></li>
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
   <div class="gallery">
    <div class="text-center">
      <h4>Please log-in to purchase books</h4>
      <h2>Books</h2>
      <p style="color:black;">All of these books are certified and are 100% licensed from their respective companies.<br> We hope you enjoy the books we have here. </p>
        <br/>
        <form action="books.php" style="color:black;" method="POST">
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
           <div class="btn-gamp" style="margin-right:100px;"><a style="width:50%;height:9%;" href="percybookpage.php?code=<?php echo $row['book_id'];?>">Learn More</a></div>
         
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