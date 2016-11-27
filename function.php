<?php

function find_user(){
if(isset($_POST['login']))
	{
			
				include('connection.php');	//connects to server 	
		if($conn)
		{
			/*echo '<script>alert ("php is working .. !");</script>';*/
			$a  =$_POST['username'];
			$b  =$_POST['password']; 
			$c  =$_POST['user_type'];
			if($c == "student")
			{
				$student_search ="select * from ` student` where sid = '$a' and password = '$b'";
				$student_search_result = $conn->query($student_search);
				if($student_search_result ->num_rows >0)
				{
					echo '<script> window.alert("you logged in  Click Ok to Proceed ..!");</script>';
					session_start();
					$_SESSION['username'] = $a;
					$_SESSION['userType'] = $c;
					header("location:user/user.php");
					
					$conn->close();
				}else{
				
					echo '<script> window.alert("Cant find Student  ..!");</script>';	
				}
			}else if($c == "contractor"){
								
				echo '<script> window.alert("contractor selected ..!");</script>';
								
				}else{
										
					echo '<script> window.alert("something else  ..!");</script>';
										
				}
			}else{
				echo '<script> window.alert("Internal Server Error ..!");</script>';									
			}
	}
}

?>
