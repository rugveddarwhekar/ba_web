<?php
   include 'conn.php';
    if(mysqli_connect_errno())
    {
     echo "failed to connect".mysqli_connect_error();
    }


   $string = $_POST['string'];
   
   
   $sql="insert into Timepass (TPS) VALUES ('$string')";
   if (mysqli_query($conn,$sql)) {
      echo "Values have been inserted successfully";
   }
  

   
?>