<?php
// echo 'Arsenal';die;
session_start();
include "conn.php";
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "select * from student where username ='$username' and password = '$password'";
$res = mysqli_query($conn, $sql);
// print_r($res);die;
if(mysqli_num_rows($res)==1){
	// echo "Login Sucessfull";
	$_SESSION['username'] =$_POST['username'];
	header("location:afterlogin.php");
	// header("location:form.php");
}
else{
	echo "<br><br><br><br><br><br>";
}
	// header("location:afterlogin.php");

?>
<!DOCTYPE html>
<html>
<head>
	
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
</body>
<style>
	body{background-image: url('IMAGE/register1.jpg');
background-size: contain ;
  background-position: center;}
	body{
		 margin:0;
  padding:0;
  height: 100%;
  width : 100%;
}
		 .buttom {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  display: block;
  float: left;
  border: 1px solid green;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
	

</style>
<body>
	
 <div class="container">
    <a href="form.php" class="button">
<button class="button"><i class="fa fa-user"></i> <h1><--PLEASE ENTER THE CORRECT ID AND PASSOWORD and TRY AGAIN--></h1> </button></a>
<div class="map">
	<img src="IMAGE/back.png"  alt="Workplace" usemap="#workmap">
<map name="workmap">
<area shape="rect" coords="50,50,1000000,50000" alt="img" href="student.php">	
</map>
</div>
</body>
</html>
















  