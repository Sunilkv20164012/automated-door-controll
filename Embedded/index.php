<?php
include 'db_connection.php';
$conn = OpenCon();
//clearDir();
echo "Connected Successfully";

$f1=LOAD_FILE('1.jpg');
$s1="insert into image values(0,'NULL')";
echo $f1;
if($conn->query($s1)===TRUE)
	echo "dsifdng";
else
	echo $conn->error;
	mysqli_query($conn,$s1);

// while(1){


// }
CloseCon($conn);
?>
