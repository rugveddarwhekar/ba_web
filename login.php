<?php
require "conn.php";
$username = $_POST["user_name"];
$userpass = $_POST["password"];
$mysql_qry = "SELECT * FROM login_admin WHERE username = '$username' && password = '$userpass';";
$result = mysqli_query($conn, $mysql_qry);

/* $result_array = array();

if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_array($result))
{
     array_push($result_array, array('name' =>$row[1]));
}

echo json_encode(array("result"=>$result_array));
}

else
   echo "0";

mysqli_close($conn); */
 
$row = mysqli_fetch_array($result)

if( $row['username']==$username && $row['password']==$password)
  echo "Login success welcome".$row['username'];
else 
  echo"Login failed";
  
?>