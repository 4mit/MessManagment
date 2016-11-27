      
<?php 
include('connection.php');
	error_reporting(E_ALL);
	session_start();
	if(isset($_SESSION['username']) && isset($_SESSION['userType']))
	{
			
	}else{
		header('location:../index.php');
		
	}
	 								
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <meta>
    <link href="../assets/icons-64/home-2.png" rel="icon">
    <title>NITC MESS</title>
	<link href="../css/bootstrap.css" rel="stylesheet">
	<link href="../css/external.css" rel="stylesheet">
    <script src="../js/prefixfree.min.js"></script> 
    <script src="../js/jquery.js"></script>
	<script src="../js/jquery-ui.js"></script>


   </head>
  <body>
<div id="row  overlap" style="margin-top:-190px;"><div id="top"></div>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Welcome  - <?php echo $_SESSION['username']; ?></a>
    </div>
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		 <ul class="nav navbar-nav">
            <li><a href="user.php#about-nitc"><span class="glyphicon glyphicon-question-sign">&ensp;</span>About NITC</a></li>
            			
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-pencil">&ensp;</span>feedback<span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<li><a href="user.php?feedback"><span class="glyphicon glyphicon-ok-circle">&ensp;</span>Feedback</a></li>
				<li><a href="user.php?suggestion"><span class="glyphicon glyphicon-hand-down">&ensp;</span>Suggestion</a></li>
				<li><a href="user.php?complaint"><span class="glyphicon glyphicon-thumbs-down">&ensp;</span>Complaint</a></li>
				<li><a href="#about"><span class="glyphicon glyphicon-thumbs-up">&ensp;</span>Like Developers page</a></li>
				
			  </ul>
			</li>				
			<li class="active"><a href="logout.php" ><span class="glyphicon glyphicon-log-in">&ensp;</span>Sign Out</a></li>
            <li><a href="#footer"><span class="glyphicon glyphicon-info-sign">&ensp;</span>About Us</a></li>	
		  </ul>
	</div>	
  </div>
</nav>

