
<?php
include 'conn.php';
$sql = "select * from question";
$res = mysqli_query($conn, $sql);
include ('notify.php');
echo "<br><br><a href='adminpage.php'>CLICK HERE TO ADD QUSTIONS </a>"; 
echo "<br><br>";
  

echo "<a href='result.php'>CLICK HERE TO VIEW RESULT OF STUDENTS </a>"; 
echo "<br> <br>";
if(mysqli_num_rows($res) > 0){
echo "<table border='1'>";
echo "<tr>";
	echo "<th> ID </td>";
	echo "<th> QUESTIONS</th>";
	echo "<th> ANSWER 1</th>";
	echo "<th>  ANSWER 2</th>";
	echo "<th>  ANSWER 3</th>";
	echo "<th>  ANSWER 4</th>";
	echo "<th>  CORRECT ANSWER </th>";
	echo "<th>  ACTION</th>";
	echo "</tr>";
	while ($row = mysqli_fetch_assoc($res)) {
	echo "<tr>";
	echo "<td> " .$row['id']. "</td>";
	echo "<td> ".$row['question']. "</td>";
	echo "<td> " .$row['ans1'].  "</td>";
	echo "<td>  ".$row['ans2']. "</td>";
	echo "<td>  ".$row['ans3']. "</td>";
	echo "<td>  ".$row['ans4']. "</td>";


	echo "<td>  ".$row['correct_ans']. "</td>";
		echo "<td><a href='editquestion.php?id=". $row['id']."'>EDIT </a>
                  <a href='deletequestion.php?id=". $row['id']."'> DELETE </a>
                                    </td>";

	echo "</tr>";
	
}
echo"</table>";
}
?>
<!-- <a href="adminpage.php">buttom</a>
 --><!DOCTYPE html>
<html>
<head>
	<!-- <div class="header">
	<h2 align=""><a href="form.php"><button><i class="fa-home"></i> BACK to Home Page </button></h2>
	</div> -->
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style type="text/css">
    body{background-image: url('IMAGE/view.jpg');
background-size: cover;
  background-position: center;}

  .button {
  background-color: black; /* Green */
  border: none;
  color: white;
  padding: 18px 20px;
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
    <h2><a href="form.php" >
<button class="button"><i class="fa fa-user"></i> BACK TO HOME PAGE</button></a></h2>
</div>
</body>
</html>