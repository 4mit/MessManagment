<?php
	if(isset($_POST['admin_name']){
		
	}else{
		echo "You Havn't Login Please Login ";
		
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" media="screen" href="css/particle-style.css">
  <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>


<div id="particles-js">
	<div class="container">
    	<div class="well">hi</div>
    </div>
</div>

















<script src="js/bootstrap.js"></script>
<script src="js/jquery.js"></script>
<script src="js/particles.js"></script>
<script src="js/particle-app.js"></script>
<script>
  var count_particles, stats, update;
  stats = new Stats;
  stats.setMode(0);
  stats.domElement.style.position = 'absolute';
  stats.domElement.style.left = '0px';
  stats.domElement.style.top = '0px';
  count_particles = document.querySelector('.js-count-particles');
  update = function() {
    stats.begin();
    stats.end();
    requestAnimationFrame(update);
  };
  requestAnimationFrame(update);
</script>

</body>
</html>