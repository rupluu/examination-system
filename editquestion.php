<?php
include 'conn.php';
if(isset($_POST['submit']))

{
	$id=$_POST['id'];
    $ques=$_POST['question'];
    $ans1=$_POST['ans1'];
    $ans2=$_POST['ans2'];
    $ans3=$_POST['ans3'];
    $ans4=$_POST['ans4'];
    $correct_ans=$_POST['correct_ans'];
    $qry = "UPDATE question set question='$ques', ans1='$ans1', ans2='$ans2', ans3='$ans3', ans4='$ans4',correct_ans='$correct_ans' WHERE id='$id' ";


    
 $res = mysqli_query($conn, $qry);
    if ($res!=TRUE) {
	die("insertion failed ".mysqli_error($conn));
}
else{
	echo " Data updated";
	 header ("location:viewquestion.php");
}
// mysqli_close($conn);
    // if ($run == 1) {
    //      echo 'saved_successfully';
       
    // }else{
    //     echo "Error in updating student info";
    
}
$id=$_GET['id'];
$data= array();

     $qry = "SELECT * FROM question WHERE id='$id'";
      $run = mysqli_query($conn, $qry);
           

           while($row = mysqli_fetch_assoc($run)){
                   $data[]=$row;

}
// if ($id=='')
// {
// header ("location:viewquestion.php");
// }
// else 

// 	$data= array();

//      $qry = "SELECT * FROM question WHERE id='$id'";
//       $run = mysqli_query($conn, $qry);
//            while($row = mysqli_fetch_assoc($run)){
//                    $data[]=$row;

// }



?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		 body{background-image: url('IMAGE/5.jpg');
background-size: cover;
  background-position: center;}






	</style>
	<title></title>
</head>

<body>
	<form method="POST" action="editquestion.php">
		<?php
		foreach ($data as $key => $value) {?>
			<input type="hidden" name="id" value="<?php echo $value['id']; ?>">
		<h3>QUESTION :</h3><input type="text" name="question" value="<?php echo $value['question']; ?>"><br><br>
		<h3>OPTION 1:</h3><input type="text" name="ans1" value="<?php echo $value['ans1']; ?>"><br><br>
		<h3>OPTION 2:</h3><input type="text" name="ans2" value="<?php echo $value['ans2']; ?>"><br><br>
		<h3>OPTION 3:</h3><input type="text" name="ans3" value="<?php echo $value['ans3']; ?>"><br><br>
		<h3>OPTION 4:</h3><input type="text" name="ans4" value="<?php echo $value['ans4']; ?>"><br><br>
		<h3>CORRECT ANSWER:</h3><input type="text" name="correct_ans" value="<?php echo $value['correct_ans']; ?>"><br><br>	
		<?php } ?>

		
		<h3><input type="submit" value="EDIT QUSTION & ANSWER" name="submit" ></h3>

	</form>

</body>
</html>


