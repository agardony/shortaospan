<?php
session_start();
unset($_POST['TRUE']);
unset($_POST['FALSE']);
?>
<html>
<head>
<title>Response Screen - OSPAN</title>
<link rel="stylesheet" type="text/css" href="http://localhost:8000/assets/style.css">
</head>
<body>
<div class="container">
  <div id="canvas_area">
    <div id="math_area">
      <?php echo($_SESSION['given-response']); ?>
    </div>
    <div id="fix_buttons">
	    <div id="row">
	      <div id="col2">
	      <center>
	        <form action="http://localhost:8000/practice/math/save_trial.php" method="post" onSubmit="document.getElementsByClassName('TF')[0].disabled=true;document.getElementsByClassName('TF')[1].disabled=true;">
	          <input id="allclicks" type="hidden" name="TRUE">
	          <input id="function_button" class="TF" type="submit" value="TRUE">
	        </form>
	       </center>
	      </div>
	      <div id="col2">
	      <center>
	        <form action="http://localhost:8000/practice/math/save_trial.php" method="post" onSubmit="document.getElementsByClassName('TF')[0].disabled=true;document.getElementsByClassName('TF')[1].disabled=true;">
	          <input id="allclicks" type="hidden" name="FALSE">
	          <input id="function_button" class="TF" type="submit" value="FALSE">
	        </form>
	       </center>
	      </div>
	    </div>
  	</div>
 </div>
</div>
</body>
<script>
    window.setTimeout(function(){
        // Move to a new location or you can do something else
        window.location.href = "http://localhost:8000/practice/math/save_trial.php";
    }, 5000);
</script>
</html>