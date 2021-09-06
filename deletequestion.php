<?php
include ('conn.php');

$id=$_GET['id'];


     $qry = "delete FROM question WHERE id='$id'";
      $run = mysqli_query($conn, $qry);

      IF ($run==true)
       {
       	session_start();
		$_SESSION['success'] = " deleted successfully";

       	header ('location:viewquestion.php');
       }
else
{
	session_start();
		$_SESSION['error'] = " error deleting";

	       	header ('location:viewquestion.php');

}

       ?>