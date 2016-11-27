
<html>
<head>
<link href="../css/bootstrap.css" rel="stylesheet">
	<link href="../css/external.css" rel="stylesheet">
    <script src="../js/prefixfree.min.js"></script> 
    <script src="../js/jquery.js"></script>
	<script src="../js/jquery-ui.js"></script>
</head>

<?php
include('connection.php');

$rtr =$_SESSION['username'];

function user_profilei()
{
	include('connection.php');
	$rtr=$_SESSION['username'];
	
	$sql = "SELECT * FROM ` student` WHERE sid='$rtr'";
			$run=$conn->query($sql);
			
			echo '<div class="col col-sm-12 pull-right"><h2 align="center">Student Profile</h2><table class="table">';
			echo"<tr><th>SID </th><th>SNAME</th><th>BRANCH</th><th>SEM</th><th>DOB</th></tr>";
				while($row=$run->fetch_assoc())
				{
					
				echo "<tr>";
				echo "<td>".$row['sid']."</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['branch']."</td>";
				echo "<td>".$row['sem']."</td>";
				echo "<td>".$row['dob']."</td>";
				
				echo "</tr>";
				
			
				}
			echo"</table></div>";	
}   
?>


