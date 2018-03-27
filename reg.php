<?php
require "conn.php";
$name = "Advait";
$phone = "9623873065";
$email = "advait.takalkar@gmail.com";
$username = "advait";
$password = "advait";

$sql_query = "insert into login_manager (name, phone, email, username, password) values ('$name', '$phone', '$email', '$username', '$password');";

if(mysqli_query($conn, $sql_query))
{
	echo "Data Insertion Success";
} 
else 
{
	echo "Data Insertion Failed";
}
?>