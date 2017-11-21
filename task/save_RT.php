<?php
session_start();
#usleep(500000); # sleep for 1/2 sec to allow RT inputs to catch up
if (isset($_POST['reaction_time'])) {
	# save reaction time for trial
	$_SESSION['RT'] = $_POST['reaction_time'];
	$_SESSION['speed_errors_total'] += 0;
	$_SESSION['speed_errors_trial'] += 0;
	
	# move to response screen after saving RT
	header("Location: http://cognitivetask.com/shortaospan/task/m_response.php");
}
elseif (!isset($_POST['reaction_time'])) {
	$_SESSION['RT'] = $_SESSION['timeout']/1000;
	$_SESSION['i_accuracy'] = 0;
	$_SESSION['speed_errors_total'] += 1;
	$_SESSION['speed_errors_trial'] += 1;
	$_SESSION['resp_errors_total'] += 0;
	$_SESSION['resp_errors_trial'] += 0;
	$_SESSION['math_user_resp'] = 'SLOW';
	
	header("Location: http://cognitivetask.com/shortaospan/task/letter.php");
}
?>