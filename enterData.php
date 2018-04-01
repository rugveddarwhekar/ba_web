<?php
   include 'conn.php';
    if(mysqli_connect_errno())
    {
     echo "failed to connect".mysqli_connect_error();
    }


   $string = $_POST['string'];
   $data = explode('!',$string);
   //echo $data[0];
   if($data[0] == 'entry'){
    $sql="insert into w_attend (w_id, in_date, in_time) VALUES ('$data[1]', '$data[2]', '$data[3]')";
   }
   
   if (mysqli_query($conn,$sql)) {
      echo "Values have been inserted successfully";
   }
  
?>