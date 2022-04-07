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
            <a href="index.php"><h1>ORM!</h1></a>
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

    
        $code = $_REQUEST['code'];
		$result = mysqli_query($conn, "select * from orm_book WHERE book_id='$code';");
        $row = mysqli_fetch_assoc($result);
    
        
  ?>
    
    
  <div class="gallery">
  
    <div class="text-center">
        <h4 ><b><span style="color:red;">ALERT!</span>- After updating the information here, the textboxes will be empty. Please be aware that this part of the procedure and just continue clicking the <span style="color:lime;">done</span> button</b></h4>
        <br/>
    <div class="container" style="border-radius: 15px;background-color:#e0e0e0;width:700px;">
        <form name="editbooks" enctype="multipart/form-data" action="update-v.php?update=<?php echo $code;?>" method="post">
            <input type="hidden" name="id" style="width:530px;color:black;" value="<?php echo $code; ?>">
             <h3>Book Title</h3>
      <input type="name" name="title" style="width:530px;color:black;" value="<?php echo $row['book_title']; ?>">
	  <br/>
            <h3>Book Image</h3>
            <input class="filestyle" name="vpict" data-icon="false" type="file" style="color:black;margin-left:240px;" required="">
            <br/>
	   <h3>Book Author</h3>
	    <input type="name" name="author" style="width:530px;color:black;padding:5px;margin:3px;" value="<?php echo $row['book_author']; ?>">
		<br/>
         <br/>
	   <h3>Book Genre</h3>
	    <input type="name" name="genre" style="width:530px;color:black;padding:5px;margin:3px;" value="<?php echo $row['book_genre']; ?>">
		<br/>
        <h3>Book Price</h3>
		<input type="number" name="price" style="width:530px;color:black;padding:5px;margin:3px;" value="<?php echo $row['book_price']; ?>">
		<br/>
        <h3>Book Description</h3>
          <textarea  type="name"  name="desc" style="width:530px;color:black;padding:10px;margin:10px;height:200px;"> <?php echo $row['book_description']; ?></textarea>
	
          <div class="btn-gamp"><button name="submit" type="submit" style="background-color:limegreen;color:white;border:none;">Submit</button></div>
          
	  <br/>
	 <div class="btn-gamp" style="margin-right:240px;"><a href="indexadmin.php" style="background-color:lime;color:white;border:none;"><b>Done</b></a></div>
      </div>
             </form>
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
