<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <style> 
        .fontuser { 
            position: relative; 
        } 
          
        .fontuser i{ 
            position: absolute; 
            left: 15px; 
            top: 45px; 
            color: gray; 
        } 

        .password { 
            position: relative; 
        } 
          
        .password i{ 
            position: absolute; 
            left: 15px; 
            top: 45px; 
            color: gray; 
        } 
        body{ margin: 0;
        	padding: 0;
        	background: url(pic-4.jpg) no-repeat ;
          background-position: center;
          background-size: cover;
        }
        .h1{
  padding: 0px;
  margin: 0px;
  text-align: center;
  color: grey;
  font-size: 30px;
        }
        body{background-image: url('IMAGE/register2.jpg');
background-size: cover;
  background-position: center;}
    </style> 
</head>
<body>
	<div class = "container-fluid">
		<div class = "row">
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
			<div class="col-md-4 col-sm-4 col-xs-12">
<div class="loginbox">
<h1 class = "h1">Registration Form</h1><br><br>
<form  method="POST" action="save.php "           >
  <div class="fontuser">
    <label for="Username">Username</label>
    <input type="text" class="form-control" name = "username" id="form-control" placeholder="Username">
  </div>
  <div class="fontuser">
    <label for="E-mail">E-mail</label>
    <input type="text" class="form-control" name = "email" id="form-control" placeholder="E- mail">
  </div>
  <div class="password">
    <label for="Contact">Contact</label>
    <input type="text" class="form-control" name="contact" id="form-control" placeholder="Contact">
  </div>
       <div class="password">
    <label for="Password">Password</label>
    <input type="Password" class="form-control" name="password" id="form-control" placeholder="Password">
  </div></br>
	<input type="submit" class="btn btn-primary" value="Sign Up"><br>
		</div>
</form>
</body>
</html>


<?php  
  if($_SERVER['REQUEST_METHOD']=="POST"){
      if(empty($_POST['username'])){
        echo "Name cannot be left empty";
      }
      else if(!preg_match("/^[A-Z a-z]*$/", $_POST['name'])){
        echo "Name must contain character only";
      }
      else if(!preg_match("/^[0-9]*$/", $_POST['contact'])){
        echo "Contact is invalid";
      }
      else if(!filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)){
        echo "Email is invalid";
      }
      else{
        $n = $_POST['name'];
        $c = $_POST['contact'];
        $e = $_POST['email'];   }
    }
?>
