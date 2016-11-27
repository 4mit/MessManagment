<?php
	
	function user_feed(){
	include('connection.php');
	echo '<div class="container">
		  <h2 align="center">Feedback  form</h2>
		  <form class="form-horizontal" role="form">
			<div class="form-group">
			  <label class="control-label col-sm-2" for="email">Email:</label>
			  <div class="col-sm-8">
				<input type="email" class="form-control" id="email" placeholder="Enter email">
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="pwd">Password:</label>
			  <div class="col-sm-8">          
				<input type="password" class="form-control" id="pwd" placeholder="Enter password">
			  </div>
			</div>
			<div class="form-group">        
			  <div class="col-sm-offset-2 col-sm-8">
				<div class="checkbox">
				  <label><input type="checkbox"> Remember me</label>
				</div>
			  </div>
			</div>
			<div class="form-group">        
			  <div class="col-sm-offset-2 col-sm-8">
				<button type="submit" class="btn btn-default">Submit</button>
			  </div>
			</div>
		  </form>';
	}
function change_pass(){
	include('connection.php');
	$a=$_SESSION['username'] ;
	$b=$_POST['newPassword'];
	$c = $_POST['cnfPassword'];
	$d =$_POST['oldPassword'];
	
	if($b == $c)
	{
		 
		$search_password =  "SELECT password FROM ` student` where `sid`= '$a'";
		
		$result = $conn->query($search_password);
		
		if($result)
		{
				$sqlUpdate = "UPDATE ` student` SET `password` = '$b' WHERE ` student`.`sid` = '$a' and ` student`.`password` = '$d'";
				//$sql = "UPDATE ` student` SET  `password` = '$b' WHERE `sid` = '$a' and password ='$c'";	
				
				$resultTwo = $conn->query($sqlUpdate);
				if($resultTwo)
				{
					 
					
					echo '<div class="alert alert-info alert-dismissible" role="alert">
  							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  							<span aria-hidden="true">&times;</span>
  							</button>
  							<h5 align="center"><strong>Congrates ! You\'ve Just Changed Your Password ..!</strong></h5>
							</div>';	
				}
				else{	
					
					echo '<div class="alert alert-danger alert-dismissible" role="alert">
  							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  							<span aria-hidden="true">&times;</span>
  							</button>
  							<h5 align="center"><strong>Password Missmatched ..!</strong></h5>
							</div>';
				}
			
		}
		
	
	}else{
		
		echo '<div class="alert alert-danger alert-dismissible" role="alert">
  							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  							<span aria-hidden="true">&times;</span>
  							</button>
  							<h5 align="center"><strong>Password Missmatched ..!</strong></h5>
							</div>';
		
	}
	
	if(!$conn){
			echo '<script> window.alert("cant connect   ..!");</script>';	
		
	}
	
}




  ?>
