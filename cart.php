
<!DOCTYPE html>
<?php 
    include('dbconnect.php');
    session_start();
	if (isset($_POST["addCart"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"book_id");
            if (!in_array($_GET["book_id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'book_id' => $_GET["book_id"],
                    'book_title' => $_POST["hidden_name"],
                    'book_price' => $_POST["hidden_price"],
                    'gadget_quantity' => $_POST["gadget_quantity"],
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="cart.php"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="cart.php"</script>';
            }
        }else{
            $item_array = array(
                'book_id' => $_GET["book_id"],
                'book_title' => $_POST["hidden_name"],
                'book_price' => $_POST["hidden_price"],
                'gadget_quantity' => $_POST["gadget_quantity"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }
    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["book_id"] == $_GET["book_id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="cart.php"</script>';
                }
            }
        }
    }
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
        </div>
      <!--/.container-->
    </nav>
    <!--/nav-->
  </header>
  <!--/header-->

  <div class="gallery">
  <div style="background-color:#e0e0e0;border:2px solid grey;">
  <h2>Checkout</h2>
   
       <?php
                   $_SESSION['total'] = 0;
                    if(!empty($_SESSION["cart"])){
                        $total = 0;
                        foreach ($_SESSION["cart"] as $key => $value) {
                            ?>
                        <table id="customers" style="color:black;">
                            <tr>
                                <th>Book Title</th>
                                 <th>Book Quantity</th>
                                 <th>Book Price</th>
                                 <th>Total Price</th>
                                 <th></th>
                            </tr>
                            <tr >
                                <td width="10%"><?php echo $value["book_title"]; ?></td>
                                <td width="10%"><?php echo $value["gadget_quantity"];  ?></td>
                                <td width="10%">RM <?php echo $value["book_price"]; ?></td>
                                <td width="10%">
                                    RM <?php echo number_format($value["gadget_quantity"] * $value["book_price"], 2); ?></td>
                                <td width="10%"><a href="cart.php?action=delete&book_id=<?php echo $value["book_id"]; ?>"><span
                                            class="text-danger">Remove Item</span></a></td>

                            </tr>
                            <?php
                                $total = $total + ($value["gadget_quantity"] * $value["book_price"]);
                                $_SESSION['total'] = $total;
                            ?>
                            <tr>
                                <th colspan="3" align="right">Total</th>
                                <th align="right">RM <?php echo number_format($total, 2); ?></th>
                                <td></td>
                            </tr>
          </table>
                                    <?php
                        } }
                    ?>
                            
      <hr>
  </div>
      <br><br>
      <div class="btn-gamp" ><a href="self_delivery.php" style="background-color:#65AAF0;margin-left:10px;";><b>Checkout</b></a></div>
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
