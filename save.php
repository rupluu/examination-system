<?php
include 'conn.php';
$username = $_POST['username'];
$email = $_POST['email'];
$contact=$_POST['contact'];
$pwd = $_POST['password'];

$sql = "insert into student (email,username,password,contact) values ('$email','$username', '$pwd','$contact')";
$res = mysqli_query($conn, $sql);
if(!$res){
	die("insertion failed" .mysqli_error($conn));
}
else{
	
header("location:afterlogin.php");	
}

?>