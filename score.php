



<?php
include "conn.php";
session_start();
$count =0;
$name=$_SESSION['username'];
$date=date("Y/m/d");

if(isset($_POST['submit']))
    {
        $data=$_POST;
        foreach($data as $q=>$ans)  
        {
        $iscorrect=0;
		if ($q!='submit')
	    {
		$qry= "select correct_ans from question where id='$q'";
    	$run=mysqli_query($conn, $qry);
    	
    	$answer1=mysqli_fetch_assoc($run);
   			 if($answer1['correct_ans'] == $ans)

    		{
    			$iscorrect=1;
        		$count++;
    		}	
    		    $sql = "insert into score (name,ques_id,ans,iscorrect,date) values ('$name','$q', '$ans','$iscorrect','$date')";
                $res = mysqli_query($conn, $sql);
	}
    
}

    }
  echo " <b><h1><u>YOUR MARKS IN THIS EXAM IS $count</u></h1><b>";



    ?>
<!DOCTYPE html>
<html>
<head>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
    <!-- <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="js/bootstrap/bootstrap.min.js"></script> -->
    
    <i class="bi bi-arrow-left-circle-fill"></i>

    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body></body>
<style>
            body {background-image: url('IMAGE/prime.jpg');
background-size: cover;
  background-position: center;}
  /*margin:0;
  padding:0;
  height: 100%;
  width : 100%;*/
 
}
 .button {
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
  border: 1px solid red;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
.container{
  height: 100vh;
  width: 800;
  background-image:url(image/thankyou.jpg);
  background-size: contain;
  background-position: center;
  transition: 5s;

  animation-name: animate;
  animation-direction: alternate-reverse;
  animation-duration: 6s;
  animation-fill-mode:forwards; ;
  animation-iteration-count: infinite;
  animation-play-state: running;
  animation-timing-function:ease-in-out; 

}
@keyframes animate{
  0%{
    
    background-image: url(image/thanks1.jpg);

  } 20%{background-image: url(image/thank.png);
  40% {
background-image: url(image/thankyou.jpg);
  }
  60%{
background-image: url(image/thanks1.jpg);




  }
  80%{
    background-image: url(image/prime.jpg);
  }
  100%{

  }


}


}







        </style>
 <body>
  <div class="container">
    <h2><a href="form.php" >
<button class="button"><h2><i class="fa fa-user"></i></h2><h3><--- CLICK here to go to homepage ---></h3></button></a></h2>

<!-- <a href="admin.php" class="button">
<button class="button">ADMIN</button></a>

<a href="rules.php" class="button">
<button class="button">RULES AND REGULATIONS</button></a>
 -->





  </div>



 </body>
</html>