<?php 
include ("dbconnect.php"); 
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
            <a href="indexadmin.php"><h1>ORM!</h1></a>
          </div>
        </div>
          <?php 
session_start();
?>
       <div class="navbar-collapse collapse">
          <div class="menu">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation"><a href="order_list.php" >Orders</a></li>
              <li role="presentation"><a href="indexadmin.php" class="active">Update / Delete Books</a></li>
                <li role="presentation"><a href="addbooks.php">Add Books</a></li>
                <li role="presentation"><a href="user_list.php" >User Lists</a></li>
                <li role="presentation"><a href="downloads.php" >User Payment</a></li>
                <li role="presentation"><a href="feedbackadmin.php" >Feedback</a></li>
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
 <?php
		// write the codes to select the book info
		$code = $_REQUEST['code'];
		$result = mysqli_query($conn, "select * from orm_book WHERE book_id = '$code'");
		$count = mysqli_num_rows($result);

		// if no records are found
		if(mysqli_num_rows($result) == 0) 
		{
		?>
			<div><p>No Records Found</p></div>
		<?php
		} 
			else{
				$row = mysqli_fetch_assoc($result);
			
				}
		?>
  <div class="gallery">
  
    <div class="text-center">
      <h2 style="float:right;margin-right:50px;"><?php echo $row['book_title']; ?></h2>
    </div>
    <div class="container" style="border:2px dashed white;">
      <div class="col-md-4">
          <img src="<?php echo $row['book_image']; ?>" alt="" class="img-responsive" />
      </div>
	  <br/>
	  <br/>
	  <br/>
	  <div class="text-center">
	    <h5 style="color:black;padding:5px;margin:3px;margin-left:950px;">Author: <?php echo $row['book_author']; ?> </h5>
		<br/>
		<h5 style="color:black;padding:5px;margin:3px;margin-left:1020px;font-size:2em;">RM <?php echo $row['book_price']; ?></h5>
		<br/>
	  <h5 style="color:black;padding:10px;margin:10px;margin-left:750px;width:400px;"><?php echo $row['book_description']; ?></h5>
	 </div>
	  
	  <br/><br/><br/>
	 <div class="btn-gamp"><a href="percybookpageadminedit.php?code=<?php echo $row['book_id'];?>" style="background-color:#65AAF0;color:white;border:none;"><b>Edit</b></a></div>
      </div>
    </div>

   <div class="sub-footer">
    <div class="container">


      <div class="col-md-4 col-md-offset-4">
          <p style="color:white;">@Copyright Of Orm (Online Book Ordering System)</p>
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
