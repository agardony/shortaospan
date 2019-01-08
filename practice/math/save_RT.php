<?php
session_start();

$_SESSION['RT'] = $_POST['reaction_time'];
$_SESSION['all_RTs'][] = $_SESSION['RT'];
$_SESSION['avg_RT'] = ($_SESSION['RT']/$_SESSION['trial'])*1000;

header("Location: http://localhost:8000/practice/math/response.php");
?>