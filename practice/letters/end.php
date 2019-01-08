<?php
session_start();
$_SESSION['trial'] = 0;
$_SESSION['clicked'] = '';
header("Location: http://localhost:8000/practice/math/index.php");
?>
<html>
<head>
<title>End of Task - OSPAN</title>
<link rel="stylesheet" type="text/css" href="http://localhost:8000/assets/style.css">
</head>
<body>
<div class="container">
  	<div id="instruct_area">
  		<h1>Automated OSPAN task.</h1>
      <br>
      <p>This portion of the task is complete.</p>
  	</div>
</div>
</body>
</html>