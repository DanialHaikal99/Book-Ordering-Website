<?php
    $conn = mysqli_connect('localhost', 'root', '', 'orm');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    if(isset($_GET['del'])){
	$vid = $_GET['del'];
	$sql = "delete from orm_book where book_id='$vid'";
	$result = $conn -> query($sql);
	if($result == false){
		echo "Error : $sql".$conn->error;
	}else{
		echo "<div class ='box container'>
			<p>Removing Process Was Successfully Executed</p>
			<a href='indexadmin.php'>View</a>
			</div>"; 
	}
}
?>
