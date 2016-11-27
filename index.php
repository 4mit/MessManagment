<!-- PHP SEARCH STARTS HERE -->       
<?php 
	error_reporting(E_ALL);
	session_start();
	if(isset($_SESSION['username']) && isset($_SESSION['userType']))
	{
		if($_SESSION['userType'] == "student" ){
				
			header("location:user/user.php");
		
		}
		
		if($_SESSION['userType'] == "contractor" ){
			
			header("location:admin/admin.php");
				
		}
	}
	
	
	if(isset($_POST['login'])){
		
		include('function.php');		
		find_user();
	}	 								
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <meta>
    <link href="assets/icons-64/home-2.png" rel="icon">
    <title>NITC MESS</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/external.css" rel="stylesheet">
    <link href="css/animation.css" rel="stylesheet">
    <script src="js/prefixfree.min.js"></script> 
    <script src="js/jquery.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/nicescroll.js"></script>

  
  <script>
	$(document).ready(function(){
		function s() { 
    		$('html').niceScroll();
  		}

  		s();
  		
		$("a[href*='#']:not([href='#'])").click(function(){
			var target = $(this.hash);
			target = target.length ? target : $('[name]=' + this.hash.substr(1) + ']');
			if(target.length)
			{
				$('html,body').animate({
					scrollTop : target.offset().top
				},1000);
			return false; 
			}
		});
	});
	
  </script>
  </head>
  <body>
 
 <div id="load">
	<div id="loading"></div>
</div>
 
 
<header ><img src="assets/NITC.jpg" height="300" class="img " alt="top image" ></header>

<div id="row overlap"><div id="top"></div>
<nav class="main-nav navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">&nbsp;NITC</a>
      
      <div id="circle"></div>
       <div id="rev_circle"></div>
    </div>
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		 <ul class="nav navbar-nav">
			<li><a href="index.html"><span class="glyphicon glyphicon-home">&ensp;</span>Home</a></li>
            <li><a href="index.html#about-nitc"><span class="glyphicon glyphicon-question-sign">&ensp;</span>About NITC</a></li>
            			
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-pencil">&ensp;</span>feedback<span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<li><a href="user.php?feedback"><span class="glyphicon glyphicon-ok-circle">&ensp;</span>Feedback</a></li>
				<li><a href="user.php?suggestion"><span class="glyphicon glyphicon-hand-down">&ensp;</span>Suggestion</a></li>
				<li><a href="user.php?complaint"><span class="glyphicon glyphicon-thumbs-down">&ensp;</span>Complaint</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-thumbs-up">&ensp;</span>Like</a></li>
				
			  </ul>
			</li>				
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-home">&ensp;</span>Mess <span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<li><a href="#">Mess A</a></li>
				<li><a href="#">Mess B</a></li>
				<li><a href="#">Mess C</a></li>
				<li><a href="#">Mess D</a></li>
				<li><a href="#">Mess E</a></li>
			  </ul>
			</li>

			 <li><a href="index.html#login-register"><span class="glyphicon glyphicon-log-in">&ensp;</span>Login</a></li>
				
			
			</li>
            <li><a href="#footer"><span class="glyphicon glyphicon-info-sign">&ensp;</span>About Us</a></li>
            <li><a class="btn btn-info pull-right"><span class="glyphicon glyphicon-info-sign">&ensp;</span><?php
			
					
				$date = new DateTime();
				
				echo 'Date :'. $date->format('d-m-Y');

			
			 ?></a></li>	
		  </ul>
	</div>	
  </div>
</nav>



<div class="main"></div>
<div class="row" style="width:103%;">
	<h3 id="text" align="center"></h3>
</div>


