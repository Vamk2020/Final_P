<?php
$min = $_POST("min");
$max = $_POST("max");
$id = $_POST("id");
$today = date(Y-m-d H:i:s);
$ip = $_SERVER(REMOTE_ADDR);

$rec= $today. '.' . $min . '.' . $max . '.' . $ip . '.' . "\n";
$rec= "appdev.log";
if (file exists($rfile))
	$fp = fopen($rfile,"a");
	else
	$fp = fopen($rfile,"w");
	fclose($fp);
	echo "Data is recorded";
?>