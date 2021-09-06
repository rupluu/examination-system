<?php
include("conn.php");
$sql = "insert into student (id, name, email, roll) values ('1', 'ruplu', 'ruplu@gmail.com', '1')";
$res = mysqli_query($conn, $sql);
if (!$res) {
	die("insertion failed ".mysqli_error($conn));
}
else{
	echo " Data inserted";
}
mysqli_close($conn);
 ?>