<div class="row">
	<div class="col col-sm-3 col-xl-3">
		<div class="panel panel-danger">
			  <div class="panel-heading"><h4 align="center">Quick Navigation</h4></div>
			  <div class="panel-body"> 
				<ul class="list-group">
				<li class="list-group-item"><span class="glyphicon glyphicon-home">&nbsp;</span><a href="http://nitc.ac.in">Nitc Home page</a></li>
				<li class="list-group-item"><span class="glyphicon glyphicon-lock">&nbsp;</span><a href="http://www.library.nitc.ac.in">Nitc Library</a></li>
				<li class="list-group-item"><span class="glyphicon glyphicon-globe">&nbsp;</span><a href="eduserver.cse.nitc.ac.in">CSE Eduserver</a></li>
				<li class="list-group-item"><span class="glyphicon glyphicon-user">&nbsp;</span><a href="#login-register">Admin Panel</a></li>
				<li class="list-group-item"><span class="glyphicon glyphicon-ok">&nbsp;</span><a href="#login-register" onClick="messegeBill();">Check Bill</a></li>
               	<li class="list-group-item"><span class="glyphicon glyphicon-education">&nbsp;</span><a href="#login-register" onClick="messege();">Student's Profile </a></li>
			   </ul>
			  </div>
			   
		</div>
		<div class="panel panel-danger">
			  <div class="panel-heading"><h4 align="center">Contact</h4></div>
			  <div class="panel-body"> 
				<ul class="list-group">
					<li class="list-group-item"><a href="#cwarder"><span class="glyphicon glyphicon-camera">&nbsp;</span>Contact Cheif Warden</a></li>
					<li class="list-group-item"><a href="index.html#hofficewarder"><span class="glyphicon glyphicon-camera">&nbsp;</span>Hostel Wardern</a></li>
					<li class="list-group-item"><a href="index.html#footer"><span class="glyphicon glyphicon-triangle-bottom">&nbsp;</span>Contact Webmaster</a></li>
					<li class="list-group-item"><a href="#footer"><span class="glyphicon glyphicon-thumbs-up">&nbsp;</span>Contact Site Developer</a></li>
					<li class="list-group-item">list item</li>
				  </ul>
			  
			  </div>
				  
		</div>
		
		<div class="panel panel-danger hidden-xs">
			  <div class="panel-heading"><h4 class="h4">Nitc Notification</h4></div>
			  <div class="panel-body">
				<ul class="list-group">
					<li class="list-group-item"><a href="files/holidays.pdf"><span class="glyphicon glyphicon-saved">&nbsp;</span>Check Holidays</a></li>
					<li class="list-group-item"><a href="files/fee_hostel.pdf"><span class="glyphicon glyphicon-list">&nbsp;</span>NITC hostel Fee Structure 2016</a></li>
					<li class="list-group-item"><a href="files/Timetable_EndSem_Monsoon-2016-17_NovDec2016.pdf"><span class="glyphicon glyphicon-calendar">&nbsp;</span>End Semester Exam Time Table </a></li>
					<li class="list-group-item">Notice Regarding closing of mess</li>
					<li class="list-group-item">list item</li>
				  </ul>

			  </div>
				  
		</div>
		
		<div class="panel panel-danger hidden-xs">
			  <div class="panel-heading"><h4 class="h4">NOTIFICATION</h4></div>
			  <div class="panel-body"><p>JUST A BODY </p> 
				<ul class="list-group">
					<li class="list-group-item">list item</li>
					<li class="list-group-item">list item</li>
					<li class="list-group-item">list item</li>
					<li class="list-group-item">list item</li>
					<li class="list-group-item">list item</li>
				  </ul>
			  
			  
			  </div>
				  
		</div>
		
						
	</div>
	<div class="col col-sm-6 col-xl-8">
		<div class="row"><!-- About NITC -->
        	<div class="col col-sm-12 col-lg-12 col-xl-12 col-md-12">
        		<div id="about-nitc">
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
        </div><!-- Aboutends here -->
		<div class="row">

			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					<li data-target="#carousel-example-generic" data-slide-to="3"></li>
					<li data-target="#carousel-example-generic" data-slide-to="4"></li>
					<li data-target="#carousel-example-generic" data-slide-to="5"></li>
				 </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
					<div class="item active">
					  <img src="assets/paralex1 - Copy.png" alt="assets/paralex1 - Copy.png" class="img img-responsive img-thumbnail">
					  <div class="carousel-caption">Welcome to NITC MESS SYSTEM</div>
					</div>

					<div class="item">
					  <img src="assets/mess_images/2.png" alt="assets/mess_images/3.jpg" class="img img-responsive img-thumbnail">
					  <div class="carousel-caption">Welcome to NITC MESS SYSTEM</div>
					</div>

					<div class="item">
					  <img src="assets/mess_images/3.png" alt="assets/mess_images/4.jpg" class="img img-responsive img-thumbnail">
					  <div class="carousel-caption">Welcome to NITC MESS SYSTEM</div>
					</div>

					
					<div class="item">
					  <img src="assets/mess_images/4.png" alt="assets/paralex1.png" class="img img-responsive img-thumbnail">
					  <div class="carousel-caption">Welcome to our Website </div>
					</div>
					
					<div class="item">
					  <img src="assets/mess_images/5.png" alt="assets/paralex1.png" class="img img-responsive img-thumbnail">
					  <div class="carousel-caption">Welcome to our Website </div>
					</div>
					
					<div class="item">
					  <img src="assets/mess_images/6.png" alt="assets/paralex1.png" class="img img-responsive img-thumbnail">
					  <div class="carousel-caption">Welcome to our Website </div>
					</div>
                    
                    <div class="item">
					  <img src="assets/mess_images/6.png" alt="assets/paralex1.png" class="img img-responsive img-thumbnail">
					  <div class="carousel-caption">Welcome to our Website </div>
					</div>
                </div>

				  
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
			</div><!-- slider ends Here e-->
		</div>
		<br/>
		<div class="row">

			<div class="col col-sm-12 col-lg-12 col-xl-12 col-md-12" >
			<div id="login-register">
				<center><br/>
					<img src="assets/icons-64/lock-24-128.png" class="img img-responsive img-thumbnail">
					<h3>login</h3>
					<form class="form-horizontal" action="index.php" method="post">
						  <div class="form-group">
                                <label for="password" class="col-sm-3 control-label">Login as</label>
                                <div class="col-sm-8">
                                  	<select name="user_type" class="dropdown form-control" id="u_type" onChange="select_type();" >
                                        <option class="form-control">student</option>
                                        <option class="form-control">contractor</option>
									</select>
                                </div>	
                            
						   </div>						 
                         
                          <div class="form-group">
							<label for="username" class="col-sm-3 control-label">user name *</label>
							<div class="col-sm-8">
							  <input type="text" class="form-control" id="username" placeholder="User Name " name="username" required>
							</div>
						  </div>
						  <div class="form-group">
							<label for="password" class="col-sm-3 control-label">Password *</label>
							<div class="col-sm-8">
							  <input type="password" class="form-control" id="password" placeholder="password" name="password" required>
							</div>	
                            
						  </div>
                 			
  							                          
                            
						  <div class="form-group">
							
							<div class="col col-sm-7 pull-right">
                            	<button type="submit" class="btn btn-info " name="login" onclick="return check();">Login</button>
							  	<button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-lg">Forgotten Password</button>
                            </div>								
							  
						</div>
						  
						  <br/>
					</form>
					
                        
                        <!-- PHP SEARCH ENDS HERE -->                                  
				</center>
			 </div>	
			</div>	
		</div>	<!-- form part ends here -->
		<div class="row"><!-- Content Part starts from here -->
			<div class="col col-sm-12 col-lg-12 col-xl-12 col-md-12">
				
                <frameset>
		          	<h2 class="h2" align="center"><abbr title="a general description About Nitc Hodtels">NITC Hostels</abbr></h2>

                    <p class="lead">National Institute of Technology Calicut Hostels</p>
                    
                    <p>
                    There are 11 hostels and few flats for men and two hostels for women. The total capacity of all hostels and flats currently 
                    available is more than 6000. There is a separate  hostel- international hostel for guest 
                
                	</p>
                	
                    <p>
                    accommodation. One more mega hostel for boys is being constructed to avoid the crowd in the rooms.
					</p>	
                    <p>
                    All the hostels have Common room and Recreational centre where newspapers, magazines, TV’s and indoor sports/games facilities are available. Guest room facilities are available in each hostel for the relatives/guests of hostel inmates on chargeable basis.  Free twenty four hour internet and computational facilities are available in almost all hostels; it is getting extended to other hostels too.
                    </p>
                    <p >
                    Twenty four hour water and electricity (with DG power back up) is part of the all the hostels. Mini canteen,milma, amul kiosks, DTP centre, co-operative stores, Text book centre, are functioning in Students Amenity Centre.Two Power laundries are also functioning  in the hostels
                    </p>
                    <p>
                    
                    The ladies hostel has the following facilities like ladies gym, stitching and tailoring centre, hostel library, fitness parlour,   indoor sports centre, DTP centre, Ice cream shop, extension of co-operative store. A night canteen and an amul kiosk also function in Ladies Hostel as well.
                    </p>
					<p id="cwarder">
                    	
		             There are 11 messes serving food with wide varieties of menu, associated with men's hostels out of which, C mess is south Indian vegetarian and B mess is north Indian vegetarian and 4 messes in ladies hostel catering demands of students from all over India. All the students except first year boys are allowed to join any of the messes.   However, dining from any one of the messes within the hostel premises is compulsory for the inmates.Failing which lead to fine (an amount equivalent to 22 days mess charges).  Apart from the main messes, night messes are working which are operating up to midnight enabling students to take tiffin and snacks during their overnight studies.
					</p>
					
                    <p id="hofficewarder">
                    
					To provide calm and favourable environment for the students, the inmates of hostels are strictly instructed to follow the code of conduct of NITC Hostels.

					</p>
                    <h2 class="h2">Contact Hostel Main Office <a href="index.php#top" class="h5 pull-right" style="color:#F51115;">Back to top</a></h2>
					                   
                    <div class="col col-sm-12">
                    
                    	<h3 >Chief Warden</h3>
                    	<p>Dr. Santhosg G Thampi.</p>
                    
                    
                        <p>0495 2286221(O), 9446253066(M),</p>
                        <p>Email:santosh@nitc.ac.in</p>
                    </div>
                    
                    <h3> Hostel Office Warden</h3>
                    
                    <div class="col col-sm-6">
                    
                    	<p>Dr. Manu  R</p>
                    
                    
                        <p>Asst. Prof. EED</p>
                        <p>Manager</p>
                    
                    </div>
                    <div class="col col-sm-6">
                    	
                        <p>Mr. Reejish Kumar M</p>
                    
                    
                        <p>2287238,2286951</p>
                        <p>reejish@nitc.ac.in</p>
                        
                    
                    </div>
                    <div class="col col-sm-4">
                    	                        
                        <h4><u>Hostel peon</u> <br/></h4>
                          
                        <p>Dr. Chandukutty. 2286955(O), 8943536275</p>
                    	
                    
                    </div>
                    
                    <div class="col col-sm-4">
                    	<h4>Dues Section: Ms.Savitha .P .K</h4>
                        
                        <u>Ph: 0495 2286954</u> <br/>
                          
                        <p>Email id: hosteldues@nitc.ac.in</p>
                    	
                    
                    </div>
                    
                    <div class="col col-sm-4">
                    	<h4>Contact for hostel payment</h4>
                        
                        <u>Accounts Section : Ms.Sheeja P</u> <br/>
                          
                        <p>Ph:  0495 2286955</p>
                        
                        <p> Email id: hostelaccounts@nitc.ac.in</p>
                    	
                    
                    </div>
					
                    </frameset>
                
			</div>
		</div><!-- Content Part ends here -->	
	</div>
	
	<div class="col col-sm-3 col-xl-3">
		<div class="mess-list col-md-12 col-lg-12 ">          
            <div class="panel panel panel-danger">
			  <div class="panel-heading"><h4 align="center">Click on Mess Image to visit</h4></div>
			  <div class="panel-body"> 
		        <div class="mess col-xs-6">
                	
                    <div id="mess_name1">
                    <br/>
                    <br/><br/>
                    <br/>
                    <a href="messa.html">mess A</a>
                    </div>
                   
                    <br/>
                
                </div>
                
                
                <div class="mess col-xs-6">
                	
                    <div id="mess_name2">
                    	<a href="messb.html">visit mess B</a>
                    </div>
                    
                </div>
                
                <div class="mess col-xs-6">
                    <div id="mess_name3">
                    	<a href="messc.html">visit mess B</a>
                    </div>
                    
                </div>
                
                <div class="mess col-xs-6">
                    <div id="mess_name4">
                    	<a href="messd.html">visit mess B</a>
                    </div>
                    
                </div>
                
                <div class="mess col-xs-6">
                    <div id="mess_name5">
                    	<a href="messe.html">visit mess B</a>
                    </div>
                    
                </div>
                
                <div class="mess col-xs-6">
                    <div id="mess_name6">
                    	<a href="messf.html">visit mess B</a>
                    </div>
                    
                </div>
                
                
                <div class="mess col-xs-6">
                    <div id="mess_name7">
                    	<a href="messg.html">visit mess B</a>
                    </div>
                    
                </div>
                
                <div class="mess col-xs-6">
                    <div id="mess_name8">
                    	<a href="messh.html">visit mess B</a>
                    </div>
                    
                </div>
                
                <div class="mess col-xs-6">
                    <div id="mess_name8">
                    	<a href="messi.html">visit mess B</a>
                    </div>
                    
                </div>              
              
              
              </div> 
			</div>   
            
		</div>	
	</div> <!-- Mess List Ends Here -->
