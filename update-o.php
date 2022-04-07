<?php 
session_start();
include ("dbconnect.php");

if(isset($_REQUEST["update"]))
{
	$code = $_REQUEST["update"];
	
	if(isset($_POST['submit'])) {	

		$order_name			= $_POST['order'];
		$order_email			= $_POST['email'];
		$order_address			= $_POST['address'];
        $order_phone			= $_POST['phone'];
         $order_bank			= $_POST['bank'];
        $order_bankname			= $_POST['bankname'];
         $order_book			= $_POST['book'];

			
		
		
		
			$sql = "UPDATE orm_order SET order_name='$order_name', order_email='$order_email', order_address='$order_address', order_phone='$order_phone', order_bank='$order_bank', order_bankname='$order_bankname', order_book='$order_book' WHERE order_id='$code'";
			$result = mysqli_query($conn,$sql);
			if($result == false){
				echo"ERROR : can't $sql".$conn->error;
			} else{
				echo "
				<p>Updating Process Was Successfully Executed</p>
				<a href='order_list.php'>View</a>";
				//<p>if success but record still not change see this code below</p>
				//<p>$sql</p>"
				
			}
		
	}
}
?>
