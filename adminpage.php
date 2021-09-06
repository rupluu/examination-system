<?php 
include 'conn.php';

if(isset($_POST['submit']))
{
	echo("HELLO");
    $ques=$_POST['question'];
    $ans1=$_POST['ans1'];
    $ans2=$_POST['ans2'];
    $ans3=$_POST['ans3'];
    $ans4=$_POST['ans4'];
    $correct_ans=$_POST['correct_ans'];
    $qry = "INSERT INTO question (question, ans1, ans2, ans3, ans4,correct_ans) values('$ques', '$ans1', '$ans2' , '$ans3', '$ans4','$correct_ans')";
    
    $res = mysqli_query($conn, $qry);
    if (!$res) {
	die("insertion failed ".mysqli_error($conn));
}
else{
	echo " Data inserted";
	 header('location:viewquestion.php');
}
mysqli_close($conn);
    // if ($run == 1) {
    //      echo 'saved_successfully';
       
    // }else{
    //     echo "Error in updating student info";
    
}
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		 body{background-image: url('IMAGE/register2.jpg');
background-size: cover;
  background-position: center;}


		
	</style>
	<title></title>
</head>
<body>
	<br>
	<form method="POST" action="adminpage.php">
		<h3>QUESTION :</h3><input type="text" name="question"><br><br>
		<h3>OPTION 1:</h3><input type="text" name="ans1"><br><br>
		<h3>OPTION 2:</h3><input type="text" name="ans2"><br><br>
		<h3>OPTION 3:</h3><input type="text" name="ans3"><br><br>
		<h3>OPTION 4:</h3><input type="text" name="ans4"><br><br>
		<h3>CORRECT ANSWER:<br><input type="text" name="correct_ans"><br>
		<h1><input type="submit" value="ADD QUSTIONS & ANSWERS HERE" name="submit" ></h1>

	</form>

</body>
</html>