</div> <!-- left right ans right panel ends here -->
</div> <!-- overlap class ends here -->  
	
 
<div class="row">
<div id="about" style="background-color:#EF15AA; color:#000000;">
<div class="footer" id="footer"><a href="index.html#top" ><br/><h5 align="center" style="color:#F1E8E8;">BACK TO TOP</h5> </a></div>
		<div class="foot" id="social">
            <a href="#"><img src="assets/fb.png"  class="img-circle img-thumbnail"></a>
            <a href="#"><img src="assets/gp.png" class="img-circle img-thumbnail"></a>
            <a href="#"><img src="assets/sk.png" class="img-circle img-thumbnail"></a>
            <a href="#"><img src="assets/tt.png" class="img-circle img-thumbnail"></a>
            <a href="#"><img src="assets/wt.png" class="img-circle img-thumbnail"></a>
	   </div>
</div>
</div><!-- footer pf the page ends here -->


<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
     <div class="modal-content">
       <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Fogotten  Password </h4>
       </div>
       <div class="modal-body">
		<form class="form-horizontal" action="forgot.php" method="post">
			<div class="form-group">
                <label for="password" class="col-sm-3 control-label">Choose Type </label>
                <div class="col-sm-8">
                <select name="user_type" class="dropdown form-control" id="fu_type" onChange="select_forgot_type();" >
                     <option class="form-control">student</option>
                     <option class="form-control">contractor</option>
                <select>
                </div>	
            </div>						 
                         
              <div class="form-group">
                  <label for="username" class="col-sm-3 control-label">user name *</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="fusername" placeholder="SID or CID" name="username" required>
                  </div>
			  </div>
              <div class="form-group">
				<div class="col col-sm-7 pull-right">
                 	<button type="submit"  name="i_forgotten" class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-lg">Forgotten Password</button>
                 </div>								
							  
			   </div>
						  
			<br/>
		  </form>    
       </div><!-- /.modal-body --> 
     </div><!-- /.modal-content -->
  </div>
</div>

<script type="text/javascript">

</script>
	<script src="js/validate.js"></script>
    <script src="js/sticky-index.js"></script>
	<script src="js/bootstrap.js"></script>
  </body>
</html>