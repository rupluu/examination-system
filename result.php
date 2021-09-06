<?php
include 'conn.php';
$sql = "select name,sum(iscorrect) as TOTALMARKS,date from score group by date,name";
$res = mysqli_query($conn, $sql);
include ('notify.php');
// echo "<a href='adminpage.php'>CLICK HERE TO ADD QUSTIONS </a>"; 
// echo "<br><br>";
  

// echo "<a href='adminpage.php'>CLICK HERE TO VIEW RESULT OF STUDENTS </a>"; 
// echo "<br> <br>";
if(mysqli_num_rows($res) > 0){
echo "<table border='1'>";
echo "<tr>";
	// echo "<th> name </td>";
	// echo "<th> RESULT</th>";
	echo "<th> name</th>";
	echo "<th>  result</th>";
	echo "<th> date </th>";
	echo "<th> FOR DELETE </th>";
	// echo "<th>  ANSWER 3</th>";
	// echo "<th>  ANSWER 4</th>";
	// echo "<th>  CORRECT ANSWER </th>";
	// echo "<th>  ACTION</th>";
	echo "</tr>";
	while ($row = mysqli_fetch_assoc($res)) {
	echo "<tr>";
	echo "<td>" .$row['name']. "</td>";
	echo "<td>".$row['TOTALMARKS']. "</td>";
	echo "<td>".$row['date']."</td>";
	echo "<td>
                  <a href='deleteresult.php?id=". $row['name']."&dates=".$row['date']."'> DELETE </a>
                                    </td>";
	echo "</tr>";

	
}
echo"</table>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		 body{background-image: url('IMAGE/1.jpg');
background-size: cover;
  background-position: center;}






	</style>
	<title></title>

<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	
</body>
<style type="text/css">
	 .button {
  background-color: black; /* Green */
  border: none;
  color: white;
  padding: 18px 30px;
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
    <h2><a href="viewquestion.php" >
<button class="button"><i class="fa fa-user"></i> <b>CLICK here to go to ADMINPAGE</b></button></a></h2>







  </div>



 </body>

</html>
