<!DOCTYPE html>
<html>
<head>
	<title>ADMIN LOGIN</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<header>
		<div class="header">
			
		<h3> Welcome to Admin Login Page.... </h3><h4 align="right"><a href="form.php"><button><i class="fa fa-home"></i> BACK to Home Page </button></h4></a>	
			
		</div>
	</header>
</head>
<style type="text/css">
	body{background-image: url('IMAGE/admin.jpg');
background-size: cover;
  background-position: center;}
</style>
<body>

<form method="post" action="adminsave.php">
<fieldset>
	USERNAME:  <input type="text" name="username"><br> <br>
	PASSWORD: <input type="password" name="password"><br> <br>
	<input type="submit" name="login">

</fieldset>
</form>
</body>


</html>