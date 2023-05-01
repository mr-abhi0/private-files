
<?php
if(!empty($_POST["submit"])) {
	$name = $_POST["your-name"];
	$phone = $_POST["PhoneNumber"];
	//$subject = $_POST["CityState"];
	//$content = $_POST["content"];
	$baddress = $_POST["CityState"];
if($name=="" || $phone=="" || $baddress=="")
{
}
else
{
	$conn = mysqli_connect("localhost", "root", "", "kamratan") or die("Connection Error: " . mysqli_error($conn));
	mysqli_query($conn, "INSERT INTO order (user_name, phone_number,  baddress) VALUES ('" . $name. "', '" . $phone. "','" . $baddress. "')");
	$insert_id = mysqli_insert_id($conn);
	//if(!empty($insert_id)) {
	   $message = "Your order placed successfully.";
	   $type = "success";
	//}
}
}
require_once "index.html";
?>  