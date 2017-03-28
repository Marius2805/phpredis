<?php
$sessionId = $argv[1];
$sleepTime = $argv[2];
$maxExecutionTime = $argv[3];

ini_set('max_execution_time', $maxExecutionTime);

session_id($sessionId);
session_start();
sleep($sleepTime);

