
<?php $conn = mysqli_connect("localhost","root","amit","mess");?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Sticky Navigation</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/navbar.css" rel="stylesheet">
	<style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      * {
  box-sizing: border-box;
}
body {
  margin: 0;
  padding-top: 250px;
}
header {
  height:900px;
  padding-top: 50px;
background-image: url('assets/home-image.jpg');
  z-index:-9999;
}
.main-nav,
.main-nav {
  transition:1s;	
  background: skyblue;
  height: 80px;
  z-index: 150;
  width: 102%;
  margin-bottom: -80px;
  box-shadow: 0 2px 3px rgba(0,0,0,.4);
}
header,
.main-nav-scrolled {
  position: fixed;
  width: 100%;
  top: 0;
}
.main h1{margin-top:-20px;}
div.main {
  padding-top:100px;
  background: #f2f2e8;
  padding: 110px 0px 50px 0px;
  margin-right:50px;
  width: 102%;
  border:2px solid red;
}
.row{
	background: #f2f2e8;
}
.col-sm-3{
	border:2px solid black;
} /* remove after done */ 
.col-sm-6{
	border:2px solid red;
}/* remove after done */ 

.mess-list{
	padding-left:5%;
	padding-right:5%;
	}
.mess{
	overflow:hidden;
	height:200px;
	width:200px;
	border:3px solid green;
	transition: 1s;
	border-radius:10px;
	
}
.mess:hover{
	height:200px;
	width:200px;
	transition:1s;
	transform:scale(1.1); 
	border-radius:100%;
	border:5px solid red;
	transform:rotate(360deg);
}
.mess #imgicon{height:200px;width:200px;}

    </style>
        <script src="js/prefixfree.min.js"></script> 
		<script src='js/jquery.js'></script>	
  <script>
	$(document).ready(function(){
		$("a[href*='#']:not([href='#'])").click(function(){
			var target = $(this.hash);
			target = target.length ? target : $('[name]=' + this.hash.substr(1) + ']');
			if(target.length){
				$('html,body').animate({
					scrollTop : target.offset().top
				},3000);
			return false; 
			}
		});
	});
  
  window.onload = function(){
	window.scroll(0,250);

  }
  </script>
  </head>

  <body>
<div id="top10"></div>
<header id="top">
  
</header>
<nav class="main-nav navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">NITC MESS</a>
    </div>
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		 <ul class="nav navbar-nav">
			<li><a href="index.html"><span class="glyphicon glyphicon-home">&ensp;</span>Home</a></li>
			<li><a href="index.html"><span class="glyphicon glyphicon-home">&ensp;</span>Students</a></li>
			<li><a href="index.html"><span class="glyphicon glyphicon-home">&ensp;</span>Site feedback</a></li>
			
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-home">&ensp;</span>Contractor <span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<li><a href="#">Mess A</a></li>
				<li><a href="#">Mess B</a></li>
				<li><a href="#">Mess C</a></li>
				<li><a href="#">Mess D</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="#">Mess E</a></li>
                
			  </ul>
			</li>
			
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-home">&ensp;</span>Mess <span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<li><a href="#">Mess A</a></li>
				<li><a href="#">Mess B</a></li>
				<li><a href="#">Mess C</a></li>
				<li><a href="#">Mess D</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="#">Mess E</a></li>
			  </ul>
			</li>
			<li><a href="#footer"><span class="glyphicon glyphicon-home">&ensp;</span>About Us</a></li>
		  	<li><a href="index.html"><span class="glyphicon glyphicon-log-out">&ensp;</span>Logout</a></li>
          </ul>
		  
	</div>	
  </div>
</nav>
<div class="main"><h1 align="center"><b>Welcome to NITC mess Managment System</b></h1></div>

