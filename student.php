<!DOCTYPE html>
<html>
<head>
	<style>
body {
  background-image: url('IMAGE/STUDENT.jpg');
}
</style>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>STUDENT</title>
</head>
<body>
	<header>

<div class="header">
	<h2> <a href="form.php">ONLINE EXAMNINATION SYSTEM </a></h2>
	<h2 align="right"><a href="form.php"><button><i class="fa fa-home"></i> BACK to Home Page </button></h2></a>	
</div>
</header>
<br><br> <br><br>
<form align= "center" width= "40%" height="60%" method="POST" action="logingarna.php">
	<div class="login">	
	<fieldset>
		<legend align= "center"></legend>
<h1>****ENTER YOUR USERNAME AND PASSWORD HERE **** </h1>
		USERNAME: <input type="text" name="username" ><br><br>
		PASSWORD: <input type="password" name="password"><br> <br>
		<input type="Submit" name="submit" value="Submit"><br>
		SIGN UP? <br>
		<a href=" register.php"> Click Here For Register!!! </a>
	</fieldset>
</div>
</form>

</body>
</html>