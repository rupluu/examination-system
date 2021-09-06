
<?php
session_start();
include 'conn.php';
$username = $_POST['username'];

$pwd = $_POST['password'];
$sql = "select * from admin where username ='$username' and password ='$pwd'";

// $sql = "insert into admin(username,password) values ('$username', '$password')";
$res = mysqli_query($conn, $sql);
if(mysqli_num_rows($res)==1){
$_SESSION['username'] =$_POST['username'];
	header("location:viewquestion.php");
	// header("location:form.php");
}
else{
	echo "<br><br><br><br><br><br><h1>PLEASE ENTER THE CORRECT ID AND PASSWORD !!!!!!!!!!!!<h1>";}// if(!$res){
// 	die("insertion failed" .mysqli_error($conn));
// }
// else{
// 	// echo "enter";
	
// header("location:adminpage.php");	
// }

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
<style type="text/css">
	 body{background-image: url('IMAGE/incorrect.png');
background-size: contain ;
  background-position: center;}
	  body {
  margin:0;
  padding:0;
  height: 100%;
  width : 100%;
 
}
.button {
  background-color: black; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  display: block;
  float: left;
  border: 1px solid white;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}



</style>
<body>
  <div class="container">
    <a href="admin.php" >
<button class="button"><i class="fa fa-user"></i> BACK TO LOGIN PAGE</button></a>

<!-- <a href="admin.php" class="button">
<button class="button">ADMIN</button></a>

<a href="rules.php" class="button">
<button class="button">RULES AND REGULATIONS</button></a> -->






  </div>



 </body>
</html>