<div class="container-fluid" style="padding-left:-16px;margin-left:-16px;">
	<div class="col col-sm-3">
		<div class="panel panel-primary">
			  <div class="panel-heading"><h4 align="center">Quick Navigation</h4></div>
			  <div class="panel-body"> 
				
				<ul class="list-group">
				<li class="list-group-item">
					<p class="h5">Time is :
						<span id="show_h"></span>:
						<span id="show_m"> </span>:
						<span id="show_s"></span>
					</p>
				</li>
				<li class="list-group-item"><a href="http://nitc.ac.in"><span class="glyphicon glyphicon-home">&nbsp;</span>Nitc Home page</a></li>
				<li class="list-group-item"><a href=""><span class="glyphicon glyphicon-lock">&nbsp;</span>Nitc Library</a></li>
				<li class="list-group-item"><a href=""><span class="glyphicon glyphicon-globe">&nbsp;</span>Eduserver</a></li>
			
               
			   </ul>
			  </div>
			   
		</div>
		<div class="panel panel-primary">
			  <div class="panel-heading"><h4 align="center">User-panel </h4></div>
			  <div class="panel-body"> 
				<ul class="list-group">
					<li class="list-group-item"><a href="user.php?change-pass"><span class="glyphicon glyphicon-pencil">&ensp;</span>Change Password</a></li>
					<li class="list-group-item"><a href="user.php?update-pic"><span class="glyphicon glyphicon-user">&ensp;</span>Update Profile Picture </a></li>
					<li class="list-group-item"><a href="user.php?show"><span class="glyphicon glyphicon-education">&nbsp;</span>My Profile </a></li>
					<li class="list-group-item"><a href="user.php?show-bill"><span class="glyphicon glyphicon-th-list">&ensp;</span>Show bill</a></li>
					<li class="list-group-item"><a href="#"><span class="glyphicon glyphicon-ok">&nbsp;</span>Check Payment Status</a></li>
					<li class="list-group-item"><a href="user.php?set_pref"><span class="glyphicon glyphicon-log-in">&ensp;</span>Set Mess Preference</a></li>
					<li class="list-group-item"><a href="logout.php"><span class="glyphicon glyphicon-log-in">&ensp;</span>logout</a></li>
				  	
				  </ul>
			  
			  </div>
				  
		</div>
		
		<div class="panel panel-danger">
			 <div class="panel-heading"><h4 align="center">Important notice</h4></div>
			  <div class="panel-body">
				<ul class="list-group">
					<li class="list-group-item"><a href="files/holidays.pdf">Check Holidays</a></li>
					<li class="list-group-item"><a href="files/fee_hostel.pdf">NITC hostel Fee Structure 2016</a></li>
					<li class="list-group-item">list item</li>
					<li class="list-group-item">Plist item</li>
					<li class="list-group-item">list item</li>
				  </ul>

			  </div>
				  
		</div>	
						
	</div>
	<div class="col col-sm-9" style="border:1px solid brown;">
		<div class="row"><!-- About NITC -->
        	<div class="col col-sm-12 col-lg-12 col-xl-12 col-md-12">
        		<div id="about-nitc">
				<br/>
        		  <div class="alert alert-info alert-dismissible" role="alert">
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  					    <span aria-hidden="true">&times;</span>
  					</button>
  					<?php echo '<strong>Welcome  -' . $_SESSION['username'] . ' </strong>'; ?> You have logged in Sucessfully .. ! 
				  </div> 
					       		
                <h3 align="center">About National Institute Of Technology Calicut</h3>
        			<p>Set in align lefta picturesque landscape at the foothills of the Western Ghats,
                     National Institute of Technology Calicut (NITC) is located about 22 kilometers north-east of
                      Calicut City. National Institute of Technology Calicut is a Technical Institution of national
                      importance set up by an Act of parliament(Act 29 of 2007) namely,
                       the National Institute of technology Act 2007, which received the assent of the President of 
                       India on 5th June,2007. The provision of the Act have come into force with effect from 15th
                        August,2007 as per Notification S.O.1384(E) dated 9th August, 2007 of the MHRD(Dept. of Higher
                         Education),
                    New Delhi. As per the provision of the said Act, this Institution runs on non profitable basis.        
                   </p>
                <br/>
                
                </div>  
        	</div>
            </div>
       

		<div class="row"><div class="col col-sm-12">
		<?php
		if(isset($_POST['save_pref']))
		{
			$a=$_SESSION['username'];
			$b=$_POST['mess_name'];
			$update ="UPDATE ` student` SET `messname`='$b' WHERE `sid` ='$a'";
			
			
			$run=$conn->query($update);
			if($run)
			{
				echo '<script>alert("messname updated");</script>'; 
			}
			else
			{
				echo '<script>alert("messname  not updated");</script>';
			}
			
		}
		
			if(isset($_GET['change-pass'])){

				 echo '<div class="alert alert-info alert-dismissible" role="alert">
  								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  									<span aria-hidden="true">&times;</span>
  								</button>
  								<h5 align="center"><strong>Choose Your Password as strong as possible change password</strong></h5>
							</div>';

				echo '<form class="form-horizontal" action="user.php" method="POST">
						
						<div class="form-group">
							<label for="password" class="col-sm-3 control-label">Enter old Password *</label>
							<div class="col-sm-8">
							  <input type="password" class="form-control" id="oldPassword" placeholder="old Password" name="oldPassword" required>
							</div>       
						</div>

						<div class="form-group">
							<label for="password" class="col-sm-3 control-label">Enter New Password Password *</label>
							<div class="col-sm-8">
							  <input type="password" class="form-control" id="newPassword" placeholder="new Password" name="newPassword" required>
							</div>       
						</div>
                        
						<div class="form-group">
							<label for="password" class="col-sm-3 control-label">Confirm new password *</label>
							<div class="col-sm-8">
							  <input type="password" class="form-control" id="cnfnewPassword" placeholder="Re enter new Password" name="cnfPassword" required>
							</div>       
						</div>			  	
						<h5 align="center">You can use any of the chrarcter in your password : a-zA-Z0-9#@$!%^* </h5>
						  
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
							  <button type="submit" class="btn btn-danger" name="change-pass" onclick="return check_new_pass();">Change Password</button>
							</div>
						</div>
						  <br/>
					</form>';			
			}
			
			
			/* update info   */ 
			
			
			/* update info ends here   */
				if(isset($_GET['complaint'])){

				echo '<div class="alert alert-warning alert-dismissible" role="alert">
  								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  									<span aria-hidden="true">&times;</span>
  								</button>
  								<h5 align="center"><em>Complaint !</em><strong>Post your Complaint here </strong></h5>
							</div>';

				echo '<form class="form-horizontal" action="user.php" method="post">
						
						<div class="form-group">
							<label for="password" class="col-sm-3 control-label">Post Your Complaint *</label>
							<div class="col-sm-8">
							  <textarea class="form-control" id="complaint"  name="complaint" required row=10 cols = 20></textarea>
							</div>       
						</div>					
			
						  
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
							  <button type="submit" class="btn btn-danger" name="complaint" onclick="return check_new_pass();">Complaint</button>
							</div>
						</div>
						  <br/>
					</form>';			
			}

			/* Complaint   */ 
			if(isset($_GET['feedback'])){
				require('feedback.php');
				user_feed();
				
			}
			
			
			/* complaints  ends here   */ 
			/* show user detail */
			if(isset($_GET['show']))
			{
				require('user_profile.php');
				user_profilei();
			
			}
			if(isset($_POST['change-pass']))
			{
				require('user_function.php');
				change_pass();
			
			}
			if(isset($_GET['set_pref']))
			{
				
				echo  '<div class="container">
							<h2 align="center">Setting Up Mess Preferences</h2>
							  <form class="form-horizontal" role="form" method="POST">
								<div class="form-group">
								  <label class="control-label col-sm-2" for="mess">Choose Mess name </label>
								  <div class="col-sm-8">
									 <select name="mess_name" class="form-control">
									 <option>mess-A</option>
									 <option>mess-B</option>
									 <option>mess-C</option>
									 <option>mess-D</option>
									 <option>mess-E</option>
									 <option>mess-F</option>
									 <option>mess-G</option>
									 <option>mess-H</option>
									 <option>mess-I</option>
									 <option>mess-MBA</option>
									  
									 </select>	  
								  </div>
								</div>
																
								<div class="form-group">        
								  <div class="col-sm-offset-2 col-sm-8">
									<button type="user_pref" class="btn btn-default" name="save_pref" >Save Preference</button>
								  </div>
								</div>
							  </form>';
			}
			/**/
		?>		
		</div>
		</div>	
	</div> <!-- left right ans right panel ends here -->
