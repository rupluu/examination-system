<?php
$server="localhost";
$user="root";
$pwd="";
$db="userlogin";
$conn=mysqli_connect($server,$user,$pwd,$db);

if(!$conn)
	die("cannot connect".mysqli_connect_error());

$sql="create table admin(username varchar(200),password varchar(11))";
$res=mysqli_query($conn,$sql);
if(!$res) {
	die("cannot create table".mysqli_connect_error($conn));
}
else {
	echo "table created";
}
mysqli_close($conn);
?>
