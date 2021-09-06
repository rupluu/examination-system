<!DOCTYPE html>
 <html>
 <head>

   
    <title>  exam </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 </head>
 <body>
   
 </body>
 <style>
            body {
  margin:0;
  padding:0;
  height: 100%;
  width : 100%;
 
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
  border: 1px solid green;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
.container{
  height: 100vh;
  width: 800;
  background-image:url(image/prime.jpg);
  background-size: cover;
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
    
    background-image: url(image/prime.jpg);

  } 20%{background-image: url(image/paper.png);
  40% {
background-image: url(image/prime.jpg);
  }
  60%{
background-image: url(image/paper.png);




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
    <a href="student.php" class="button">
<button class="button"><i class="fa-user"></i> STUDENT</button></a>

<a href="admin.php" class="button">
<button class="button">ADMIN</button></a>

<a href="rules.php" class="button">
<button class="button">RULES AND REGULATIONS</button></a>






  </div>



 </body>

 </html>