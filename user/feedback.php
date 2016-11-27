<html>
  <head></head>
  <body>
<?php
function user_feed(){
	
	echo '<div class="container">
  <h2 align="center">Feedback  form</h2>
  <form class="form-horizontal" role="form" action="user.php" method="POST">
    
	<div class="form-group">
      <label class="control-label col-sm-2" for="subject">Mobile Number </label>
      <div class="col-sm-7">
        <input type="text" class="form-control" id="Mob_num" placeholder="Your Mobile number" required>
      </div>
    </div>
	
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="subject">Subject</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" id="subject" placeholder="Write Subject " required>
      </div>
    </div>
	
	
	
	
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-7">          
        <textarea class="form-control" placeholder="Enter Post Your Feedback" id="pwd" cols="10" rows="10" required  spellcheck="true" contextmenu="false" draggable="false"></textarea>
		
      </div>
    </div>
	
	
	
	
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-8">
        <div class="checkbox">
          <label><input type="checkbox" id="agreement" checked>Accept</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-8">
        <button type="submit" class="btn btn-default" onClick="return accept();">Save Feedback</button>
      </div>
    </div>
  </form>';
	
}

  ?>
  <script>
  function accept(){
	  document.getElementById('agreement').style.border ="1px solid green";
	  document.getElementById('Mob_num').style.border ="1px solid green";
	  document.getElementById('pwd').style.border ="1px solid green";
	  if(/[^0123456][0-9]{9}/.test(document.getElementById('Mob_num').value))
	  {
		  
			if(document.getElementById('agreement').checked)
			{
			   //console.log(s);
			   return true;
			}else{
			  
			  window.alert("Please Select Agreement to Make Feedback");
			   document.getElementById('agreement').style.border ="2px solid red";
			  return false;
			}
	  }else{
		  
		  window.alert("Invalid  Mobile Number");
		  document.getElementById('Mob_num').style.border ="2px solid red";
		  return false;
		  
	  }  
  }
  </script>
 </body>
  </html>
  
  