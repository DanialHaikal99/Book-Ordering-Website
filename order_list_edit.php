<?php
include ("dbconnect.php");
?>
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
<style>

table {
  width: 60%;
  border-collapse: collapse;
  margin: 100px auto;
}
th,
td {
  height: 50px;
  vertical-align: center;
  border: 1px solid black;
    color:black;
}
</style>
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
            <a href="indexadmin.php"><h1>Orm!</h1></a>
          </div>
        </div>
        <div class="navbar-collapse collapse">
          <div class="menu">
            <ul class="nav nav-tabs" role="tablist">
             <li role="presentation"><a href="order_list.php" class="active">Orders</a></li>
              <li role="presentation"><a href="indexadmin.php" >Update / Delete Books</a></li>
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

    <div class="container">
      <div class="text-center">
          <h3>Recent Orders</h3>
          <br/>
          <div class="text-center" style="border-radius: 15px;background-color:#e0e0e0;color:black;width:1000px;margin-left:70px;">
              
          

	 <?php

    
        $code = $_REQUEST['code'];
		$result = mysqli_query($conn, "select * from orm_order WHERE order_id='$code';");
        $row = mysqli_fetch_assoc($result);
    
        
  ?>
	
			
         
               <div class="container" style="border: 1px solid black;width:600px;">
                   
                 <form name="editorder" enctype="multipart/form-data" action="update-o.php?update=<?php echo $code;?>" method="post">
                     
            <input type="hidden" name="id" style="width:530px;color:black;" value="<?php echo $code; ?>">
             <h3>Order Name</h3>
      <input type="name" name="order" style="width:530px;color:black;" value="<?php echo $row['order_name']; ?>" required>
	  <br/>
            <h3>User Email</h3>
            <input  name="email"  type="email" style="width:530px;color:black;" value="<?php echo $row['order_email']; ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
            <br/>
	   <h3>User Phone</h3>
	    <input type="tel" name="phone" style="width:530px;color:black;padding:5px;margin:3px;" value="<?php echo $row['order_phone']; ?>" pattern="[0-9]{3}-[0-9]{4}-[0-9]{3}" required>
		<br/>
        <h3>Order Address</h3>
		<input type="name" name="address" style="width:530px;color:black;padding:5px;margin:3px;" value="<?php echo $row['order_address']; ?>" required>
		<br/>
        <h3>User Bank Account</h3>
         <input type="name" name="bank" style="width:530px;color:black;padding:5px;margin:3px;" value="<?php echo $row['order_bank']; ?>" required> 
	    <br/>
        <h3>User Bank</h3>
         <input type="name" name="bankname" style="width:530px;color:black;padding:5px;margin:3px;" value="<?php echo $row['order_bankname']; ?>" required> 
         <h3>User Order</h3>
         <input type="name" name="book" style="width:530px;color:black;padding:5px;margin:3px;" value="<?php echo $row['order_book']; ?>" required> 
          <div class="btn-gamp"><button name="submit" type="submit" style="background-color:limegreen;color:white;border:none;">Submit</button></div>
          
	  <br/>
	 <div class="btn-gamp" style="margin-right:193px;"><a href="order_list.php" style="background-color:lime;color:white;border:none;"><b>Done</b></a></div>
      </div>
             </form>
          </div>
              
          </div>
	   <br/>
  <!--/header-->

		<div class="container">
     
	  <div class="col-md-4" >
             <br><br>
          
      </div>
  
    </div>   
    </div>
  </div>


    <br/><br/><br/>


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
