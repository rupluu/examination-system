<?php
$server="localhost";
$user= 'root';
$password= '';
$db= 'userlogin';
$conn= mysqli_connect($server, $user, $password, $db);
if (!$conn) {
	die("Connection failed". mysqli_connect_error());

}
?>