<?php

$results = $_REQUEST['comment'];

$filepath = __DIR__ . '/comments/';
$filename = time() . getmypid();

$wroteCount = file_put_contents($filepath.$filename, $results);

print json_encode([wroteCount => $wroteCount]);

exit();
