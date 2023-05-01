<?php
include_once 'db.php';
if(isset($_POST['save']))
{	 
	 $username = $_POST['username'];
	 $mobile = $_POST['mobile']; 
	 $email = $_POST['email']; 
	 $address = $_POST['address'];
	 $baddress = $_POST['baddress'];
	 
	
	
	echo $sql = "INSERT INTO registration (username,mobile,email,address,baddress)
	 VALUES ('$username','$mobile','$email','$address','baddress')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>