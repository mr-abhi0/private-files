<?php
session_start();
if(!$_SESSION['use']) {
 header("location:login.php");
die();}
 else{
 $conn = new mysqli('localhost', 'root1_titangoldcoin1', 'tgold@23456');  
mysqli_select_db($conn, 'root1_titangold.co.in1');
$sql = "SELECT `id`,`user_name`,`subject` , `user_email` , `content` , `baddress` , CONVERT_TZ(modified_time,'+00:00','+11:30') modified_time FROM `registration`";
$setRec = mysqli_query($conn, $sql);
$columnHeader = '';
$columnHeader = "Id" . "\t" . "user_name" . "\t" . "subject" . "\t" . "user_email" . "\t" . "content" . "\t" . "baddress" . "\t";
$setData = '';
while ($rec = mysqli_fetch_row($setRec)) {
$rowData = '';
foreach ($rec as $value) {
$value = '"' . $value . '"' . "\t";
$rowData .= $value;
}
$setData .= trim($rowData) . "\n";
}
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=titangold.co.in.xls");
header("Pragma: no-cache");
header("Expires: 0");
 echo ucwords($columnHeader) . "\n" . $setData . "\n";
 }


?>