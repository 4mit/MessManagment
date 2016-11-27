<!DOCTYPE html>
<html >
  <head><style>
  #bor{
	  border-color:blue;
	  
  }</style>
    <meta charset="UTF-8">
    <meta>
    <link href="assets/icons-64/home-2.png" rel="icon">
    <title>NITC MESS</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/external.css" rel="stylesheet">
    <script src="js/prefixfree.min.js"></script> 
    <script src="js/jquery.js"></script>
	<script src="js/jquery-ui.js"></script>	
  
  <script>
	$(document).ready(function(){
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
  <style>
 
  </style>
  </head>
  <body>
  <div id="loading"></div>
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
      <a class="navbar-brand" href="#">NITC</a>
    </div>
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		 <ul class="nav navbar-nav">
			<li><a href="index.php"><span class="glyphicon glyphicon-home">&ensp;</span>Home</a></li>
            <li><a href="index.html#about-nitc"><span class="glyphicon glyphicon-question-sign">&ensp;</span>About NITC</a></li>
            			
						
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-home">&ensp;</span>Mess <span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<li><a href="messa.php">Mess B</a></li>
				<li><a href="messb.php">Mess C</a></li>
				<li><a href="messc.php">Mess D</a></li>
				<li><a href="messd.php">Mess A</a></li>
			  </ul>
			</li>

			<li class="dropdown">
			  <a href="index.php"><span class="glyphicon glyphicon-log-in">&ensp;</span>Log In<span class="caret"></span></a>

			</li>
            <li><a href="#footer"><span class="glyphicon glyphicon-info-sign">&ensp;</span>About Us</a></li>	
		  </ul>
	</div>	
  </div>
</nav>




<div class="main"></div>
<div class="row" style="width:103%;">
	<h3 id="text" align="center"></h3>
</div>

<div class="row">
	<div class="col col-sm-3">
		<div class="panel panel panel-primary">
			  <div class="panel-heading"><h4 align="center">Quick Navigation</h4></div>
			  <div class="panel-body"> 
				<ul class="list-group">
				<li class="list-group-item"><span class="glyphicon glyphicon-home">&nbsp;</span><a href="http://nitc.ac.in">Nitc Home page</a></li>
				<li class="list-group-item"><span class="glyphicon glyphicon-lock">&nbsp;</span><a href="">Nitc Library</a></li>
				<li class="list-group-item"><span class="glyphicon glyphicon-globe">&nbsp;</span><a href="">Eduserver</a></li>
				<li class="list-group-item"><span class="glyphicon glyphicon-user">&nbsp;</span><a href="#">Admin Panel</a></li>
				<li class="list-group-item"><span class="glyphicon glyphicon-ok">&nbsp;</span><a href="#">Check Payment Status</a></li>
               	<li class="list-group-item"><span class="glyphicon glyphicon-education">&nbsp;</span><a href="#">Student's Profile </a></li>
			   </ul>
			  </div>
			   
		</div>
		<div class="panel panel-success">
			  <div class="panel-heading"><h4 align="center">Contact</h4></div>
			  <div class="panel-body"> 
				<ul class="list-group">

					<li class="list-group-item"><a href="messe.php#hofficewarder">Hostel Office Wardern</a></li>
					<li class="list-group-item"><a href="messe.php#con">mess Contactor  </a></li>
					<li class="list-group-item"><a href="messe.php#time">Time table</a></li>
					<li class="list-group-item"><a href="messe.php#menu">Menu-List</a></li>
				  </ul>
			  
			  </div>
				  
		</div>
		
		<div class="panel panel-info">
			  <div class="panel-heading">NOTIFICATION</div>
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
	<div class="col col-sm-6">
		<div class="row"><!-- About NITC -->
        	<div class="col col-sm-12 col-lg-12 col-xl-12 col-md-12">
        		<div id="about-nitc">
                <h3 align="center">Welcome to E mess</h3>
        		
                <br/>
                
                </div>
        
        	</div>
        </div><!-- Aboutends here -->
		<div class="row">

		</div>
		<br/>
		<div class="row">

			<div class="col col-sm-12 col-lg-12 col-xl-12 col-md-12" >
			
			</div>	
		</div>	<!-- form part ends here -->
		<div class="row"><!-- Content Part starts from here -->
			<div class="col col-sm-12 col-lg-12 col-xl-12 col-md-12">
				
                <section>
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
					 </section>
					<br/>
					
					<div id="hofficewarder">
                    <h2>Contact Hostel  E Warden Office</h2>
					
                   
                    <div class="col col-sm-6">
                    
                    	<h3 > Warden</h3>
                    	<p> Dr. K Krishnamurthy . CED</p>
                                        
                        <p>0495 2286711(O), 9446063327</p>
                        <p>Email: rama@nitc.ac.in</p>
                    </div>
					 <div class="col col-sm-6">
                    
                    	<h3 > Warden</h3>
                    	<p> Dr. K Krishnamurthy . CED</p>
                                        
                        <p>0495 2286711(O), 9446063327</p>
                        <p>Email: rama@nitc.ac.in</p>
                    </div>
					
                  </div> 

                   <br/>
                  <div id="con">				   
                    <h3>  E Hostel contractor </h3>
                    
                    
                    <div class="col col-sm-6">
                    
                    	<p>mr.kamal sharma</p>
                    
                         <p></p>
                        <p>9763456889</p>
                        
                     <p> Email:satn@nitc.ac.in</p>
                    </div>
                    
					
					</div>
                   
                <div id="time">
					<br/>
					<br/>
					<br/>
					<br/>
					<h3>  E mess time table </h3>
							
					<table border class="table table-hover">
					   <tr><th> 7:00-9:30</th><th> 11:45-2:00</th><th> 4:00-5:30</th><th> 7:00-9:00</th></tr>
					   <tr><td>Breakfast</td><td>Lunch</td><td>Tea</td><td>Dinar</td></tr>
				   </table>
				   
            </div>
			
			
			   <div id="menu">
					<br/>
				
	
					<h3>  E Mess Menu-List </h3>
									
					<<table border class="table table-hover">
					     <tr><th>Day</th><th>Breakfast</th><th>Lunch</th><th>Tea</th><th>Dinar</th></tr>
						<tr><th>Sunday</th><td>puri,sabji,bread,jaim</td><td>Biriyani,paneer</td><td>Tea,coefie,cake</td><td>chpati,sabji,chiken,rice</td></tr>
						<tr><th>Monday</th><td>bread,jaim,amlet</td><td>rice,chpati,daal,chiken egg</td><td>Tea,coefie,cake</td><td>chpati,sabji,chiken,rice</td></tr>
						<tr><th>Tuesday</th><td>puri,sabji</td><td>rice,daal,sabji,amlet</td><td>Tea,coefie,cake</td><td>chpati,sabji,chiken,rice</td></tr>
						<tr><th>Wednesday</th><td>puri,sabji</td><td>rice,daal,sabji,amlet</td><td>Tea,coefie,cake</td><td>chpati,sabji,chiken,rice</td></tr>
						<tr><th>thursday</th><td>puri,sabji</td><td>rice,daal,sabji,amlet</td><td>Tea,coefie,cake</td><td>chpati,sabji,chiken,rice</td></tr>
						<tr><th>Friday</th><td>puri,sabji</td><td>Biriyani,paneer</td><td>Tea,coefie,cake</td><td>chpati,sabji,chiken,rice</td></tr>
						<tr><th>Saturday</th><td>allu,pratha</td><td>rice,daal,sabji,amlet</td><td>Tea,coefie,cake</td><td>chpati,sabji,egg,rice</td></tr>
				   </table>
            </div>
			</div>
			
		</div><!-- Content Part ends here -->	
	</div>
	
	<div class="col col-sm-3">
		<div class="mess-list col-md-12 col-lg-12 ">          
            <div class="panel panel panel-primary">
			  <div class="panel-heading"><h4 align="center">Click on Mess Image to visit</h4></div>
			  <div class="panel-body"> 
		        <div class="mess col-xs-6"> 
                	
                    <p id="mess_name1"><a href="messa.php">visit mess A</a></p>
                    <img src="assets/mess_images/a-mess.jpg"  id="mess_img" alt="paralex image ">
                    <br/>
                
                </div>
                
                
                <div class="mess col-xs-6">
                    <p id="mess_name1"><a href="messb.php">visit mess B</a></p>
                    <img src="assets/mess_images/b-mess.jpg"  id="mess_img">
                </div>
                
                <div class="mess col-xs-6">
                    <p id="mess_name1"><a href="messc.php">visit mess C</a></p>
                    <img src="assets/mess_images/c-mess.jpg"  id="mess_img">
                </div>
                
                <div class="mess col-xs-6">
                    <p id="mess_name1"><a href="messd.php"> visit mess D</a></p>
                    <img src="assets/mess_images/d-mess.jpg"  id="mess_img">
                </div>
                
                <div class="mess col-xs-6">
                    <p id="mess_name1"><a href="messe.php">visit mess E</a></p>
                    <img src="assets/mess_images/e-mess.jpg"  id="mess_img">
                </div>
               
                <div class="mess col-xs-6">
                    <p id="mess_name1"><a href="messf.php">visit mess F</a></p>
                    <img src="assets/mess_images/f-mess.jpg"  id="mess_img">
                </div>
              
              
              </div> 
			</div>   
            
		</div>	
	</div> <!-- Mess List Ends Here -->
</div> <!-- left right ans right panel ends here -->
</div> <!-- overlap class ends here -->  
	
 
<div class="row">
<div id="about" style="background-color:#EF15AA; color:#000000;">
<div class="footer" id="footer"><a href="index.html#top" ><br/><h5 align="center">BACK TO TOP</h5> </a></div>
		<div class="foot" id="social">
            <a href="#"><img src="assets/fb.png"  class="img-circle img-thumbnail"></a>
            <a href="#"><img src="assets/gp.png" class="img-circle img-thumbnail"></a>
            <a href="#"><img src="assets/sk.png" class="img-circle img-thumbnail"></a>
            <a href="#"><img src="assets/tt.png" class="img-circle img-thumbnail"></a>
            <a href="#"><img src="assets/wt.png" class="img-circle img-thumbnail"></a>
	   </div>
</div>
</div><!-- footer pf the page ends here -->
<script type="text/javascript">
var s ="Welcome to mess Managment System ......! ! ";
var t=0;
function type()
{     
	document.getElementById('text').innerHTML += s[t];
	t++;
	if(t>s.length-1) 
	{
		//t=0; if required later i can change it 
		//document.getElementById('text').innerHTML=" ";
		clearInterval(typing);
	}	
}
typing=setInterval(type,200);
</script>
    <script src="js/sticky-index.js"></script>
	<script src="js/bootstrap.js"></script>
  </body>
</html>