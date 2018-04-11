<html>
<head>
	<title> Data incoming </title>
</head>

<body>

<?php

require "conn.php";


$sql = "select worker_details.w_id, worker_details.w_name, w_attend.in_time from worker_details INNER JOIN w_attend ON 
        worker_details.w_id=w_attend.w_id AND w_status=1 AND DATE(in_time)= CURDATE()";

$result = mysqli_query($conn, $sql);


if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_array($result))
     {
        echo $row[0]."  ".$row[1]."  ".$row[2]."  ".$row[3]." ".$row[4];        
        echo "<br>";
     }
}


mysqli_close($conn);
?>

</body>
</html>



