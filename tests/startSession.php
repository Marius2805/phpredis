<?php
$sessionId = $argv[1];
$sleepTime = $argv[2];
$maxExecutionTime = $argv[3];
$lock_retries = $argv[4];
$lock_expire = $argv[5];

ini_set('max_execution_time', $maxExecutionTime);
ini_set('redis.session.lock_retries', $lock_retries);
ini_set('redis.session.lock_expire', $lock_expire);

if (isset($argv[6])) {
    ini_set('redis.session.locking_enabled', $argv[6]);
}

if (isset($argv[7])) {
    ini_set('redis.session.lock_wait_time', $argv[7]);
}

session_id($sessionId);
session_start();
sleep($sleepTime);

