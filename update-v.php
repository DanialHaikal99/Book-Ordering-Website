<?php 
session_start();
include ("dbconnect.php");

if(isset($_REQUEST["update"]))
{
	$code = $_REQUEST["update"];
	
	if(isset($_POST['submit'])) {	

		$book_title			= $_POST['title'];
		$book_author			= $_POST['author'];
		$book_genre		= $_POST['genre'];
		$book_price			= $_POST['price'];
		$book_desc		= $_POST['desc'];

			$target_dir = "img/";
			$target_file = $target_dir . basename($_FILES["vpict"]["name"]);
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
				if (move_uploaded_file($_FILES["vpict"]["tmp_name"], $target_file)) 
				{
					echo "The file ". basename( $_FILES["vpict"]["name"]). " has been uploaded.";
				} 
				else 
				{
					echo "Sorry, there was an error uploading your file.";
				}
			}
		
		
		
			$sql = "UPDATE orm_book SET book_title='$book_title', book_author='$book_author', book_genre='$book_genre', book_price='$book_price', book_description='$book_desc', book_image='$target_file' WHERE book_id='$code'";
			$result = mysqli_query($conn,$sql);
			if($result == false){
				echo"ERROR : can't $sql".$conn->error;
			} else{
				echo "
				<p>Updating Process Was Successfully Executed</p>
				<a href='indexadmin.php'>View</a>";
				//<p>if success but record still not change see this code below</p>
				//<p>$sql</p>"
				
			}
		
	}
}
?>
