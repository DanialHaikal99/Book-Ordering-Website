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
              <li role="presentation"><a href="indexadmin.php" >Update / Delete Books</a></li>
                <li role="presentation"><a href="addbooks.php" class="active">Add Books</a></li>
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
    
include ("dbconnect.php");
if(isset($_POST['submit'])) {
	$title			= $_POST['title'];	
	$author		= $_POST['author'];	
	$price		= $_POST['price'];	
	$desc			= $_POST['desc'];	
    $genre			= $_POST['genre'];
    
	if (!empty($_FILES['picture']['name']))
	{
			$target_dir = "img/";
			$target_file = $target_dir . basename($_FILES["picture"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) 
			{
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) 
			{
				echo "Sorry, your file was not uploaded.";
			} 
			// if everything is ok, try to upload file
			else 
			{
				if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) 
				{
					echo "The file ". basename( $_FILES["picture"]["name"]). " has been uploaded.";
				} 
				else 
				{
					echo "Sorry, there was an error uploading your file.";
				}
			}
	}
	else
		{
			$target_file = "img/0.empty.jpg";
		}
	
	
	
	if($title == "" || $author == "" || $price  == "" || $desc == ""  || $target_file == "" || $genre == ""){			
		echo "<div class ='box container'>			
			<p>One or more input is missing</p>			
			<a href='admin_add.php'>Go back</a>			
			</div>";
	} 
	else {		
		$sql = "INSERT INTO orm_book (book_title, book_price, book_description, book_author, book_genre, book_image)				
			VALUES ('$title','$price','$desc','$author','$genre','$target_file')";		
		
		$result = mysqli_query($conn,$sql);		
		if($result == false){			
			echo"<p>ERROR : can't $sql".$conn->error."</p></div>";
		}
		else {			
			echo "<div class ='box container'>			
				<p>Adding Process Was Successfully Executed</p>			
				<a href='indexadmin.php'>View </a></div>";
		}	
	}
}
?>      <div class="text-center">
    <h2>Add Books</h2>
   
  <div class="gallery">
        <h4 ><b><span style="color:red;">ALERT!</span>- After submitting the information here, the textboxes will be empty. Please be aware that this part of the procedure and just continue clicking the <span style="color:lime;">done</span> button</b></h4>
        <br/>
      <div class="container" style="border-radius: 15px;background-color:#e0e0e0;width:700px;">
         <form name="addbooks" enctype="multipart/form-data" action="addbooks.php" method="post">
             <input type="hidden" name="edit" style="float:right;color:black;" placeholder="<?php echo $row['book_id']; ?>">
              <h3>Book Image</h3>
             <input type="file" name="picture" style="margin-left:240px;color:black;">
                <h3>Book Genre</h3>
             <input  type="name "name="genre"   placeholder="Type the genre here" style="width:530px;color:black">
              <h3>Book Title</h3>
           <input type="name" name="title" style="color:black;width:530px;" placeholder="Type the title here">
	       <br/>
	    <h3>Book Author</h3>
	    <input type="name" name="author" style="color:black;padding:5px;margin:3px;width:530px;" placeholder="Type the author here">
		<br/>
         <h3>Book Price</h3>
		<input type="number" name="price" style="color:black;padding:5px;margin:3px;width:530px;" placeholder="Type the price here">
		<br/>
         <h3>Book Description</h3>
        <textarea  type="name" rows="4" cols="50" name="desc" style="color:black;padding:10px;margin:10px;width:530px;height:200px;" placeholder="Type the description here"></textarea>
	
          <div class="btn-gamp"><button name="submit" type="submit" style="background-color:limegreen;color:white;border:none;">Submit</button></div>
          </form>
	  <br/>
	 <div class="btn-gamp" style="margin-right:240px;"><a href="indexadmin.php" style="background-color:lime;color:white;border:none;"><b>Done</b></a></div>
      </div>
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
