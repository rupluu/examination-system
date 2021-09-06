<?php
include ('conn.php');

$id=$_GET['id'];
$date=$_GET['dates'];

     $qry = "delete FROM score WHERE name='$id'and date='$date'";
   
      $run = mysqli_query($conn, $qry);

      IF ($run==true)
       {
       	session_start();
		$_SESSION['success'] = " deleted successfully";

       	header ('location:result.php');
       }
else
{
	session_start();
		$_SESSION['error'] = " error deleting";

	       	header ('location:viewquestion.php');

}

       ?>