<div class="row">
	
	<div class="col col-sm-3">
		<div class="panel panel-success">
			  <div class="panel-heading">Quick Navigation to mess </div>
			  <div class="panel-body">
				<ul class="list-group">
					<?php
						//$conn = mysqli_connect("localhost","root","amit","mess");
				
						$sql =  "SELECT * FROM  mess ";
				
						$result = $conn->query($sql);

						if ($result->num_rows > 0) 
						{
							// output data of each row
							while($row = $result->fetch_assoc()) 
							{
								echo '<li class="list-group-item"><a href="pan.php?messname=' . $row['messname'] . '">'. $row['messname'] . '- MESS</a></li>';
							}
						} 
						else 
						{
							echo "0 results";
						}
					?>
				  </ul>
			  
			  </div>
				  
		</div>

		<div class="mess-list col-md-6">
			
			LEFT SIDE BAR 
			
		</div>
	
	</div>
	
	<div class="col col-sm-6">
		<div class="row" >
			<div class="col col-lg-12">
            	<h3 align="center">Mess Details</h3>
				<table class="table table-hover">
				 
					<?php //   getting mess details 
					
						if(isset($_GET['messname']))
						{

							$mname = $_GET['messname'];
					
							$sql =  "SELECT * FROM  mess where messname = '$mname' ";
					
							$result = $conn->query($sql);

							if ($result->num_rows > 0) 
							{
								// output data of each row
								echo "<tr><td>MESS NAME </td> <td>MESS TYPE </td> <td>CONTRACTOR ID's</td> <td>STUDENT IDs</td></tr>";
								while($row = $result->fetch_assoc()) 
								{
									echo '<tr><td>'. $row['messname'] . '</td>';
									echo '<td>'. $row['type'] . '</td>';
									echo '<td>'. $row['cid'] . '</td>';
									echo '<td>'. $row['sid'] . '</td></tr>';
								}
						    }
						    else 
							{
								echo "0 results";
							}
						 }   						
					?>
			    </table>	
			</div>


		</div>


		<div class="row">
			<div class="col col-sm-6">
				MIDDLE CONTENT
			</div>
			<div class="col col-sm-6">
				MIDDLE CONTENT
			</div>
		</div>	
	</div>
	
	
	
	<div class="col col-sm-3">
		<div class="panel panel panel-primary">
			  <div class="panel-heading">NOTIFICATION</div>
			  <div class="panel-body"><p>JUST A BODY </p> 
				<ul class="list-group">
				<li class="list-group-item">Cras justo odio</li>
				<li class="list-group-item">Dapibus ac facilisis in</li>
				<li class="list-group-item">Morbi leo risus</li>
				<li class="list-group-item">Porta ac consectetur ac</li>
				<li class="list-group-item">Vestibulum at eros</li>
			   </ul>
			  </div>
			   
		</div>
		<div class="panel panel-success">
			  <div class="panel-heading">NOTIFICATION </div>
			  <div class="panel-body"><p>JUST A BODY </p> 
				<ul class="list-group">
					<li class="list-group-item">Cras justo odio</li>
					<li class="list-group-item">Dapibus ac facilisis in</li>
					<li class="list-group-item">Morbi leo risus</li>
					<li class="list-group-item">Porta ac consectetur ac</li>
					<li class="list-group-item">Vestibulum at eros</li>
				  </ul>
			  
			  </div>
				  
		</div>
		
		<div class="panel panel-info">
			  <div class="panel-heading">NOTIFICATION</div>
			  <div class="panel-body"><p>JUST A BODY </p>
				<ul class="list-group">
					<li class="list-group-item">Cras justo odio</li>
					<li class="list-group-item">Dapibus ac facilisis in</li>
					<li class="list-group-item">Morbi leo risus</li>
					<li class="list-group-item">Porta ac consectetur ac</li>
					<li class="list-group-item">Vestibulum at eros</li>
				  </ul>

			  </div>
				  
		</div>
		
		<div class="panel panel-warning">
			  <div class="panel-heading">NOTIFICATION</div>
			  <div class="panel-body"><p>JUST A BODY </p> 
				<ul class="list-group">
					<li class="list-group-item">Cras justo odio</li>
					<li class="list-group-item">Dapibus ac facilisis in</li>
					<li class="list-group-item">Morbi leo risus</li>
					<li class="list-group-item">Porta ac consectetur ac</li>
					<li class="list-group-item">Vestibulum at eros</li>
				  </ul>
			  
			  
			  </div>
				  
		</div>
		
		<div class="panel panel-danger">
			  <div class="panel-heading">NOTIFICATION</div>
			  <div class="panel-body"><p>JUST A BODY </p> 
				<ul class="list-group">
					<li class="list-group-item">Cras justo odio</li>
					<li class="list-group-item">Dapibus ac facilisis in</li>
					<li class="list-group-item">Morbi leo risus</li>
					<li class="list-group-item">Porta ac consectetur ac</li>
					<li class="list-group-item">Vestibulum at eros</li>
				  </ul>
			  
			  </div>
				  
		</div>				
	</div>
	
</div> 
</div>   
<div class="footer" id="footer"><a href="pan.php#top10">BACK TO TOP </a></div>	
    <script src="js/sticky-index.js"></script>
	<script src="js/bootstrap.js"></script>
  </body>
</html>
