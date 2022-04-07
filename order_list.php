
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
          
                 $sql = "select * from orm_order  order by order_id desc";
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
               <div class="container" style="border: 1px solid black;width:600px;">
                   <div class="btn-gamp" style="margin-left:169px;"><a style="width:30%;height:9%;float:left;background-color:red;color:white;" href="deleteorder.php?del=<?php echo $row['order_id'];?>">DELETE</a></div>
                   <div class="btn-gamp" style="margin-left:235px;"><a style="width:30%;height:9%;float:left;background-color:lime;color:white;" href="order_list_edit.php?code=<?php echo $row['order_id'];?>">UPDATE</a></div>
              <br/><br/><br/><br/>
              <h4 ><b>Order Name :</b></h4>
              <h4><?php echo $row['order_name']; ?></h4><br/>
              <h4 ><b>UserEmail   :</b></h4>
              <h4><?php echo $row['order_email']; ?></h4><br/>
              <h4 ><b>User Phone :</b></h4>
              <h4><?php echo $row['order_phone']; ?></h4><br/>
              <h4 ><b>Order Address :</b></h4>
              <h4> <?php echo $row['order_address']; ?></h4><br/>
              <h4 ><b>User Bank Account:</b></h4>
              <h4> <?php echo $row['order_bank']; ?></h4><br/>
              <h4 ><b>User Bank :</b></h4>
              <h4> <?php echo $row['order_bankname']; ?></h4><br/>
              <h4 ><b>User Order :</b></h4>
              <h4> <?php echo $row['order_book']; ?></h4><br/>
          </div>
              <hr style="border:2px solid black;">
              <?php } }  ?>
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
