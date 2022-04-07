<?php
	include ('dbconnect.php');

if(isset($_POST['submit'])) {
	
	// removing ID coz it will be auto-incremented anyway
	// $id			= $_POST['id'];
	$pass1		= $_POST['pass1'];
	$pass2		= $_POST['pass2'];
	$name		= $_POST['name'];
	$address	= $_POST['address']; 
	$username	= $_POST['username'];
	$phone		= $_POST['phone'];
	$email		= $_POST['email'];
	//$pict		= addslashes(file_get_contents($_FILES['pict']['tmp_name']));
	
	// Note: Removing every picture vars to register.php since it is unnecessary and no use most of the time. 
	
	//sql statement to check if the users already exists
	$sql = "select * from orm_customer where email = '$email'";
	$resultemail = mysqli_query($conn,$sql);
		
	$sqlname = "select * from orm_customer where customer_username = '$username'";
	$resultname = mysqli_query($conn,$sqlname);
	
	if ($pass1 != $pass2) 
	{
		//get num of rows resulted from the query then compare
		if(mysqli_num_rows($resultemail)!=0) 
		{
			
			if(mysqli_num_rows($resultname)!=0) 
			{
				echo "<div class ='box container'>
					<p>Error: Password	and Confirm Password is not same.</p>
					<p>Error: User email already existed</p>
					<p>Error: Username already existed</p>
					<a href='registerform.php'>Go back</a>
					</div>";
			}
			else
			{
				echo "<div class ='box container'>
					<p>Error: Password	and Confirm Password is not same.</p>
					<p>Error: User email already existed</p>
					<a href='registerform.php'>Go back</a>
					</div>";
			}
			
		}
		else if(mysqli_num_rows($resultname)!=0) 
		{
			echo "<div class ='box container'>
				<p>Error: Password	and Confirm Password is not same.</p>
				<p>Error: Username already existed</p>
				<a href='registerform.php'>Go back</a>
				</div>";
		}
		else
		{
			echo "<div class ='box container'>
				<p>Error: Password	and Confirm Password is not same.</p>
				<a href='registerform.php'>Go back</a>
				</div>";
		}
	}	
	else 
	{
		$password = $pass1;
		
		//get num of rows resulted from the query then compare
		if(mysqli_num_rows($resultemail)!=0) 
		{
			if(mysqli_num_rows($resultname)!=0) 
			{
				echo "<div class ='box container'>
					<p>Error: User email already existed</p>
					<p>Error: Username already existed</p>
					<a href='registerform.php'>Go back</a>
					</div>";
			}
			else
			{
				echo "<div class ='box container'>
					<p>Error: User email already existed</p>
					<a href='registerform.php'>Go back</a>
					</div>";
			}
			
		}
		else if(mysqli_num_rows($resultname)!=0) 
		{
			echo "<div class ='box container'>
				<p>Error: Username already existed</p>
				<a href='registerform.php'>Go back</a>
				</div>";
		}
		else
		{
			if ( $username == "" || $pass1 == "" || $pass2 == "" ||  $name == "" || $address == "" || $phone == "" || $email == "" ) {
				echo "<div class ='box container'>
					<p>Error: One or more fields are missing</p>
					<a href='registerform.php'>Go back</a>
					</div>";
			} 
			else 
			{
				$query = "INSERT INTO orm_user(user_username, user_password, user_type) 
							VALUES ('$username', '$password', 'user')";
				$queryc = "INSERT INTO orm_customer(customer_username, customer_name, customer_address, customer_phone, customer_email)
							VALUES ('$username','$name','$address','$phone','$email')";
				$inuser = mysqli_query($conn,$query);
				$incust = mysqli_query($conn,$queryc);
				
				if(($inuser && $incust)== FALSE){
					echo"Error : $queryc".$conn->error;
					echo"Error : $queryc".$conn->error;
				}else{
				echo "<div class='box container'>
					<p>	Registered Successfully	</p>
					<a href='loginform.php'>Login</a>
					";
				}
			}
		
		}
	}
	

}
?>