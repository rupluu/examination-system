<?php
include("conn.php");

$result=mysql_query($conn,"select * from questions");

echo "<center>";
echo "<h2> CHOOSE THE CORRECT ANSWER </H2>";
echo(<BR>);


if(mysqli_num_rows($result)>0)
{
	echo "<table>";
	while ($row=mysqli_fetch_array($result))
	{
		echo"<tr>";
		echo "<td>".$row['id'].")".$row['questions'];
	}
}
