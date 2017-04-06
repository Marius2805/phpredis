<?php
$sessionId = $argv[1];
$sleepTime = $argv[2];
$maxExecutionTime = $argv[3];

ini_set('max_execution_time', $maxExecutionTime);


if (isset($argv[4])) {
    ini_set('redis.session.lock_retries', $argv[4]);
}

if (isset($argv[5])) {
    ini_set('redis.session.locking_enabled', $argv[5]);
}

if (isset($argv[6])) {
    ini_set('redis.session.lock_wait_time', $argv[6]);
}

session_id($sessionId);
session_start();
sleep($sleepTime);

