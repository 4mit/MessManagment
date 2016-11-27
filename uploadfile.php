<?php
$conn = new MySQLi("localhost","root","amit","nts");

if($conn){echo "Connected ";}
if(isset($_POST['submit']))
{
	if(isset($_FILES['photo']))
	{
		$name = $_FILES['photo']['name'];
		$temp = $_FILES['photo']['tmp_name'];
		$type = $_FILES['photo']['type'];
		$size = $_FILES['photo']['size'];
		$err = $_FILES['photo']['error'];

	    if(!$temp){
			die("Cant Upload file ");	
		}
		
		else if($err){
			echo "error section ";
		
		}
		else{
			move_uploaded_file($temp,"user/pictures/$name");		
			$ins =  "INSERT INTO `upload` (`pic`) VALUES ('$name')";
			
			if($conn ->query($ins)){
				echo $size;
				echo "Query Ok ";	
			
			}else{
			
				echo "Query Not ok ";
				
			}	
				
		}
	}	

}

$disp = "select * from upload";

$r = $conn->query($disp);
while($rr = $r->fetch_assoc()){
	
	
	echo '<img src="user/pictures/' . $rr['pic'] . '"/>';
	
}
?>
<form action="uploadfile.php" method="post" enctype="multipart/form-data">
Your Photo: <input type="file" name="photo" size="25" />
<input type="submit" name="submit" value="Submit" />
</form>
