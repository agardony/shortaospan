<?php
session_start();
?>
<html>
<head>
<title>Feedback - OSPAN</title>
<link rel="stylesheet" type="text/css" href="http://localhost:8000/assets/style.css">
</head>
<body>
<div class="container">
  <div id="feedback_area">
  You recalled <?php echo $_SESSION['correct']; ?> out of <?php echo ($_SESSION['current-set']); ?> letters correctly.
  </div>
</div>
</body>
<script>
var timeoutNextTrial = 2000;
function nextTrial () {
	window.location.replace("http://localhost:8000/practice/letters/letters.php");
}
setTimeout(function() {nextTrial()},timeoutNextTrial);
</script>
</html>