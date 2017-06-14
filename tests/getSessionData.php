<?php
$sessionId = $argv[1];

session_id($sessionId);
if (!session_start()) {
    echo "session_start() was nut successful";
} else {
    echo isset($_SESSION['redis_test']) ? $_SESSION['redis_test'] : 'Key redis_test not found';
}
