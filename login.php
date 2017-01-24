<?php

$conn = mysql_connectlocalhost:3306","1","GovardhanSB",hello);
$phone = $POST("PhoneNo");
$password=$POST("Password");
$statment = mysqli_prepare($conn,"SELECT * FROM UserDatabasetb WHERE PhoneNo=? AND Password=?");
mysqli_stmt_bind_param($statment,"siss",$phone,$password);
mysqli_stmt_execute(statment);
mysqli_stmt_store_result($statment);
mysqli_stmt_bind_result($statment,$ID,$Phone,$password);
$response = array();
$response("sucess")=false;
while(mysqli_stmt_fetch($statment))
{
	$response("sucess")=true;
	$response("phone")=$phone;
	$response("password")= $password;
	
}
echo json_encode($response);
?>