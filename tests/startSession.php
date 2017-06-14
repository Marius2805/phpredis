<?php
$sessionId = $argv[1];
$sleepTime = $argv[2];
$maxExecutionTime = $argv[3];
$lock_retries = $argv[4];
$lock_expire = $argv[5];
$sessionData = $argv[6];

ini_set('max_execution_time', $maxExecutionTime);
ini_set('redis.session.lock_retries', $lock_retries);
ini_set('redis.session.lock_expire', $lock_expire);

if (isset($argv[7])) {
    ini_set('redis.session.locking_enabled', $argv[7]);
}

if (isset($argv[8])) {
    ini_set('redis.session.lock_wait_time', $argv[8]);
}

session_id($sessionId);
$sessionStartSuccessful = session_start();
sleep($sleepTime);
if (!empty($sessionData)) {
    $_SESSION['redis_test'] = $sessionData;
}
session_write_close();

echo $sessionStartSuccessful ? 'SUCCESS' : 'FAILURE';