</div> <!-- overlap class ends here -->  
</div>	
<div class="row">
<div id="about" style="background-color:#EF15AA; color:#000000;">
<div class="footer" id="footer"><a href="#top" ><br/><h5 align="center">BACK TO TOP</h5> </a></div>
		<div class="foot" id="social">
            <a href="#"><img src="../assets/fb.png"  class="img-circle img-thumbnail"></a>
            <a href="#"><img src="../assets/gp.png" class="img-circle img-thumbnail"></a>
            <a href="#"><img src="../assets/sk.png" class="img-circle img-thumbnail"></a>
            <a href="#"><img src="../assets/tt.png" class="img-circle img-thumbnail"></a>
            <a href="#"><img src="../assets/wt.png" class="img-circle img-thumbnail"></a>
	   </div>
</div>
</div><!-- footer pf the page ends here -->

<script>
	
function show_time(){
	var nt =new Date();
	document.getElementById('show_h').innerHTML =nt.getHours();
	document.getElementById('show_m').innerHTML =nt.getMinutes();
	document.getElementById('show_s').innerHTML =nt.getSeconds();

}
setInterval(show_time,1000);

</script>

	<script src=" check_new_pass.js"></script>
    <script src="../js/sticky-index.js"></script>
	<script src="../js/bootstrap.js"></script>
  </body>
</html>
