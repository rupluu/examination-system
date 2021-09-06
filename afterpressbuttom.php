<?php

include "conn.php";
 session_start();
    // if(isset($_POST['SUBMIT']))
    // {
    //     print_r($_POST);
    // }
 //    else
 //    {
       
 //        $id = $_SESSION['id'];
 //        include_once 'conn.php';
 //    }
$tdate=date('Y-m-d');
$username=$_SESSION['username'];

$testdone=mysqli_query($conn,"SELECT * FROM score WHERE date='$tdate'and name='$username'");

if(mysqli_num_rows($testdone)>1){
    $testdone=mysqli_query($conn,"select sum(iscorrect) as TOTALMARKS from score WHERE date='$tdate'and name='$username' group by date,name ");
$row=mysqli_fetch_array($testdone);
    echo "<h2>SORRY,<BR>YOU CANNOT ATTEND THE EXAM.YOU HAVE ALREADY GIVEN THE EXAM.</h2><br> <b><h1>YOUR MARKS IN THE PREVIOUS EXAM WAS</h1> = ".$row['TOTALMARKS'];
   }
   else
   {





    $ques=mysqli_query($conn,"SELECT * FROM question ");
                        echo '<div class="panel" style="margin:5%">';
                        $sn=1;
                        while($row=mysqli_fetch_array($ques) )

                        {
                            
                            $question=$row['question'];
                            $id=$row['id'];
                            $ans1=$row['ans1'];
                            $ans2=$row['ans2'];                           
                            $ans3=$row['ans3'];
                            $ans4=$row['ans4'];
                                                  
                             echo '<form action="score.php" method="POST"  class="form-horizontal">
                        <br />';
                            echo '<b>Question &nbsp;'.$sn.'&nbsp;::<br /><br />'.$question.'</b><br /><br />';
                            
                        
                        echo'<input type="radio" name="'.$id.'" value="'.$ans1.'">&nbsp;'.$ans1.'<br /><br />';
                        echo'<input type="radio" name="'.$id.'" value="'.$ans2.'">&nbsp;'.$ans2.'<br /><br />';
                        echo'<input type="radio" name="'.$id.'" value="'.$ans3.'">&nbsp;'.$ans3.'<br /><br />';
                        echo'<input type="radio" name="'.$id.'" value="'.$ans4.'">&nbsp;'.$ans4.'<br /><br />';
                         $sn++;
                        }
                        echo '<input type="submit" value="SUBMIT ANSWER" name="submit">';
                    }
                ?>
                <!DOCTYPE html>
                <html>
                <head>
                    <title></title>
                </head>
                <style type="text/css">
    body{background-image: url('IMAGE/a.jpg');
background-size: cover;
  background-position: center;}
</style>
                <body>
                
                </body>
                </html>